<x-app-layout>
    <div class="d-flex align-items-center justify-content-center mt-3">
        <div
            class="bg-white border rounded-3 shadow col-sm-4 col-md-6 col-lg-6 mx-3 p-4 animate__animated animate__fadeIn">
            <div class="text-left my-4">
                <h3>Almost there</h3>
                <p>Don't worry, your information is safe with us 😃</p>
            </div>
            @php
                Auth::user()->extra != '' ? ($isActive = false) : ($isActive = true);
            @endphp
            <form method="POST" action="{{ route('profile.update', auth()->id()) }}" enctype="multipart/form-data"
                class="row g-3">
                @csrf
                @method('PATCH')

                {{-- first language --}}
                <div class="col-md-3">
                    <label for="first_language" class="form-label fw-bold">First language <b
                            class="text-danger">*</b></label>
                    <input type="text" class="form-control" id="first_language" name="first_language"
                        value="{{ old('first_language', Auth::user()->first_language) }}" placeholder="English"
                        required>
                </div>

                {{-- second language --}}
                <div class="col-md-3">
                    <label for="second_language" class="form-label fw-bold">Second language</label>
                    <input type="text" class="form-control" id="second_language" name="second_language"
                        value="{{ old('second_language', Auth::user()->second_language) }}" placeholder="Hausa">
                </div>

                {{-- Activity level --}}
                <div class="col-md-6">
                    <label for="activity_level" class="form-label fw-bold">Activity Level <b
                            class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="activity_level" name="activity_level"
                        required>
                        <option value="{{ Auth::user()->activity_level }}" selected disabled>
                            {{ Auth::user()->activity_level ? Auth::user()->activity_level . __(' • ') : __('Choose a option') }}
                        </option>
                        <option value="I go to the Gym once a year">I go to the Gym once a year</option>
                        <option value="I am a weekend warrior">I am a weekend warrior</option>
                        <option value="I go 3-5 days a week">I go 3-5 days a week</option>
                        <option value="I go daily">I go daily</option>
                        <option value="I don't workout">I don't workout</option>
                    </select>
                </div>

                {{-- employment status --}}
                <div class="col-md-3">
                    <label for="employed" class="form-label fw-bold">Employment status <b
                            class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="employed" name="employed"
                        required>
                        <option value="{{ Auth::user()->employed }}" selected disabled>
                            {{ Auth::user()->employed ? Auth::user()->employed . __(' • ') : __('Choose a option') }}
                        </option>
                        <option value="Student">Student</option>
                        <option value="Employed">Employed</option>
                        <option value="Self-employed">Self-employed</option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="Retired">Retired</option>
                    </select>
                </div>

                {{-- education --}}
                <div class="col-md-6">
                    <label for="education" class="form-label fw-bold">Education <b class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="education" name="education"
                        required>
                        <option value="{{ Auth::user()->education }}" selected disabled>
                            {{ Auth::user()->education ? Auth::user()->education . __(' • ') : __('Choose a option') }}
                        </option>
                        <option value="Never finished High School">Never finished High School</option>
                        <option value="Bachelors">Bachelors</option>
                        <option value="Masters">Masters</option>
                        <option value="Post-graduate">Post-graduate</option>
                    </select>
                </div>

                {{-- profession --}}
                <div class="col-md-3">
                    <label for="profession" class="form-label fw-bold">Your profession? <b
                            class="text-danger">*</b></label>
                    <input type="text" class="form-control" id="profession" name="profession"
                        value="{{ old('profession', Auth::user()->profession) }}" placeholder="Teacher" required>
                </div>

                {{-- extra --}}
                <div class="col-md-13">
                    <label for="extra" class="form-label fw-bold">
                        Write something about yourself
                        <b class="text-danger">*</b>
                    </label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="extra" name="extra" style="height: 100px"
                            required>{{ old('extra', Auth::user()->extra) }}</textarea>
                        <label for="extra">Feel free to write about your likes, dislikes and hobbies.</label>
                    </div>
                </div>

                <div class="mt-4 d-flex align-item-center justify-content-between">
                    <div>
                        <button type="submit" class="btn btn-success shadow fw-bold">Save</button>
                    </div>
                    <div>
                        <a href="/profile/edit/form/2" class="btn btn-outline-dark shadow fw-bold">
                            <i class="bi bi-arrow-bar-left"></i>
                            Back
                        </a>
                        <a href="/profile/edit/form/4" @class([
                            'btn',
                            'btn-danger',
                            'disabled' => $isActive,
                            'shadow',
                            'fw-bold',
                        ])>
                            Next
                            <i class="bi bi-arrow-bar-right"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
