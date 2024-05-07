<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
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
            @if (auth()->user()->type === 3)
                <h4>Candidate Dashboard</h4>
            @elseif (auth()->user()->type === 2)
                <h4>Company Dashboard</h4>
            @else
                <h4>Admin Dashboard</h4>
            @endif
        </div>

        <div class="row">
            @if (auth()->user()->type === 3)
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">

                                        <h4>Your Apllied Job</h4>
                                        <h5 class="mb-0">Count {{ $countOfItems }}</h5>

                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">

                                    <h4>You are selected in </h4>
                                    <h5 class="mb-0"> {{ $countOfSelectedJob }} Jobs</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if (auth()->user()->type === 2)
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Job Posted</h4>
                                        <h5 class="mb-0">Count {{ $Job ?? '00' }}</h5>
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if (auth()->user()->type === 1)
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Total Company</h4>
                                        <h5 class="mb-0">Count : {{ $countCompanies ?? '00' }}</h5>
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Active Company</h4>
                                        <h5 class="mb-0">Count : {{ $countActiveCompanies ?? '00' }}</h5>
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Panding Company</h4>
                                        <h5 class="mb-0">Count : {{ $countPandingCompanies ?? '00' }}</h5>
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Total Candidate</h4>
                                        <h5 class="mb-0">Count : {{ $countCandidates ?? '00' }}</h5>
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</main>
