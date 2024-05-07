@extends('layouts.app')
@section('contant')
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
                    <h4>Candidate</h4>
                @elseif (auth()->user()->type === 2)
                    <h4>Company</h4>
                @else
                    <div class="d-flex">
                        <h4>Admin</h4>
                    </div>
                @endif
            </div>

            <div class="row">
                @foreach ($pluging as $pluging)
                    <div class="col-12 col-md-4 d-flex">
                        <div class="card flex-fill border-0 illustration">
                            <div class="card-body p-0 d-flex flex-fill">
                                <div class="row g-0 w-100">
                                    <div class="">
                                        <div class="p-3 m-1">
                                            <h4>{{ $pluging->name }}</h4>
                                            <p class="mb-0">{!! $pluging->des !!}</p>
                                            @php
                                                $user_request = $user_pluging->where('plugings_id', $pluging->id)->first();
                                                $isRequested = $user_request !== null;
                                                $isAccepted = $isRequested && $user_request->status === 1;
                                                $isDisabled = $isRequested && $user_request->status === 1 ? true : $pluging->status === 0;
                                            @endphp
                                            <div class="text-end">
                                                @if ($isRequested)
                                                    @if ($isAccepted)
                                                        <button type="button" class="btn btn-success btn-sm" disabled>
                                                            Accepted
                                                        </button>
                                                    @else
                                                        <a type="button" class="btn btn-primary btn-sm" disabled>
                                                            Requested
                                                        </a>
                                                    @endif
                                                @elseif ($isDisabled)
                                                    <button type="button" class="btn btn-secondary btn-sm" disabled>
                                                        Disabled
                                                    </button>
                                                @else
                                                    <a href="{{ url()->current() . '/request/' . $pluging->id }}"
                                                        type="button" class="btn btn-primary btn-sm"
                                                        data-plugin-id="{{ $pluging->id }}">
                                                        Request
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach





            </div>





        </div>
    </main>
@endsection
