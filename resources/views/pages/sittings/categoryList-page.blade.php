@extends('layouts.app')
@section('contant')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3 row">
                <h4 class="col-md-6">Jobs</h4>
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
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h5 class="card-title">
                            Category List
                        </h5>

                    </div>
                    <div>
                        <a class="btn btn-primary" role="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add</a>
                    </div>
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">CategorY Name</th>
                                    <th scope="col">Published Date</th>
                                    <th scope="col" style="width: 25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (!empty($categories))
                                    <ul>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <th scope="row">{{ $loop->index + 1 }}</th>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ optional($category->created_at)->format('d-m-Y') }}</td>
                                                <td class="d-flex">
                                                    <form method="POST"
                                                        action="{{ url()->current() }}/delete/{{ $category->id }}"
                                                        onsubmit="return confirm('Are you sure you want to delete this type?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-link text-danger">
                                                            <i class="fs-4 fa-solid fa-trash-can"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No admin blogs found.</p>
                                @endif



                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $categories->links('vendor.pagination.bootstrap-5') }}
                    </div>

                </div>
            </div>
        </div>
    </main>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Category Create</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url()->current() . '/create' }}" onsubmit="return validateForm()" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" name="categoryName" class="form-control" id="categoryName"
                                name="categoryName">
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
            var categoryName = document.getElementById('categoryName').value;

            if (!categoryName) {
                alert('Category Name cannot be empty.');
                return false;
            }
            return true;
        }
    </script>


@endsection
