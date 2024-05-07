<div style="background-color: rgb(238, 238, 238)">
    <section class="section-2 py-5">
        <div class="container">
            <div class="container mt-5">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h2>Blog Post</h2>
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
            <div class="row pt-5">
                <div class="col-md-8 col-sm-8">
                    @foreach ($blogs as $blog)
                        <div class="">
                            <div class="single_catagory shadow bg-body-tertiary rounded">
                                <h4 class="pb-2">{{ $blog->title }}</h4>
                                <p>{{ $blog->user->name }} ({{ $blog->user->type === 1 ? 'Admin' : 'Company' }})</p>
                                <hr>
                                <p class="mb-0">{!! $blog->description !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4 mt-3 col-sm-8">
                    @if (!$adds->isEmpty())
                        @foreach ($adds as $add)
                            <div class="m-3 text-center image-container">
                                <img style="width: 100%;height: 100%" class="image" src="{{ $add->img_url }}"
                                    alt="">
                                <div class="overlay-text">
                                    <p class="bg-secondary pt-0 pe-1 pb-0 ps-1">Add</p>
                                </div>
                                <a href="{{ $add->site_url }}" class="overlay-button">Hover Button</a>
                            </div>
                        @endforeach
                    @else
                        <div class="m-3 adds text-center image-container">
                            <img style="width: 100%; height: 50%" class="image"
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
            <div class="mt-4">
                {{ $blogs->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </section>
</div>
