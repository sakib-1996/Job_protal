<section class="section-5 bg-secondary">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 rounded my-3 p-4 bg-white">
                <h4>Ragistation</h4>
                <form action="{{ route('registationProcess') }}" method="POST">
                    @csrf
                    <div class="mb-3 mt-2">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                            id="name">
                    </div>
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mb-3 mt-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                            id="email" aria-describedby="emailHelp">
                    </div>
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mb-3 mt-2">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input type="text" value="{{ old('mobile') }}" name="mobile" class="form-control"
                            id="mobile">
                    </div>
                    @error('mobile')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" value="{{ old('password') }}" name="password" class="form-control"
                            id="password">
                    </div>
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation">
                    </div>
                    <button type="submit" class="btn-primary">Submit</button>
                </form>


                <div class="mt-2 text-center">
                    <p>Have an account? <a href="login.html">Login</a></p>
                </div>
            </div>
        </div>
    </div>

</section>
