@extends('layouts.app')
@section('contant')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 row">
                <h4 class="col-md-6">add</h4>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item">
                            <a href="{{ route('sittings.index') }}">Sittings</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url()->current() }}">This Page</a>
                        </li>
                    </ol>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button add="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button add="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Table Element -->
            <div class="card border-0">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h5 class="card-title">
                            Add List
                        </h5>

                    </div>
                    <div>
                        <a class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#add">Create
                            adds</a>
                    </div>
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Adds img/gif</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Published Date</th>
                                    <th scope="col" style="width: 25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($adds))
                                    @foreach ($adds as $add)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td style="vertical-align: baseline;">
                                                <img src="{{ $add->img_url }}" style="width: 100px" alt="">
                                            </td>
                                            <td style="vertical-align: baseline;">
                                                {{ parse_url($add->site_url, PHP_URL_HOST) }}
                                            </td>
                                            <td style="vertical-align: baseline;">
                                                {{ optional($add->created_at)->format('d-m-Y') }}</td>
                                            <td class="d-flex align-items-center" style="vertical-align: baseline;">
                                                <form class="" id="myForm-{{ $add->id }}"
                                                    action="{{ url()->current() }}/status/{{ $add->id }}"
                                                    method="get">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            onclick="updateStatus({{ $add->id }})" role="switch"
                                                            id="status-{{ $add->id }}"
                                                            data-plugin-id="{{ $add->id }}"
                                                            {{ $add->status == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="status-{{ $add->id }}"></label>
                                                    </div>
                                                </form>

                                                <form method="get"
                                                    action="{{ route('adds.delete', ['id' => $add->id]) }}"
                                                    onsubmit="return confirm('Are you sure you want to delete this add?')">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link text-danger" role="link">
                                                        <i class="fa-solid fs-4 mx-3 fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">
                                            <p>No Adds found.</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>


                        </table>
                    </div>
                    <div class="mt-4">
                        {{-- {{ $adds->links('vendor.pagination.bootstrap-5') }} --}}
                    </div>

                </div>
            </div>
        </div>
    </main>



    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Create</h1>
                    <button add="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url()->current() . '/create' }}" onsubmit="return validateForm()" method="POST"
                        enctype="multipart/form-data">
                        @csrf


                        <div>
                            <figure class="image-container">
                                <img style="width: 200px" id="uploaded-image-1">
                                <figcaption id="file-name-1"></figcaption>
                            </figure>
                            <input type="file" id="upload-button-1" name="img" accept="image/*">
                            <label class="label" for="upload-button-1">
                                <i class="fas fa-upload"></i> &nbsp; Image/Gif
                            </label>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="img" class="form-label">Image/Gif</label>
                            <input type="file" class="form-control" id="img" name="img">
                        </div> --}}

                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var job_add = document.getElementById('job_add').value;

            if (!add) {
                alert('Cxperience cannot be empty.');
                return false;
            }
            return true;
        }

        function updateStatus(id) {
            document.getElementById('myForm-' + id).submit();
        }

        document.getElementById('upload-button-1').addEventListener('change', function() {
            // Get the file input
            const fileInput = this;

            const imageContainer = fileInput.parentElement.querySelector('.image-container');
            const fileNameElement = imageContainer.querySelector('figcaption');
            const imageElement = imageContainer.querySelector('img');

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imageElement.src = e.target.result;
                    fileNameElement.textContent = fileInput.files[0].name;
                };
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                imageElement.src = '';
                fileNameElement.textContent = '';
            }
        });
    </script>



@endsection
