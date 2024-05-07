@extends('layouts.app')
@section('contant')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h4>Jobs</h4>
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
                                <input type="text" readonly name="type"
                                    value="@if (auth()->user()->type == 2) Company @elseif (auth()->user()->type == 1) Admin @endif"
                                    class="form-control" id="type">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image Change</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name*</label>
                                <input type="text" name="name" value="{{ old('name', auth()->user()->name ?? '') }}"
                                    class="form-control" id="name">
                                @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email*</label>
                                <input type="text" name="email" value="{{ old('email', auth()->user()->email ?? '') }}"
                                    class="form-control" id="email">
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="mobile" class="form-label">MObile*</label>
                                <input type="text" name="mobile"
                                    value="{{ old('mobile', auth()->user()->mobile ?? '') }}" class="form-control"
                                    id="mobile">
                                @error('mobile')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password Change*</label>
                                <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                                    id="password">
                                @error('password')
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
                                        <div class="overlay-text">
                                            <p class="bg-secondary pt-0 pe-1 pb-0 ps-1">Add</p>
                                        </div>
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
    </main>
@endsection
