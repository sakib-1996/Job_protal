<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 row">
            <h4 class="col-md-6">Job Type</h4>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item">
                        <a href="{{ route('jobIndex') }}">Index</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url()->current() }}">This Page</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="card border-0">
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

            <div class="p-4">
                <form action="{{ url()->current() }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Company Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                            id="name">
                        @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="job_title" class="form-label">Job Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                            id="job_title">
                        @error('title')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">

                        <div style="width: 50%">
                            <figure class="image-container">
                                <img id="chosen-image">
                                <figcaption id="file-name"></figcaption>
                            </figure>

                            <input type="file" id="logo" name="logo" accept="image/*"
                                onchange="previewImage()">
                            <div class="mb-1">
                                @error('logo')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label class="label" for="logo">
                                <i class="fas fa-upload"></i> &nbsp; Choose A Photo
                            </label>
                        </div>



                        {{-- <label for="logo" class="form-label">Company Logo</label>
                        <input type="file" name="logo" value="{{ old('logo') }}" class="form-control"
                            id="logo">
                        @error('logo')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>


                    <div class="mb-3">
                        <label for="short_des" class="form-label">Short Description</label>
                        <input type="text" name="short_des" value="{{ old('short_des') }}" class="form-control"
                            id="short_des">
                        @error('short_des')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" value="{{ old('location') }}" class="form-control"
                            id="location">
                        @error('location')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary Range</label>
                        <input type="text" name="salary" value="{{ old('salary') }}" class="form-control"
                            id="salary">
                        @error('salary')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6 mb-3">
                            <label for="dateline" class="form-label">Deadline</label>
                            <input type="date" value="{{ old('dateline') }}" name="dateline" class="form-control"
                                id="dateline">

                            @error('dateline')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="experience" class="form-label">Experience</label>
                            <select class="form-select" name="experience" id="experience">
                                <option selected disabled>Open this select menu</option>
                                @foreach ($experience as $experience)
                                    <option value="{{ $experience->id }}"
                                        {{ old('experience') == $experience->id ? 'selected' : '' }}>
                                        {{ $experience->experience }}
                                    </option>
                                @endforeach
                            </select>
                            @error('experience')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="category" id="category">
                                <option selected disabled>Open this select menu</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="Type" class="form-label">Type</label>
                            <select name="type" class="form-select" id="Type">
                                <option selected disabled>Open this select menu</option>
                                @foreach ($type as $jobType)
                                    <option value="{{ $jobType->id }}"
                                        {{ old('type') == $jobType->id ? 'selected' : '' }}>
                                        {{ $jobType->job_type }}
                                    </option>
                                @endforeach
                            </select>
                            @error('type')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <div class="my-3">
                        <label class="form-label mb-2">Job Details</label>
                        <textarea name="job_details" id="jobDetails">{{ old('job_details') }}</textarea>
                        @error('job_details')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="my-3">
                        <label class="form-label mb-2">Job Requirement</label>
                        <textarea name="requirment" id="jobRequirement">{{ old('requirment') }}</textarea>
                        @error('requirment')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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

        $('#jobRequirement').summernote({
            placeholder: 'Job Requirement',
            tabsize: 2,
            height: 120,
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

    function previewImage() {
        var input = document.getElementById('logo');
        var image = document.getElementById('chosen-image');
        var fileNameDisplay = document.getElementById('file-name');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                image.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
            fileNameDisplay.textContent = input.files[0].name;
        }
    }
</script>
