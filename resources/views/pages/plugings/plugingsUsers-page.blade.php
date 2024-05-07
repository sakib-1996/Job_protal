@extends('layouts.app')
@section('contant')
    <main class="content px-3 py-2">
        <div class="container-fluid">

            <!-- Table Element -->
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="card-title">
                        Plugings User
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 5%" scope="col">#</th>
                                    <th style="width: 20%" scope="col">Company Name</th>
                                    <th style="width: 30%" scope="col">Plugings Name</th>
                                    <th style="" scope="col">Status</th>
                                    <th style="width: 23%" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pluginsUsers as $pluginsUser)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $pluginsUser->user->name }}</td>
                                        <td>{{ $pluginsUser->pluging->name }}</td>
                                        <td>
                                            <form id="myForm" action="">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        onclick="updateStatus({{ $pluginsUser->id }})" role="switch"
                                                        id="status" data-plugin-id="{{ $pluginsUser->id }}"
                                                        {{ $pluginsUser->status == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="status"></label>
                                                </div>
                                            </form>

                                        </td>
                                        <td>
                                            @if ($pluginsUser->status != 1)
                                                <a href="{{ route('admin.requestAccepts', ['id' => $pluginsUser->id]) }}"
                                                    role="button"><i class="mx-4 fa-solid fs-4 fa-check"></i></a>
                                            @else
                                                <p class="mb-0 btn btn-info rounded-pill btn-sm mx-1">
                                                    <span class="fw-bolder"><i
                                                            class="fa-solid fa-house-chimney-user"></i></span>
                                                    <span class="">Accepted</span>
                                                </p>
                                            @endif
                                            <a href="{{ route('admin.requestDelete', ['id' => $pluginsUser->id]) }}"
                                                role="button"> <i
                                                    class="mx-4 fs-4 text-danger fa-solid fa-trash-can"></i></a>
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
        function updateStatus(pluginId) {
            var form = document.getElementById('myForm');
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/admin/plugingRequest/update/' + pluginId, true);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    var response = JSON.parse(xhr.responseText);
                    console.log(response);
                } else {
                    console.error(xhr.statusText);
                }
            };

            xhr.onerror = function() {
                console.error('Network error');
            };

            xhr.send(formData);
        }
    </script>
@endsection
