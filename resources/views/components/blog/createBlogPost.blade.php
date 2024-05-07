<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Create Job Post</h4>
        </div>
        <div class="card border-0">

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

            <div class="p-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                <form action="{{ url()->current() }}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label fs-5">Blog Heading</label>
                        <input type="text" name="title" class="form-control" id="title">
                        @error('title')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="my-3">
                        <label class="form-label mb-2 fs-5">Blog Description</label>
                        <textarea name="description" id="description"></textarea>
                        @error('description')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
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
            height: 400,
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
