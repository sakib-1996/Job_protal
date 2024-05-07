@extends('layouts.app')
@section('contant')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h4>Jobs</h4>
            </div>
            {{-- Use the $postedJobs variable in your view --}}
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

            <!-- Table Element -->
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="card-title">
                        Job Post List
                    </h5>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Jobs Title</th>
                                    <th scope="col">Apply Date</th>
                                    <th scope="col">Dateline</th>
                                    <th scope="col" style="width: 15%">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($appliedJobLists as $appliedJobList)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $appliedJobList->user->name }}</td>
                                        <td>{{ $appliedJobList->job->title }}</td>
                                        <td>{{ $appliedJobList->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $appliedJobList->job->dateline->format('d-m-Y') }}</td>
                                        <td>
                                            @if ($appliedJobList->status === 1)
                                                <span class="mb-0 btn btn-info rounded-pill btn-sm mx-1">
                                                    <span class="fw-bolder"></span>
                                                    <span class="ps-1">Acceped</span>
                                                </span>
                                            @else
                                                <span class="mb-0 btn btn-warning rounded-pill btn-sm mx-1">
                                                    <span class="fw-bolder"></span>
                                                    <span class="ps-1">Panding</span>
                                                </span>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $appliedJobLists->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
