@extends('layouts.app')
@section('contant')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 row">
                <h4 class="col-md-6">Page Sliders</h4>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item">
                            <a href="{{ route('sittings.index') }}">Sittings</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url()->current() }}">This Page</a>
                        </li>
                    </ol>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card border-0">
                <div class="p-4">
                    <form action="{{ url()->current() }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mt-3 col-sm-9">
                                <figure class="image-container">
                                    @if (isset($img->image_1))
                                        <img src="{{ $img->image_1 }}" alt="Banner" id="chosen-image-1">
                                    @endif
                                    <figcaption id="file-name-1"></figcaption>
                                </figure>
                                <input type="file" id="upload-button-1" name="image_1" accept="image/*">
                                @error('image_1')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="label" for="upload-button-1">
                                    <i class="fas fa-upload"></i> &nbsp; Choose A Photo
                                </label>
                            </div>
                            <div class="col-md-6 mt-3 col-sm-9">
                                <figure class="image-container">
                                    @if (isset($img->image_2))
                                        <img src="{{ $img->image_2 }}" alt="Banner" id="chosen-image-2">
                                    @endif
                                    <figcaption id="file-name-2"></figcaption>
                                </figure>
                                <input type="file" name="image_2" id="upload-button-2" accept="image/*">
                                @error('image_2')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="label" for="upload-button-2">
                                    <i class="fas fa-upload"></i> &nbsp; Choose A Photo
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mt-3 col-sm-9">
                                <figure class="image-container">
                                    @if (isset($img->image_3))
                                        <img src="{{ $img->image_3 }}" alt="Banner" id="chosen-image-3">
                                    @endif
                                    <figcaption id="file-name-3"></figcaption>
                                </figure>
                                <input type="file" name="image_3" id="upload-button-3" accept="image/*">
                                @error('image_3')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="label" for="upload-button-3">
                                    <i class="fas fa-upload"></i> &nbsp; Choose A Photo
                                </label>
                            </div>
                            <div class="col-md-6 mt-3 col-sm-9">
                                <figure class="image-container">
                                    @if (isset($img->image_4))
                                        <img src="{{ $img->image_4 }}" alt="Banner" id="chosen-image-4">
                                    @endif
                                    <figcaption id="file-name-4"></figcaption>
                                </figure>
                                <input type="file" name="image_4" id="upload-button-4" accept="image/*">
                                @error('image_4')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="label" for="upload-button-4">
                                    <i class="fas fa-upload"></i> &nbsp; Choose A Photo
                                </label>
                            </div>
                        </div>


                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </main>


    <script>
        let uploadButtons = document.querySelectorAll('[id^="upload-button"]');
        let chosenImages = document.querySelectorAll('[id^="chosen-image"]');
        let fileNames = document.querySelectorAll('[id^="file-name"]');
        let labels = document.querySelectorAll('.label');

        uploadButtons.forEach((uploadButton, index) => {
            uploadButton.onchange = () => {
                let reader = new FileReader();
                reader.readAsDataURL(uploadButton.files[0]);

                reader.onload = () => {
                    chosenImages[index].setAttribute("src", reader.result);
                };

                fileNames[index].textContent = uploadButton.files[0].name;
                labels[index].classList.add('file-selected');
            };
        });
    </script>
@endsection
