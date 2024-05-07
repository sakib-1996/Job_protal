@extends('layouts.app')
@section('contant')
    <main class="content px-3 py-2">
        <div class="container-fluid">

            <!-- Table Element -->
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="card-title">
                        All Candidate
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 5%" scope="col">#</th>
                                    <th style="width: 20%" scope="col">Candidate Name</th>
                                    <th style="width: 30%" scope="col">Candidate Email</th>
                                    <th style="" scope="col">Status</th>
                                    <th style="width: 20%" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($candidate as $candidate)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $candidate->name }}</td>
                                        <td>{{ $candidate->email }}</td>
                                        <td>
                                            @if ($candidate->status === 1)
                                                <p class="mb-0 btn btn-info rounded-pill btn-sm mx-1">
                                                    <span class="">Active</span>
                                                </p>
                                            @else
                                                <p class="mb-0 btn btn-warning rounded-pill btn-sm mx-1">
                                                    <span class="">Disabled</span>
                                                </p>
                                            @endif
                                        </td>

                                        <td class="d-flex">
                                            <form class="mx-3" id="myForm-{{ $candidate->id }}"
                                                action="{{ url()->current() }}/status/{{ $candidate->id }}" method="get">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        onclick="updateStatus({{ $candidate->id }})" role="switch"
                                                        id="status-{{ $candidate->id }}"
                                                        data-plugin-id="{{ $candidate->id }}"
                                                        {{ $candidate->status == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="status-{{ $candidate->id }}"></label>
                                                </div>
                                            </form>

                                            <a class="text-danger"
                                                href="{{ route('admin.candidate.delete', ['id' => $candidate->id]) }}"
                                                role="button"><i class="fs-4 mx-3 fa-solid fa-trash-can"></i></a>

                                            <a href="{{ route('admin.candidate.jobApply', ['id' => $candidate->id]) }}"
                                                role="button"><i class="fs-4 mx-3 fa-solid fa-right-to-bracket"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script>
        function updateStatus(id) {
            document.getElementById('myForm-' + id).submit();
        }
    </script>
@endsection
