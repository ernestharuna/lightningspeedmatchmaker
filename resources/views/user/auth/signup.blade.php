<x-app-layout>
    <div class="d-flex align-items-center justify-content-center mt-3">
        <div class="bg-white border rounded-3 shadow col-sm-4 col-lg-6 mx-3 p-4">
            <div class="text-center my-4">
                <h2 class="fw-bold">Create Account</h2>
            </div>
            <form method="POST" action="/register" class="row g-3">
                @csrf
                {{-- first name --}}
                <div class="col-md-6">
                    <label for="first_name" class="form-label fw-bold">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="John"
                        value="{{ old('first_name') }}">
                    @error('first_name')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- last name --}}
                <div class="col-md-6">
                    <label for="last_name" class="form-label fw-bold">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Doe"
                        value="{{ old('last_name') }}">
                    @error('last_name')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- email --}}
                <div class="col-6">
                    <label for="email" class="form-label fw-bold">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="john@xyz.com"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- phone number --}}
                <div class="col-6">
                    <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" placeholder="+441 4141 4141"
                        value="{{ old('phone_number') }}">
                    @error('phone_number')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- password --}}
                <div class="col-12">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @error('password')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- password cocfirmation --}}
                <div class="col-12">
                    <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                    @error('password_confirmation')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <input type="checkbox" name="terms" id="terms" onchange="checkTerms()"> I agree to the
                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="text-primary fw-bold">
                        Terms of Use
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-4 fw-bold" id="staticBackdropLabel">Terms of Use</h1>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <i><b>Last Revised:</b> August 1, 2019</i>
                                    </p>
                                    @include('user.partials.terms-of-use')
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary fw-bold" data-bs-dismiss="modal">
                                        I AGREE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 mt-4">
                    <button type="submit" id="submit-btn" class="btn btn-primary shadow fw-bold"
                        disabled>Register</button>
                </div>
                <div>
                    <p>
                        Already have an account? <a href="{{ route('login') }}">Log in</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

<script>
    const checkTerms = () => {
        var termsCheckbox = document.getElementsByName("terms")[0];
        var submitButton = document.getElementById("submit-btn");

        if (termsCheckbox.checked) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    }
</script>
