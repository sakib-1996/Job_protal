@extends('layouts.app')
@section('contant')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h4 class="">Sittings <span class="fa-solid fa-gears"></span></h4>
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

            <div class="card border-0 shadow-lg">
                <div>
                    <div class="row">
                        <div class="col-3">
                            <a href="{{ route('categoryPageList') }}" class="card m-3 shadow-lg"
                                style="width: 12rem; text-decoration: none;">
                                <div class="card-body">
                                    <div class="fs-1 card-title text-center"><i class="fa-solid fa-layer-group"></i></div>
                                    <h6 class="card-subtitle mb-2 text-center text-body-secondary">Category</h6>
                                </div>
                            </a>
                        </div>

                        <div class="col-3">
                            <a href="{{ route('typePageList') }}" class="card m-3 shadow-lg"
                                style="width: 12rem; text-decoration: none;">
                                <div class="card-body">
                                    <div class="fs-1 card-title text-center"><i class="fa-solid fa-ribbon"></i></div>
                                    <h6 class="card-subtitle mb-2 text-center text-body-secondary">Job Type</h6>
                                </div>
                            </a>
                        </div>

                        <div class="col-3">
                            <a href="{{ route('experianceListPage') }}" class="card m-3 shadow-lg"
                                style="width: 12rem; text-decoration: none;">
                                <div class="card-body">
                                    <div class="fs-1 card-title text-center"><i class="fa-solid fa-person-digging"></i>
                                    </div>
                                    <h6 class="card-subtitle mb-2 text-center text-body-secondary">Experience</h6>
                                </div>
                            </a>
                        </div>

                        @if (auth()->user()->type === 1)
                            <div class="col-3">
                                <a href="{{ route('admin.slidersAdd') }}" class="card m-3 shadow-lg"
                                    style="width: 12rem; text-decoration: none;">
                                    <div class="card-body">
                                        <div class="fs-1 card-title text-center"><i class="fa-solid fa-sliders"></i></div>
                                        <h6 class="card-subtitle mb-2 text-center text-body-secondary">Add Slider</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('admin.aboutCreate') }}" class="card m-3 shadow-lg"
                                    style="width: 12rem; text-decoration: none;">
                                    <div class="card-body">
                                        <div class="fs-1 card-title text-center"><i class="fa-solid fa-address-card"></i>
                                        </div>
                                        <h6 class="card-subtitle mb-2 text-center text-body-secondary">About Page Manage
                                        </h6>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script>
        function validateForm() {
            var categoryName = document.getElementById('categoryName').value;

            if (!categoryName) {
                alert('Category Name cannot be empty.');
                return false;
            }
            return true;
        }
    </script>
@endsection
