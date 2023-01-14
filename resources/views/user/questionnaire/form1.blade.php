<x-layout>
    <div class="d-flex align-items-center justify-content-center mt-3">
        <div class="bg-white border rounded-3 shadow col-sm-4 col-md-6 col-lg-6 mx-3 p-4">
            <div class="text-center my-4">
                <h2>Fill out this form</h2>
                <p>
                    Hey {{ auth()->user()->first_name }}, we need you to properly fill out this form for us to make you
                    the best match
                </p>
            </div>
            <form method="POST" action="/user" enctype="multipart/form-data" class="row g-3">
                @csrf
                @method('PUT')

                {{-- Date of birth --}}
                <div class="col-md-6">
                    <label for="dob" class="form-label fw-bold">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob') }}">
                    @error('dob')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- gender --}}
                <div class="col-md-6">
                    <label for="gender" class="form-label fw-bold">Select your Gender</label>
                    <select id="gender" class="form-select" aria-label="Default select example" name="gender">
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    @error('gender')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Sex orientation --}}
                <div class="col-md-6">
                    <label for="orientation" class="form-label fw-bold">What is your sexual orientation</label>
                    <select class="form-select" aria-label="Default select example" id="orientation" name="orientation">
                        <option value="heterosexual">Heterosexual</option>
                        <option value="bisexual">Bisexual</option>
                        <option value="gay">Gay</option>
                    </select>
                    @error('orientation')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- relationship status --}}
                <div class="col-md-6">
                    <label for="relationship_status" class="form-label fw-bold">Current Relationship Status</label>
                    <select class="form-select" aria-label="Default select example" id="relationship_status" name="relationship_status">
                        <option value="single">Single</option>
                        <option value="divorced">Divorced</option>
                        <option value="married">Married</option>
                        <option value="complicated">It's complicated</option>
                    </select>
                    @error('relationship_status')
                        <p class="text-danger fs-6 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- looking for --}}
                <div class="col-md-13">
                    <label for="looking_for" class="form-label fw-bold">
                        What are you looking for in a
                        Relationship?
                    </label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="looking_for" style="height: 100px"></textarea>
                        <label for="looking_for">Comments</label>
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-success shadow fw-bold">Save</button>
                    <button class="btn btn-dark shadow fw-bold">Next</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
