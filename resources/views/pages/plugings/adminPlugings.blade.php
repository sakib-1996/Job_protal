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
                    <div class="d-flex justify-content-between">
                        <h4>Admin</h4>
                        <div>
                            <a class="btn btn-primary" href="{{ route('admin.createPlugings') }}" role="button">Create
                                Plugings</a>
                        </div>
                    </div>
                @endif
            </div>


            <div class="row">
                @foreach ($plugings as $pluging)
                    <div class="col-12 col-md-4 d-flex">
                        <div class="card flex-fill border-0 illustration">
                            <div class="card-body p-0 d-flex flex-fill">
                                <div class="row g-0 w-100">
                                    <div class="p-3 m-1">
                                        <div class="">
                                            <h4>{{ $pluging->name }}</h4>
                                            <p class="mb-0">{!! $pluging->des !!}</p>
                                        </div>
                                        <form class="" id="myForm-{{ $pluging->id }}"
                                            action="{{ url()->current() }}/status/{{ $pluging->id }}" method="get">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    onclick="updateStatus({{ $pluging->id }})"
                                                    role="switch" id="status-{{ $pluging->id }}"
                                                    data-plugin-id="{{ $pluging->id }}"
                                                    {{ $pluging->status == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="status-{{ $pluging->id }}"></label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            

        </div>
    </main>

    <script>
        function updateStatus(id) {
        document.getElementById('myForm-' + id).submit();
    }
    </script>
    
@endsection
