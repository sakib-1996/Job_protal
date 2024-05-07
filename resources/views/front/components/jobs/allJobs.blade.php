<div class="bg-custom">
    <div class="slider_sizing">
        <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="2000">
            <div class="carousel-inner" role="listbox" data-bs-ride="carousel">
                <!-- Slide 1 -->
                @if (isset($sliders->image_1) && !empty($sliders->image_1))
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="{{ $sliders->image_1 }}" class="d-block w-100" alt="Slider 1">
                        <div class="carousel-caption-text d-none d-md-block">
                            <h5 class="text-white">Slide 1 Label</h5>
                            <p>Content for slide 1.</p>
                        </div>
                    </div>
                @else
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('uploads/default/640x360.png') }}" class="d-block w-100"
                            alt="Default Slider 1">
                    </div>
                @endif

                <!-- Slide 2 -->
                @if (isset($sliders->image_2) && !empty($sliders->image_2))
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ $sliders->image_2 }}" class="d-block w-100" alt="Slider 2">
                        <div class="carousel-caption-text d-none d-md-block">
                            <h5 class="text-white">Slide 2 Label</h5>
                            <p>Content for slide 2.</p>
                        </div>
                    </div>
                @else
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('uploads/default/640x360.png') }}" class="d-block w-100"
                            alt="Default Slider 2">
                    </div>
                @endif

                <!-- Slide 3 -->
                @if (isset($sliders->image_3) && !empty($sliders->image_3))
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ $sliders->image_3 }}" class="d-block w-100" alt="Slider 3">
                        <div class="carousel-caption-text d-none d-md-block">
                            <h5 class="text-white">Slide 3 Label</h5>
                            <p>Content for slide 3.</p>
                        </div>
                    </div>
                @else
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('uploads/default/640x360.png') }}" class="d-block w-100"
                            alt="Default Slider 3">
                    </div>
                @endif

                <!-- Slide 4 -->
                @if (isset($sliders->image_4) && !empty($sliders->image_4))
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ $sliders->image_4 }}" class="d-block w-100" alt="Slider 4">
                        <div class="carousel-caption-text d-none d-md-block">
                            <h5 class="text-white">Slide 4 Label</h5>
                            <p>Content for slide 4.</p>
                        </div>
                    </div>
                @else
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('uploads/default/640x360.png') }}" class="d-block w-100"
                            alt="Default Slider 4">
                    </div>
                @endif
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>





    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h2>Find Jobs</h2>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url()->current() }}">This Page</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <section class="section-3 py-5">
        <div class="container border">
            <div class="row ">
                <div class="col-6 col-md-2">
                    <div class="align-end">
                        <form action="{{ url()->current() }}" method="get" class="border border-2 shadow-lg mt-3">
                            <select name="sort" id="sort" class="form-control " onchange="this.form.submit()">
                                <option value="newest" {{ $sort == 'newest' ? 'selected' : '' }}>Newest</option>
                                <option value="oldest" {{ $sort == 'oldest' ? 'selected' : '' }}>Oldest</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row pt-5">
                <div class="col-md-4 col-lg-3 sidebar mb-4">
                    <div class="card border-0 shadow p-4">
                        {{-- <div class="mb-4">
                            <h2>Keywords</h2>
                            <input type="text" placeholder="Keywords" class="form-control">
                        </div> --}}

                        <div class="mb-4">
                            <h2>Filters</h2>
                            <form action="{{ url()->current() }}" method="get">
                                <div class="input-group">
                                    <input type="text" name="location" placeholder="Location"
                                        class="form-control" value="{{ $selectedLocation }}">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>



                        <div class="mb-4">
                            <h2>Category</h2>
                            <form action="{{ url()->current() }}" method="get">
                                <select name="category" id="category" class="form-control"
                                    onchange="this.form.submit()">
                                    <option value="">Select a Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $selectedCategory == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        </div>


                        <div class="mb-4">
                            <h2>Job Type</h2>
                            <form id="jobTypeForm" action="{{ url()->current() }}" method="get">
                                @foreach ($types as $type)
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" name="job_types[]" type="checkbox"
                                            value="{{ $type->id }}" id="type_{{ $type->id }}"
                                            {{ in_array($type->id, $selectedJobTypes) ? 'checked' : '' }}
                                            onchange="document.getElementById('jobTypeForm').submit()">
                                        <label class="form-check-label"
                                            for="type_{{ $type->id }}">{{ $type->job_type }}</label>
                                    </div>
                                @endforeach
                            </form>
                        </div>



                        <div class="mb-4">
                            <h2>Experience</h2>
                            <form action="{{ url()->current() }}" method="get">
                                <select name="experience" id="experience" class="form-control"
                                    onchange="this.form.submit()">
                                    <option value="">Select Experience</option>
                                    @foreach ($experienceOptions as $exp)
                                        <option value="{{ $exp->id }}"
                                            {{ $selectedExperience == $exp->id ? 'selected' : '' }}>
                                            {{ $exp->experience }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9 ">
                    <div class="job_listing_area">
                        <div class="job_lists">
                            <div class="scroll">
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

                                @foreach ($allJob as $job)
                                    <div class="">
                                        <div class="card border-0  shadow mb-2">
                                            <div class="card-body">

                                                <h4 class="border-0 pb-2 mb-0">
                                                    {{ $job->title }}
                                                    @if (isset($jobAply) && $jobAply->where('job_id', $job->id)->count() != 0)
                                                        <i class="text-success fa-solid fa-circle-check"></i>
                                                    @endif
                                                </h4>

                                                <p>{{ $job->short_des }}</p>
                                                <div class="d-flex text-break p-3 border">
                                                    <p class="mb-0 btn btn-primary rounded-pill btn-sm mx-1">
                                                        <span class="fw-bolder"><i
                                                                class="fa fa-map-marker"></i></span>
                                                        <span class="ps-1">{{ $job->experience->experience }}</span>
                                                    </p>
                                                    <p class="mb-0 btn btn-danger rounded-pill btn-sm mx-1">
                                                        <span class="fw-bolder"><i
                                                                class="fa fa-map-marker"></i></span>
                                                        <span class="ps-1">{{ $job->category->name }}</span>
                                                    </p>
                                                    <p class="mb-0 btn btn-warning rounded-pill btn-sm mx-1">
                                                        <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                                        <span class="ps-1">{{ $job->type->job_type }}</span>
                                                    </p>
                                                    <p class="mb-0 btn btn-info rounded-pill btn-sm mx-1">
                                                        <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                                        <span class="ps-1">{{ $job->salary }}</span>
                                                    </p>

                                                </div>
                                                <div class="d-flex justify-content-end mt-2">
                                                    <div>
                                                        @if (!isset($jobAply))
                                                            <a class="mb-0 btn btn-success btn-sm mx-1">Applied</a>
                                                        @elseif ($jobAply->where('job_id', $job->id)->count() == 0)
                                                            <a href="{{ route('applyPage', ['id' => $job->id]) }}"
                                                                class="mb-0 btn btn-success btn-sm mx-1">Apply</a>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('jobDetails', ['id' => $job->id]) }}"
                                                            class="btn btn-primary btn-sm">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="mt-4">
                                    {{ $allJob->links('vendor.pagination.bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<script>
    function submitForm() {
        document.getElementById('locationForm').submit();
    }
</script>
