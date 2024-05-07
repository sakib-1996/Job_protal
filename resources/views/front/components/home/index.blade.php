<div class="slider_sizing">
    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
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
                    <img src="{{ asset('uploads/default/640x360.png') }}" class="d-block w-100" alt="Default Slider 1">
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
                    <img src="{{ asset('uploads/default/640x360.png') }}" class="d-block w-100" alt="Default Slider 2">
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
                    <img src="{{ asset('uploads/default/640x360.png') }}" class="d-block w-100" alt="Default Slider 3">
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
                    <img src="{{ asset('uploads/default/640x360.png') }}" class="d-block w-100" alt="Default Slider 4">
                </div>
            @endif
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<div style="background-color: rgb(238, 238, 238)">
    <section class="section-2 py-5">
        <div class="container">
            <h2>Top Companies</h2>
            <div class="row pt-5">
                @foreach ($top_companies as $top_company)
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory shadow bg-body-tertiary rounded">
                            <a href="">
                                <h4 class="pb-2">{{ $top_company->companyProfile->user->name }}</h4>
                            </a>
                            <p class="mb-0">{!! $top_company->companyProfile->short_des !!}</p>
                            <p class="mb-0">Total Job Post<span> 50</span></p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>


    <section class="section-3 content px-3 py-2">
        <div class="container  ">
            <h2>Recent Published Jobs</h2>
            <div class="row pt-5">
                <div class="job_listing_area">
                    <div class="job_lists">
                        <div class="row">
                            {{-- We are in need of a Web Developer for our company --}}
                            @foreach ($recent_jobs as $recent_job)
                                <div class="col-md-4">
                                    <div class="card border-0 p-3 shadow mb-4">
                                        <div class="card-body">
                                            <h3 class="border-0 fs-5 pb-2 mb-0">{{ $recent_job->title }}</h3>
                                            <p>{{ $recent_job->short_des }}</p>
                                            <div class="bg-light p-3 border">
                                                <p class="mb-0">
                                                    <span class="fw-bolder"><i
                                                            class="fa-solid fa-location-dot"></i></span>
                                                    <span class="ps-1">{{ $recent_job->location }}</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="fw-bolder"><i class="fa-regular fa-clock"></i></span>
                                                    <span class="ps-1">{{ $recent_job->type->job_type }}</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                                    <span class="ps-1">{{ $recent_job->salary }}</span>
                                                </p>
                                            </div>

                                            <div class="d-grid mt-3">
                                                <a href="{{ route('jobDetails', ['id' => $recent_job->id]) }}" class="btn btn-success btn-lg">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mb-5 justify-content-end">
                <a class="btn btn-primary btn-lg" href="{{ route('find.job') }}" role="button">Show all</a>
            </div>
        </div>

    </section>
</div>
