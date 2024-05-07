<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Create Job Post</h4>
        </div>
        <div class="card border-0">

            <div class="p-4">
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


                <form action="{{ route('admin.aboutCreate') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="my-3">
                        <label class="form-label mb-2 fs-2">Description</label>
                        <textarea name="description" id="description">{{ old('description', isset($about) ? $about->description : '') }}</textarea>
                        @error('description')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <h1>{{ $top_comp->top_com }}</h1> --}}

                    <label class="form-label mb-2 fs-2">Select whoes companies believe in us</label>
                    <div class="d-flex overflow-x-auto">
                        @foreach ($companies as $user)
                            <div class="card mx-1" style="width: 10rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="card-text">{!! optional($user->companyProfile)->short_des !!}</p>
                                    <div class="form-check">
                                        <input class="form-check-input" name="top_comp[]" type="checkbox"
                                            value="{{ $user->companyProfile->id }}" id="{{ $user->companyProfile->id }}"
                                            @if ($top_comp->contains('top_com', $user->companyProfile->id)) checked @endif>

                                        <label class="form-check-label" for="{{ $user->companyProfile->id }}">
                                            Add
                                        </label>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


        </div>
    </div>
</main>

<script>
    $(document).ready(function() {
        $('#description').summernote({
            placeholder: 'Description',
            tabsize: 4,
            height: 500,
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
