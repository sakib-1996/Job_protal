@extends('layouts.app')
@section('contant')
    a<main class="content px-3 py-2">
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
                    <h6 class="card-subtitle text-muted">
                        <p class="">All job-post that you are posted here</p>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Jobs Title</th>
                                    <th scope="col">Published Date</th>
                                    <th scope="col">Dateline</th>
                                    <th scope="col" style="width: 25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($requests as $request)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $request->user->name }}</td>
                                        <td>{{ $request->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $request->pluging->name }}</td>
                                        <td>
                                            <a class="btn btn-outline-danger"
                                                href="{{ url()->current() }}/accept/{{ $request->id }}"
                                                role="button">Delete</a>
                                            <a class="btn btn-outline-danger"
                                                href="{{ url()->current() }}/delete/{{ $request->id }}"
                                                role="button">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{-- {{ $postedJobs->links('vendor.pagination.bootstrap-5') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
