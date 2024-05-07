<!DOCTYPE html>
<html class="no-js" lang="en_AU" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CareerVibe | Find Best Jobs</title>
    <meta name="description" content="" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="pinterest" content="nopin" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="#" />
</head>

<body data-instant-intensity="mousedown">

    @if (session('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "{{ session('error') }}", 
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif





    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}"><b class="">JobPulse</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">
                                <b class="@if (url()->current() === route('home')) nav_active @endif">Home</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('about') }}">
                                <b class="@if (url()->current() === route('about')) nav_active @endif">About</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('find.job') }}">
                                <b class="@if (url()->current() === route('find.job')) nav_active @endif">Find Jobs</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('blog') }}">
                                <b class="@if (url()->current() === route('blog')) nav_active @endif">Blog</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('contact') }}">
                                <b class="@if (url()->current() === route('contact')) nav_active @endif">Contact</b>
                            </a>
                        </li>
                    </ul>
                    @guest
                        <a class="btn btn-outline-primary me-2" href="{{ route('login') }}" type="submit">Login</a>
                        <a class="btn btn-outline-primary me-2" href="{{ route('registation') }}"
                            type="submit">Registration</a>
                    @endguest
                    @auth
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                    <img src="{{ asset('uploads/defult/profile.jpg') }}" class="avatar img-fluid rounded"
                                        alt="Profile.jpg">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <h4 class="dropdown-item"><span
                                            style="cursor: pointer">{{ auth()->user()->name }}</span></h4>
                                    @if (auth()->user()->type === 1)
                                        <a href="{{ route('admin.dashboard') }}" class="dropdown-item">Dashboard</a>
                                        <a href="{{ route('admin.logout') }}" class="dropdown-item">Logout</a>
                                    @endif
                                    @if (auth()->user()->type === 2)
                                        <a href="{{ route('company.dashboard') }}" class="dropdown-item">Dashboard</a>
                                        <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                                    @endif
                                    @if (auth()->user()->type === 3)
                                        <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                                        <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                                    @endif


                                </div>
                            </li>
                        </ul>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    @yield('contant')

    <footer class="bg-dark py-3 bg-2">
        <div class="container">
            <p class="text-center text-white pt-3 fw-bold fs-6">© 2023 xyz company, all right reserved</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
