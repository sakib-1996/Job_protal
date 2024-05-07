
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





<div class="container mt-3">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="page-title">
                <h2>About Us</h2>
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


<section class="mt-3">
    <div class="container">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
            <div>{!! $about->description ?? ' Empty' !!}
            </div>
        </div>
    </div>
</section>

<section class="section-2 bg-2 py-5">
    <div class="container">
        <h2>Companies believe in us</h2>
        <div class="row pt-5 d-flex overflow-x-auto">
            @foreach ($top_comp as $company)
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory shadow bg-body-tertiary rounded">
                        <a href="#">
                            <h4 class="pb-2">{{ $company->companyProfile->user->name ?? '' }}</h4>
                        </a>
                        <p class="mb-0">{!! $company->companyProfile->short_des ?? 'Default Text if Null' !!}</p>
                        <p class="mb-0">Total Job Post<span> 50</span></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
