<x-layout>
    <div class="d-flex align-items-center justify-content-center mt-3">
        <div class="bg-white border rounded-3 shadow col-sm-4 col-lg-6 mx-3 p-4">
            <div class="text-center my-4">
                <h2>Fill out this form</h2>
                <p>Hey {{ auth()->user()->first_name }}, we need you to kindly fill out this form to help our Match Making process</p>
            </div>
            <form method="POST" action="/user" enctype="multipart/form-data" class="row g-3">
                @csrf
                @method('PUT')

                {{-- Date of birth --}}
                <div class="col-md-6">
                    <label for="dob" class="form-label fw-bold">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" value="{{ old('dob') }}">
                    @error('dob')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- gender --}}
                <div class="col-md-6">
                    <label for="gender" class="form-label fw-bold">Gender</label>
                    <input type="date" class="form-control" name="gender" value="{{ old('gender') }}">
                    @error('gender')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Sex orientation --}}
                <div class="col-md-6">
                    <label for="sex_orientation" class="form-label fw-bold">What is your Sexual Identity?</label>
                    <input type="text" class="form-control" name="sex_orientation"
                        value="{{ old('sex_orientation') }}">
                    @error('sex_orientation')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- orientation --}}
                <div class="col-md-6">
                    <label for="religion" class="form-label fw-bold">Sexual Orientation</label>
                    <input type="text" class="form-control" name="religion" value="{{ old('religion') }}">
                    @error('religion')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- marital status --}}
                <div class="col-md-6">
                    <label for="interested_in" class="form-label fw-bold">Interested in?</label>
                    <input type="text" class="form-control" name="interested_in" placeholder="Doe"
                        value="{{ old('interested_in') }}">
                    @error('interested_in')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- looking for --}}
                <div class="col-md-6">
                    <label for="city" class="form-label fw-bold">What City do you reside?</label>
                    <input type="text" class="form-control" name="city" placeholder="Doe" value="{{ old('city') }}">
                    @error('city')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Country --}}
                <div class="col-md-6">
                    <label for="country" class="form-label fw-bold">What Country do you reside?</label>
                    <input type="text" class="form-control" name="country" placeholder="Nigeria" value="{{ old('country') }}">
                    @error('country')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Profile pic --}}
                <div class="col-md-6">
                    <label for="profile_pic" class="form-label fw-bold">Upload a display picture</label>
                    <input type="file" class="form-control" name="profile_pic" placeholder="John">
                    @error('profile_pic')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Extra --}}
                <div class="col-md-6">
                    <label for="extra" class="form-label fw-bold">Tell us about yourself</label>
                    <textarea type="text" class="form-control" name="extra" placeholder="I am ......." value="{{ old('extra') }}"></textarea>
                    @error('extra')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary shadow fw-bold">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
