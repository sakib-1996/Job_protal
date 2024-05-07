@extends('layouts.app')
@section('custom_css')
    {{-- ===== summernote ===== --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
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
            @if (session('status') && session('msg'))
                <div class="">
                    <div class="alert alert-{{ session('status') }}" role="alert">
                        {{ session('msg') }}
                    </div>
                </div>
            @endif



            <div class="card border-0">
                <div class="p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="d-flex align-items-end">
                                <div class="mt-5 ms-3">
                                    <h4>{{ $job->user->name }}</h4>
                                    <p>{{ $job->location }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <img class="me-3 img-fluid" src="{{ $profile->image ?? 'Not provided'}}" alt="Not provided">
                        </div>
                        <hr>
                        <hr>
                    </div>
                    <div class="p-3">
                        <h4>Personal Data</h4>

                        <div class="row mt-3">
                            <div class="col-4">Name</div>
                            <div class="col">: {{ $profile->name ?? 'Not provided' }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">Date Of Birth</div>
                            <div class="col">: {{ $profile->date_of_birth ?? 'Not provided' }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">Location</div>
                            <div class="col">: {{ $profile->location ?? 'Not provided' }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">Blood Group</div>
                            <div class="col">: {{ $profile->blood_group ?? 'Not provided' }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">NID</div>
                            <div class="col">: {{ $profile->nid ?? 'Not provided' }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">Passport Number</div>
                            <div class="col">: {{ $profile->passport_no ?? 'Not provided' }}</div>
                        </div>

                    </div>

                    <hr>
                    <hr>
                    <form action="{{ url()->current() }}" class="mt-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <div class="mb-3">
                                <label for="current_salary" class="form-label  fs-5">Expected Salary</label>
                                <input type="text" name="current_salary" value="{{ old('expected_salary') }}"
                                    class="form-control" id="current_salary">
                                @error('current_salary')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="my-3">
                                <label class="form-label mb-2  fs-5">Education Information</label>
                                <textarea name="edu_information" id="edu_information">{{ old('edu_information') }}</textarea>
                            </div>

                            <div class="my-3">
                                <label class="form-label mb-2  fs-5">Job Experiences (if any)</label>
                                <textarea name="job_exp" id="job_exp">{{ old('job_exp') }}</textarea>

                            </div>

                            <div class="my-3">
                                <label class="form-label mb-2  fs-5">Extra Information</label>
                                <textarea name="extra_information" id="extra_information">{{ old('extra_information') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="credentials" class="form-label">Credentials</label>
                                <input type="file" name="credentials" value="{{ old('credentials') }}"
                                    class="form-control" id="credentials">
                            </div>


                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="col-5">

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            $('#edu_information').summernote({
                placeholder: 'Educational Information',
                tabsize: 2,
                height: 150,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['help']]
                ]
            });
            $('#job_exp').summernote({
                placeholder: 'Job Experiences (if any)',
                tabsize: 2,
                height: 150,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['help']]
                ]
            });
            $('#extra_information').summernote({
                placeholder: 'Extra Information',
                tabsize: 2,
                height: 150,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['help']]
                ]
            });
        });
    </script>
@endsection
