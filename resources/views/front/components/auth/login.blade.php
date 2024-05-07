<section class="section-5 bg-secondary">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 my-5">
                <div class="card shadow border-0 p-5">
                    <h1 class="h3">Login</h1>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="post">
                        @csrf <!-- Add CSRF token -->

                        <div class="mb-3">
                            <label for="email" class="mb-2">Email*</label>
                            <input type="text" name="email" value="{{ old('email') }}" id="email" class="form-control"
                                placeholder="example@example.com">
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="mb-2">Password*</label>
                            <input type="password"  value="{{ old('password') }}" name="password" id="password" class="form-control"
                                placeholder="Enter Password">
                            @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                        <div class="justify-content-between d-flex">
                            <button type="submit" class="btn btn-primary mt-2">Login</button>
                            <a href="forgot-password.html" class="mt-3">Forgot Password?</a>
                        </div>
                    </form>
                    <div class="mt-3 text-center">
                        <p>Do not have an account? <a href="{{ route('registation') }}">Register</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
