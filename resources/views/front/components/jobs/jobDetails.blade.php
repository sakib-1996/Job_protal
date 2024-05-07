<div class="container p-2 my-2">


    <main class="content">
        <div class="container-fluid">
            <div class="mb-3">
                <h4>Job Details</h4>
            </div>
            <div class="card p-4 border-2">
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
                <div class="d-flex justify-content-between">
                    <p>Published Date: {{ $job->created_at }}</p>
                    <div>
                        @if (!isset($jobAply))
                            <a href="{{ route('applyPage', ['id' => $job->id]) }}" class="mb-0 btn btn-success">Apply
                                for this</a>
                        @elseif ($jobAply->where('job_id', $job->id)->count() == 0)
                            <a href="{{ route('applyPage', ['id' => $job->id]) }}" class="mb-0 btn btn-success">Apply
                                for this</a>
                        @else
                            <a class="mb-0 btn btn-secondary disabled">Apply for this</a>
                        @endif



                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ $job->logo }}" alt="Logo" class="me-2" style="width: 70px">
                    <div>
                        <h2 class="mb-0">{{ $job->comp_name }}</h2>
                        <p>{{ $job->location }}</p>
                    </div>

                </div>
                <hr>

                <div class="row">
                    <div class="col-md-8 ps-md-4">
                        <h2>{{ $job->short_des }}</h2>
                        <p>{{ $job->category->name }} /{{ $job->type->job_type }}</p>
                        <p>DateLine : {{ $job->dateline }}</p>
                        <h6 class="my-4">Job Title : {{ $job->title }}</h6>
                        <p>Type : {{ $job->type->job_type }}</p>
                        <p>Category : {{ $job->category->name }}</p>
                        <p>Salary Range : {{ $job->salary }}</p>
                        <p>Location : {{ $job->location }}</p>
                        <p>Experience : {{ $job->experience->experience }}</p>


                        <h6 class="mt-4"><b>Job Details</b></h6>
                        <p>{!! $job->job_details !!}</p>

                        <h6 class="mt-3"><b>Job Requirement</b></h6>
                        <p>{!! $job->requirment !!}</p>
                    </div>

                    <div class="col-md-4 mt-4 mt-md-0">
                        <!-- Additional content for the right column -->

                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
