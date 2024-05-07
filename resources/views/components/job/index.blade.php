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
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jobs Title</th>
                                <th scope="col">Published Date</th>
                                <th scope="col">Dateline</th>
                                <th scope="col">Status</th>
                                <th style="width: 25%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($postedJobs as $job)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $job->title }}</td>
                                    <td>{{ $job->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $job->dateline->format('d-m-Y') }}</td>
                                    <td class="d-flex">
                                        @if (auth()->user()->id == $job->user_id)
                                            <form class="mx-3" id="myForm-{{ $job->id }}"
                                                action="{{ url()->current() }}/status/{{ $job->id }}"
                                                method="get">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        onclick="updateStatus({{ $job->id }})" role="switch"
                                                        id="status-{{ $job->id }}"
                                                        data-plugin-id="{{ $job->id }}"
                                                        {{ $job->status == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="status-{{ $job->id }}"></label>
                                                </div>
                                            </form>
                                        @endif
                                        @if ($job->status == 1)
                                            <p class="btn btn-info rounded-pill btn-sm mx-1">
                                                <span class="">Active</span>
                                            </p>
                                        @else
                                            <p class="btn btn-warning rounded-pill btn-sm mx-1">
                                                <span class="">Disabled</span>
                                            </p>
                                        @endif

                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url()->current() }}/{{ $job->id }}" role="button"
                                            class="d-inline-block">
                                            <i class="fs-4 mx-3 fa-solid fa-eye"></i>
                                        </a>

                                        @if (auth()->user()->id == $job->user_id)
                                            <a href="{{ url()->current() }}/edit/{{ $job->id }}" role="button"
                                                class="d-inline-block">
                                                <i class="fs-4 text-success mx-3 fa-solid fa-pen-to-square"></i>
                                            </a>
                                        @endif

                                        <a href="{{ url()->current() }}/delete/{{ $job->id }}" role="button"
                                            class="d-inline-block">
                                            <i class="fs-4 text-danger mx-3 fa-solid fa-trash-can"></i>
                                        </a>

                                        <a href="{{ url()->current() }}/candidateForPost/{{ $job->id }}"
                                            role="button" class="d-inline-block">
                                            <i class="fs-4 text-success mx-3 fa-solid fa-user"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $postedJobs->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateStatus(id) {
            document.getElementById('myForm-' + id).submit();
        }
    </script>
</main>
