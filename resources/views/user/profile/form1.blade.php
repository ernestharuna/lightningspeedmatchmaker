<x-layout>
    <div class="d-flex align-items-center justify-content-center mt-3">
        <div
            class="bg-white border rounded-3 shadow col-sm-4 col-md-6 col-lg-6 mx-3 p-4 animate__animated animate__fadeIn">
            <div class="text-left my-4">
                <h3>{{ auth()->user()->first_name }}, we need these basic details about you</h3>
                <p>
                    All fields here are mandatroy
                </p>
            </div>
            @php
                auth()->user()->looking_for != '' ? ($isActive = false) : ($isActive = true);
            @endphp
            <form method="POST" action="{{ route('profile.update', auth()->id()) }}" enctype="multipart/form-data"
                class="row g-3">
                @csrf
                @method('PATCH')

                {{-- Date of birth --}}
                <div class="col-md-6">
                    <label for="date_of_birth" class="form-label fw-bold">
                        Date of Birth
                        <b class="text-danger">*</b>
                    </label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                        value="{{ old('date_of_birth', auth()->user()->date_of_birth) }}" required>
                </div>

                {{-- gender --}}
                <div class="col-md-6">
                    <label for="gender" class="form-label fw-bold">Select your Gender <b
                            class="text-danger">*</b></label>
                    <select id="gender" class="form-select" aria-label="Default select example" name="gender"
                        required>
                        <option value="{{ auth()->user()->gender }}" selected>
                            {{ auth()->user()->gender ? auth()->user()->gender . __(' • ') : __('Choose a option') }}
                        </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                {{-- Sex orientation --}}
                <div class="col-md-6">
                    <label for="orientation" class="form-label fw-bold">What is your sexual orientation <b
                            class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="orientation" name="orientation"
                        required>
                        <option value="{{ auth()->user()->orientation }}" selected>
                            {{ auth()->user()->orientation ? auth()->user()->orientation . __(' • ') : __('Choose a option') }}
                        </option>
                        <option value="Heterosexual">Heterosexual</option>
                        <option value="Bisexual">Bisexual</option>
                        <option value="Lesbian">Lesbian</option>
                        <option value="Gay">Gay</option>
                    </select>
                </div>

                {{-- relationship status --}}
                <div class="col-md-6">
                    <label for="relationship_status" class="form-label fw-bold">Current Relationship Status <b
                            class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="relationship_status"
                        name="relationship_status" required>
                        <option value="{{ auth()->user()->relationship_status }}" selected>
                            {{ auth()->user()->relationship_status ? auth()->user()->relationship_status . __(' • ') : __('Choose a option') }}
                        </option>
                        <option value="Single">Single</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Married">Married</option>
                        <option value="Complicated">It's complicated</option>
                    </select>
                </div>

                {{-- looking for --}}
                <div class="col-md-13">
                    <label for="looking_for" class="form-label fw-bold">
                        What are you looking for in a
                        Relationship?
                        <b class="text-danger">*</b>
                    </label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="looking_for" name="looking_for"
                            style="height: 100px" required>{{ old('looking_for', auth()->user()->looking_for) }}</textarea>
                        <label for="looking_for">Comments</label>
                    </div>
                </div>

                <small class="m-0">
                    Fields marked with <b class="text-danger fs-3" style="position: relative; top: 9px">*</b> are
                    compulsory
                </small>

                <div class="mt-3 d-flex align-item-center justify-content-between">
                    <div>
                        <button type="submit" class="btn btn-success shadow fw-bold">Save</button>
                    </div>
                    <div>
                        <a href="/profile/form/2" @class([
                            'btn',
                            'btn-outline-dark',
                            'disabled' => $isActive,
                            'shadow',
                            'fw-bold',
                        ])>
                            Next
                            <i class="bi bi-arrow-bar-right"></i>
                        </a>
                        {{-- <a href="/profile/form/2" @class([
                            'p-4',
                            'btn',
                            'btn-outline-dark',
                            'disabled' => true,
                            'shadow',
                            'fw-bold',
                        ])>
                            Next
                            <i class="bi bi-arrow-bar-right"></i>
                        </a> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
