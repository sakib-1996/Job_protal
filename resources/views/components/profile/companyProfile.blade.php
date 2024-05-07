<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Jobs</h4>
        </div>

        <div class="card border-0">


            <div class="p-3">
                <div class="row">
                    <div class="col-md-7 col-sm-8">
                        <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif


                            @if (session('status') && session('msg'))
                                <div class="">
                                    <div class="alert alert-{{ session('status') }}" role="alert">
                                        {{ session('msg') }}
                                    </div>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" readonly name="type" value="Company" class="form-control"
                                    id="type">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Company Name</label>
                                <input type="text" name="name"
                                    value="{{ old('name', auth()->user()->name ?? '') }}" class="form-control"
                                    id="name">
                                @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
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



                            <div class="my-3">
                                <label class="form-label mb-2">Company Short Description</label>
                                <textarea name="short_des" id="jobDetails">{{ old('short_des', $profile->short_des ?? '') }}</textarea>
                                @error('short_des')
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
                                <div class="overlay-text">
                                    <p class="bg-secondary pt-0 pe-1 pb-0 ps-1">Add</p>
                                </div>
                                <a href="#" class="overlay-button">Message For add</a>
                            </div>
                            <div class="m-3 adds text-center image-container">
                                <img style="width: 70%; height: 50%" class="image"
                                    src="{{ asset('uploads/defult/defuldAdds.gif') }}" alt="">
                                <div class="overlay-text">
                                    <p class="bg-secondary pt-0 pe-1 pb-0 ps-1">Add</p>
                                </div>
                                <a href="#" class="overlay-button">Message For add</a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
    $(document).ready(function() {
        $('#jobDetails').summernote({
            placeholder: 'Job Details',
            tabsize: 2,
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['help']]
            ]
        });
    });
</script>
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
                fileNameDisplay.textContent = file.name;
            }
        });
    });
</script>
