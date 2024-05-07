@extends('layouts.app')
@section('contant')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h4>Profile</h4>
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
            @if (session('status') && session('msg'))
                <div class="">
                    <div class="alert alert-{{ session('status') }}" role="alert">
                        {{ session('msg') }}
                    </div>
                </div>
            @endif

            <div class="card border-0">
                <div class="p-3 row">
                    <div class="col-md-7 col-sm-8">
                        <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" readonly name="type" value="Candidate" class="form-control"
                                    id="type">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Company Name*</label>
                                <input type="text" name="name" value="{{ old('name', auth()->user()->name ?? '') }}"
                                    class="form-control" id="name">
                                @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">Location*</label>
                                <input type="text" name="location"
                                    value="{{ old('location', $profile->location ?? '') }}" class="form-control"
                                    id="location">
                                @error('location')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div>
                                <div style="width: 200px; margin:auto">
                                    <figure class="image-container">
                                        @if (!isset($profile->image))
                                            <img id="chosen-image-1">
                                        @else
                                            <img src="{{ $profile->image }}" alt="Banner" id="chosen-image-1">
                                        @endif
                                        <figcaption id="file-name-1"></figcaption>
                                    </figure>
                                </div>
                                <input type="file" id="upload-button-1" name="image" accept="image/*">
                                @error('image')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="label" for="upload-button-1">
                                    <i class="fas fa-upload"></i> &nbsp; Choose A Photo
                                </label>
                            </div>


                            <div class="mb-3">
                                <label for="date_of_birth" class="form-label">Date Of Birth*</label>
                                <input type="date" name="date_of_birth"
                                    value="{{ old('date_of_birth', $profile->date_of_birth ?? '') }}" class="form-control"
                                    id="date_of_birth">
                                @error('date_of_birth')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nid" class="form-label">NID </label>
                                <input type="text" name="nid" value="{{ old('nid', $profile->nid ?? '') }}"
                                    class="form-control" id="nid">
                                @error('nid')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="passport_no" class="form-label">Passport No</label>
                                <input type="text" name="passport_no"
                                    value="{{ old('passport_no', $profile->passport_no ?? '') }}" class="form-control"
                                    id="passport_no">
                                @error('passport_no')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-5 mt-3 col-sm-8">
                        @if (!$adds->isEmpty())
                            @foreach ($adds as $add)
                                <div class="m-3 text-center image-container">
                                    <img style="width: 70%;height: 50%" class="image" src="{{ $add->img_url }}"
                                        alt="">
                                    <p class="overlay-text">Add</p>
                                    <a href="{{ $add->site_url }}" class="overlay-button">Hover Button</a>
                                </div>
                            @endforeach
                        @else
                            <div class="m-3 adds text-center image-container">
                                <img style="width: 70%; height: 50%" class="image"
                                    src="{{ asset('uploads/defult/defuldAdds.gif') }}" alt="">
                                <p class="overlay-text">Add</p>
                                <a href="#" class="overlay-button">Message For add</a>
                            </div>
                            <div class="m-3 adds text-center image-container">
                                <img style="width: 70%; height: 50%" class="image"
                                    src="{{ asset('uploads/defult/defuldAdds.gif') }}" alt="">
                                <p class="overlay-text">Add</p>
                                <a href="#" class="overlay-button">Message For add</a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadButton = document.getElementById('upload-button-1');
            const chosenImage = document.getElementById('chosen-image-1');
            const fileNameDisplay = document.getElementById('file-name-1');

            uploadButton.addEventListener('change', function(event) {
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        chosenImage.src = e.target.result;
                    };

                    reader.readAsDataURL(file);

                    // Display the file name
                    fileNameDisplay.textContent = file.name;
                }
            });
        });
    </script>

@endsection
