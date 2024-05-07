<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style-dashboard.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @yield('custom_css')
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">JobPuls</a>
                </div>
                <ul class="sidebar-nav">
                    @if (auth()->user()->type === 3)
                        <li class="sidebar-header">
                            <h5>Candidate Elements</h5>
                            <hr>
                        </li>
                        <li class="sidebar-item mt-1">
                            <a href="{{ route('home') }}" class="sidebar-link">
                                <i class="pe-2"></i>
                                Go To Front Page
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('dashboard') }}" class="sidebar-link">
                                <i class="pe-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('plugings') }}" class="sidebar-link">
                                <i class="pe-2"></i>
                                Pluging
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('apliedJobList') }}" class="sidebar-link">
                                <i class="pe-2"></i>
                                Job Applied
                            </a>
                        </li>
                    @endif


                    @if (auth()->user()->type === 2)
                        <li class="sidebar-header">
                            <h5>Company Elements</h5>
                            <hr>
                        </li>
                        <li class="sidebar-item mt-1 @if (url()->current() === route('home')) active @endif ">
                            <a href="{{ route('home') }}" class="sidebar-link">
                                <i class="fa-solid fa-reply-all pe-2"></i>
                                Go To Front Page
                            </a>
                        </li>
                        <li class="sidebar-item @if (url()->current() === route('company.dashboard')) active @endif ">
                            <a href="{{ route('company.dashboard') }}" class="sidebar-link">
                                <i class="fa-solid fa-chart-line pe-2"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" data-bs-target="#job" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa-solid fa-bars-staggered pe-2"></i>Job
                            </a>
                            <ul id="job" class="sidebar-dropdown ps-2 list-unstyled collapse"
                                data-bs-parent="#sidebar">
                                <li class="sidebar-item @if (url()->current() === route('jobIndex')) active @endif ">
                                    <a href="{{ route('jobIndex') }}" class="sidebar-link">
                                        <i class="pe-2"></i>
                                        <i class="fa-solid fa-briefcase pe-2"></i>Job List
                                    </a>
                                </li>
                                <li class="sidebar-item @if (url()->current() === route('createJobPost')) active @endif ">
                                    <a href="{{ route('createJobPost') }}" class="sidebar-link">
                                        <i class="pe-2"></i>
                                        <i class="fa-solid fa-plus pe-2"></i>Create Job Post
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" data-bs-target="#blog" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa-solid fa-blog pe-2"></i></i>Blog
                            </a>
                            <ul id="blog" class="sidebar-dropdown ps-2 list-unstyled collapse"
                                data-bs-parent="#sidebar">
                                <li class="sidebar-item @if (url()->current() === route('company.bloglist')) active @endif ">
                                    <a href="{{ route('company.bloglist') }}" class="sidebar-link">
                                        <i class="pe-2"></i>
                                        <i class="fa-solid fa-list-check pe-2"></i>Bolg Page Manage
                                    </a>
                                </li>
                                <li class="sidebar-item @if (url()->current() === route('company.blogCreate')) active @endif ">
                                    <a href="{{ route('company.blogCreate') }}" class="sidebar-link">
                                        <i class="pe-2"></i>
                                        <i class="fa-solid fa-plus pe-2"></i>Create Job Post
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item @if (url()->current() === route('company.plugings')) active @endif ">
                            <a href="{{ route('company.plugings') }}" class="sidebar-link">
                                <i class="fa-solid fa-hurricane pe-2"></i>
                                Plugings
                            </a>
                        </li>

                        <li class="sidebar-item @if (url()->current() === route('sittings.index')) active @endif ">
                            <a href="{{ route('sittings.index') }}" class="sidebar-link">
                                <i class="fa-solid fa-screwdriver-wrench pe-2"></i>
                                Sittings
                            </a>
                        </li>
                    @elseif (auth()->user()->type === 1)
                        <li class="sidebar-header">
                            <h5>Admin Elements</h5>
                            <hr>
                        </li>
                        <li class="sidebar-item mt-1 @if (url()->current() === route('home')) active @endif ">
                            <a href="{{ route('home') }}" class="sidebar-link">
                                <i class="fa-solid fa-reply-all pe-2"></i>
                                Go To Front Page
                            </a>
                        </li>
                        <li class="sidebar-item @if (url()->current() === route('admin.dashboard')) active @endif ">
                            <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                                <i class="fa-solid fa-chart-line ps-2 pe-2"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="sidebar-item ms-2">
                            <a href="#" class="sidebar-link" data-bs-target="#job" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa-solid fa-bars-staggered pe-2"></i>Job
                            </a>
                            <ul id="job" class="sidebar-dropdown list-unstyled collapse"
                                data-bs-parent="#sidebar">
                                <li class="sidebar-item ps-2 @if (url()->current() === route('admin.jobIndex')) active @endif ">
                                    <a href="{{ route('admin.jobIndex') }}" class="sidebar-link">
                                        <i class="pe-2"></i>
                                        <i class="fa-solid fa-briefcase pe-2"></i>Job List
                                    </a>
                                </li>
                                <li class="sidebar-item ps-2 @if (url()->current() === route('admin.createJobPost')) active @endif ">
                                    <a href="{{ route('admin.createJobPost') }}" class="sidebar-link">
                                        <i class="pe-2"></i>
                                        <i class="fa-solid fa-plus pe-2"></i>Create Job Post
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <i class="fa-solid fa-spa"></i> --}}
                        <li class="sidebar-item ms-2">
                            <a href="#" class="sidebar-link" data-bs-target="#blog" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa-solid fa-blog pe-2"></i></i>Blog
                            </a>
                            <ul id="blog" class="sidebar-dropdown list-unstyled collapse"
                                data-bs-parent="#sidebar">
                                <li class="sidebar-item ps-2 @if (url()->current() === route('admin.bloglist')) active @endif ">
                                    <a href="{{ route('admin.bloglist') }}" class="sidebar-link">
                                        <i class="pe-2"></i>
                                        <i class="fa-solid fa-list-check pe-2"></i>Bolg Page Manage
                                    </a>
                                </li>
                                <li class="sidebar-item ps-2 @if (url()->current() === route('admin.blogCreate')) active @endif ">
                                    <a href="{{ route('admin.blogCreate') }}" class="sidebar-link">
                                        <i class="pe-2"></i>
                                        <i class="fa-solid fa-plus pe-2"></i>Create Job Post
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item ms-2">
                            <a href="#" class="sidebar-link" data-bs-target="#pluging"
                                data-bs-toggle="collapse" aria-expanded="false">
                                <i class="fa-solid fa-hurricane pe-2"></i>Pluging
                            </a>
                            <ul id="pluging" class="sidebar-dropdown list-unstyled collapse"
                                data-bs-parent="#sidebar">
                                <li class="sidebar-item ps-2 @if (url()->current() === route('admin.plugingIndex')) active @endif ">
                                    <a href="{{ route('admin.plugingIndex') }}" class="sidebar-link">
                                        <i class="fa-brands fa-squarespace"></i>
                                        Plugings
                                    </a>
                                </li>
                                <li class="sidebar-item ps-2 @if (url()->current() === route('admin.pluginsUser')) active @endif ">
                                    <a href="{{ route('admin.pluginsUser') }}" class="sidebar-link">
                                        <i class="fa-solid fa-users-viewfinder pe-2"></i>
                                        Plugings User
                                    </a>
                                </li>
                                <li class="sidebar-item ps-2 @if (url()->current() === route('admin.createPlugings')) active @endif ">
                                    <a href="{{ route('admin.createPlugings') }}" class="sidebar-link">
                                        <i class="fa-solid fa-plus pe-2"></i>Create Plugings
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item ms-2">
                            <a href="#" class="sidebar-link" data-bs-target="#user" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <i class="fa-solid fa-user-pen pe-2"></i>User Management
                            </a>
                            <ul id="user" class="sidebar-dropdown list-unstyled collapse"
                                data-bs-parent="#sidebar">
                                <li class="sidebar-item ps-2 @if (url()->current() === route('admin.allCompany')) active @endif ">
                                    <a href="{{ route('admin.allCompany') }}" class="sidebar-link">
                                        <i class="fa-solid fa-user-secret pe-2"></i>
                                        All company
                                    </a>
                                </li>
                                <li class="sidebar-item ps-2 @if (url()->current() === route('admin.allCandidate')) active @endif ">
                                    <a href="{{ route('admin.allCandidate') }}" class="sidebar-link">
                                        <i class="fa-regular fa-circle-user pe-2"></i>
                                        All Candidate
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item @if (url()->current() === route('admin.contactPage')) active @endif ">
                            <a href="{{ route('admin.contactPage') }}" class="sidebar-link">
                                <i class="fa-solid fa-phone-volume ps-2 pe-2"></i>
                                Contact Manage
                            </a>
                        </li>

                        <li class="sidebar-item @if (url()->current() === route('admin.createAddPage')) active @endif ">
                            <a href="{{ route('admin.createAddPage') }}" class="sidebar-link">
                                <i class="fa-solid ps-2 pe-2 fa-magnifying-glass-chart"></i>
                                Adds Section
                            </a>
                        </li>

                        <li class="sidebar-item @if (url()->current() === route('sittings.index')) active @endif ">
                            <a href="{{ route('sittings.index') }}" class="sidebar-link">
                                <i class="fa-solid fa-screwdriver-wrench ps-2 pe-2"></i>
                                Sittings
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">

                    <ul class="navbar-nav">
                        @if (auth()->user()->type === 1)
                            <div class="text-end"><a href="{{ route('admin.contactPage') }}"><i
                                        class="fs-4 me-4 mt-2 fa-solid fa-comments"></i></a></div>
                        @endif
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="{{ asset('uploads/defult/profile.jpg') }}" class="avatar img-fluid rounded"
                                    alt="Profile.jpg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <h4 class="dropdown-item">{{ auth()->user()->name }}</h4>
                                @if (auth()->user()->type === 1)
                                    <a href="{{ route('admin.profile') }}" class="dropdown-item">Profile</a>

                                    @elseif(auth()->user()->type === 3)
                                        <a href="{{ route('candidate.profile') }}" class="dropdown-item">Profile</a>
                                    @else
                                        <a href="{{ route('company.profileUpdate') }}"
                                            class="dropdown-item">Profile</a>
                                    @endif
                                    <a href="#" class="dropdown-item">Setting</a>

                                    @if (auth()->user()->type === 3)
                                        <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                                    @elseif (auth()->user()->type === 2)
                                        <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                                    @else
                                        <a href="{{ route('admin.logout') }}" class="dropdown-item">Logout</a>
                                    @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('contant')

            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>JobPuls</strong>
                                </a>
                            </p>

                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Terms</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Booking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @yield('cusom_js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
