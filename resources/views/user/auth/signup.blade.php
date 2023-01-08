<x-layout>
    <div class="d-flex align-items-center justify-content-center mt-5">
        <div class="bg-white border shadow col-sm-4 col-lg-8 mx-3 p-4">
            <div class="text-center my-4">
                <h2>Create Your Account</h2>
            </div>
            <form method="POST" action="/user" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" placeholder="John"
                        value="{{ old('first_name') }}">
                    @error('first_name')
                        <p class="text-danger fs-5 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Doe"
                        value="{{ old('last_name') }}">
                    @error('last_name')
                        <p class="text-danger fs-5 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="john@xyz.com">
                    @error('email')
                        <p class="text-danger fs-5 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="Password">
                    @error('password')
                        <p class="text-danger fs-5 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation">
                    @error('password_confirmation')
                        <p class="text-danger fs-5 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
