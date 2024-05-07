<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Manage Contact Page</h4>
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
                <label class="form-label fs-5">Who want to contact with us</label>
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Date</th>
                                <th scope="col" style="width: 25%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($availableContactMessage as $message)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ substr($message->subject, 0, 20) }}</td>
                                    <td>{{ $message->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <button data-id="{{ $message->id }}"
                                            class="btn viewbtn btn-sm btn-outline-success">View</button>
                                        <a class="btn deleteBtn btn-sm btn-outline-danger"
                                            href="{{ route('messageDelete', ['id' => $message->id]) }}"
                                            role="button">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card border-0 mt-5">
            <div class="p-4">
                <label class="form-label fs-5">Contact Information</label>
                <hr>
                <form action="{{ route('admin.contactPage') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="my-3">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email"
                                aria-describedby="emailHelp"
                                value="{{ old('email', isset($availableContact) ? $availableContact->email : '') }}">
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address"
                                value="{{ old('address', isset($availableContact) ? $availableContact->address : '') }}">
                            @error('address')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    {{-- <h1>{{ $top_comp->top_com }}</h1> --}}
                </form>
            </div>

        </div>

    </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"></script>
<script>
    document.querySelectorAll('.viewbtn').forEach(function(element) {
        element.addEventListener('click', async function() {
            let id = this.getAttribute('data-id');
            // console.log(id);
            await FillUpviewForm(id);
            document.getElementById('view-modal').style.display = 'block';
        });
    });

    document.querySelectorAll('.deleteBtn').forEach(function(element) {
        element.addEventListener('click', function() {
            let id = this.getAttribute('data-id');
            document.getElementById('delete-modal').style.display = 'block';
            document.getElementById('deleteID').value = id;
        });
    });
</script>
