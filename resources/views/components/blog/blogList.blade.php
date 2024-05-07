<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Jobs</h4>
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
                        Your Blog List
                    </h5>

                </div>
                <div>
                    <a class="btn btn-primary" href="{{ url()->current() }}/create" role="button">Creage Blog
                        Post</a>
                </div>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jobs Title</th>
                                <th scope="col">Published Date</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width: 25%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (!empty($admin_blogs))
                                <ul>
                                    @foreach ($admin_blogs as $blog)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>{{ substr($blog->title, 0, 20) }}......</td>
                                            <td>{{ $blog->created_at->format('d-m-Y') }}</td>
                                            <th scope="col">
                                                @if ($blog->status == 1)
                                                    <p class="btn btn-info rounded-pill btn-sm mx-1">
                                                        <span class="">Active</span>
                                                    </p>
                                                @else
                                                    <p class="btn btn-warning rounded-pill btn-sm mx-1">
                                                        <span class="">Disabled</span>
                                                    </p>
                                                @endif
                                            </th>
                                            <td class="d-flex">
                                                <form class="" id="myForm-{{ $blog->id }}"
                                                    action="{{ url()->current() }}/status/{{ $blog->id }}"
                                                    method="get">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            onclick="updateStatus({{ $blog->id }})" role="switch"
                                                            id="status-{{ $blog->id }}"
                                                            data-plugin-id="{{ $blog->id }}"
                                                            {{ $blog->status == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="status-{{ $blog->id }}"></label>
                                                    </div>
                                                </form>


                                                <a class=""
                                                    href="{{ url()->current() }}/edit/{{ $blog->id }}"
                                                    role="button"><i
                                                        class="fs-5 mx-3 fa-solid fa-pen-to-square"></i></a>

                                                <a class="text-danger"
                                                    href="{{ url()->current() }}/delete/{{ $blog->id }}"
                                                    role="button"><i class="fs-5 mx-3 fa-solid fa-trash-can"></i></a>
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
                    {{ $admin_blogs->links('vendor.pagination.bootstrap-5') }}
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
