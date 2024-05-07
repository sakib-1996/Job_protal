@extends('layouts.app')
@section('contant')
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
                            Candidate for job post
                        </h5>

                    </div>
                    <div>

                    </div>
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Candidate Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Published Date</th>
                                    <th scope="col" style="width: 25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($candidates))
                                    @foreach ($candidates as $candidate)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>{{ $candidate->user->name }}</td>
                                            <td>{{ $candidate->user->email }}</td>
                                            <td>{{ optional($candidate->created_at)->format('d-m-Y') }}</td>
                                            <td>
                                                @if (auth()->user()->id == $candidate->job->user_id)
                                                    <a data-id="{{ $candidate->id }}" class="editBtn"><i
                                                            class="fs-4 mx-3 fa-solid fa-eye"></i></a>
                                                    @if ($candidate->status === 0)
                                                        <a class=""
                                                            href="{{ url()->current() }}/accept?acceptID={{ $candidate->id }}"
                                                            role="button">
                                                            <i class="fs-4 mx-3 fa-solid fa-check"></i>
                                                        </a>
                                                    @else
                                                        <p class="mb-0 btn btn-info rounded-pill btn-sm mx-1">
                                                            <span class="">Selected</span>
                                                        </p>
                                                    @endif
                                                    <a class="text-danger"
                                                        href="{{ url()->current() }}/delete-application?applicationId={{ $candidate->id }}"
                                                        role="button"><i class="fs-4 mx-3 fa-solid fa-trash-can"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p>No admin blogs found.</p>
                                @endif



                            </tbody>

                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $candidates->links('vendor.pagination.bootstrap-5') }}
                    </div>


                </div>
            </div>
        </div>
    </main>

    <!-- Modal structure -->
    <div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Resume Letter</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="d-flex align-items-end">
                                <div class="mt-5 ms-3">
                                    <h4 id="comName"></h4>
                                    <p id="comlocation">Company Location</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <img class="me-3 img-fluid" style="width: 100px" id="profile" src=""
                                alt="Not provided">
                        </div>
                        <hr>
                        <hr>
                    </div>
                    <div class="p-3">
                        <h4>Personal Data</h4>
                        <div id="output"></div>
                        <hr>
                        <hr>
                        <div id="output_2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const currentRoute = window.location.pathname;

        var editButtons = document.querySelectorAll('.editBtn');

        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var id = this.getAttribute('data-id');
                FillUpUpdateForm(id).then(function(data) {
                    // Check if 'image' property exists in the data before calling ShowUpdateModal
                    var imageUrl = data.data && data.data['image'] ? data.data['image'] : null;
                    ShowUpdateModal(imageUrl);
                });
            });
        });


        async function FillUpUpdateForm(id) {
            const url = currentRoute.startsWith('/admin/jobPosted/candidateForPost/') ?
                '/admin/jobPosted/view/' + id :
                '/company/jobPosted/view/' + id;

            try {
                const response = await fetch(url);

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                const data = await response.json();

                document.getElementById('comName').innerText = data.compName ? data.compName['comp_name'] : 'N/A';
                document.getElementById('comlocation').innerText = data.compName ? data.compName['location'] : 'N/A';

                var outputDiv = document.getElementById('output');
                var output_2 = document.getElementById('output_2');

                appendIfNotNull(outputDiv, 'Name', data.data ? data.data['name'] : 'N/A');
                appendIfNotNull(outputDiv, 'Location', data.data ? data.data['location'] : 'N/A');
                appendIfNotNull(outputDiv, 'Image', data.data ? data.data['image'] : 'N/A', 'desiredID');

                appendIfNotNull_2(output_2, 'Educational Information', data.jobAply ? data.jobAply['edu_information'] :
                    'N/A');

                return data;
            } catch (error) {
                console.error(error);
            }
        }




        function appendIfNotNull(output, label, value, idToAppendImage) {
            if (value !== null && value !== undefined) {
                if (label === 'Image' && idToAppendImage === 'desiredID') {
                    return;
                } else {
                    output.innerHTML +=
                        `<div class="row mt-3"><div class="col-4">${label}</div><div class="col">: ${value}</div></div>`;
                }
            }
        }


        function appendIfNotNull_2(output, label, value) {
            if (value !== null && value !== undefined) {
                output_2.innerHTML += `<div class="mt-3"><h4>${label}</h4><div>${value}</div></div>`;
            }
        }

        function ShowUpdateModal(imageSrc) {
            var updateModal = document.getElementById('update-modal');
            var modal = new bootstrap.Modal(updateModal);

            var profileImage = document.getElementById('profile');
            profileImage.src = imageSrc;

            modal.show();
        }
    </script>


@endsection
