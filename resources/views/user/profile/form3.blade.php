<x-app-layout>
    <div class="d-flex align-items-center justify-content-center mt-3">
        <div
            class="bg-white border rounded-3 shadow col-sm-4 col-md-6 col-lg-6 mx-3 p-4 animate__animated animate__fadeIn">
            <div class="text-left my-4">
                <h3>Almost there</h3>
                <p>Don't worry, your information is safe with us 😃</p>
            </div>
            @php
                auth()->user()->extra != '' ? ($isActive = false) : ($isActive = true);
            @endphp
            <form method="POST" action="{{ route('profile.update', auth()->id()) }}" enctype="multipart/form-data"
                class="row g-3">
                @csrf
                @method('PATCH')

                {{-- first language --}}
                <div class="col-md-6">
                    <label for="first_language" class="form-label fw-bold">What's your first language <b
                            class="text-danger">*</b></label>
                    <input type="text" class="form-control" id="first_language" name="first_language"
                        value="{{ old('first_language', auth()->user()->first_language) }}" placeholder="English"
                        required>
                </div>

                {{-- second language --}}
                <div class="col-md-6">
                    <label for="second_language" class="form-label fw-bold">What's your second language</label>
                    <input type="text" class="form-control" id="second_language" name="second_language"
                        value="{{ old('second_language', auth()->user()->second_language) }}" placeholder="Hausa">
                </div>

                {{-- employment status --}}
                <div class="col-md-3">
                    <label for="employed" class="form-label fw-bold">Employment status <b
                            class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="employed" name="employed"
                        required>
                        <option value="{{ auth()->user()->employed }}" selected>
                            {{ auth()->user()->employed ? auth()->user()->employed . __(' • ') : __('Choose a option') }}
                        </option>
                        <option value="Student">Student</option>
                        <option value="Employed">Employed</option>
                        <option value="Self-employed">Self-employed</option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="Retired">Retired</option>
                    </select>
                </div>

                {{-- income --}}
                <div class="col-md-6">
                    <label for="income" class="form-label fw-bold">Annual Income <b class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="income" name="income"
                        required>
                        <option value="{{ auth()->user()->income }}" selected>
                            {{ auth()->user()->income ? auth()->user()->income . __(' • ') : __('Choose a option') }}
                        </option>
                        <option value="Less than 50,000">Less than $50,000</option>
                        <option value="50,000 - 100,000">$50,000 - $100,000</option>
                        <option value="100,000 - 300,000">$100,000 - $300,000</option>
                        <option value="300,000 - 400,000">$300,000 - $400,000</option>
                        <option value="300,000 - 400,000">Above $400,000</option>
                    </select>
                </div>

                {{-- profession --}}
                <div class="col-md-3">
                    <label for="profession" class="form-label fw-bold">Your profession? <b
                            class="text-danger">*</b></label>
                    <input type="text" class="form-control" id="profession" name="profession"
                        value="{{ old('profession', auth()->user()->profession) }}" placeholder="Teacher" required>
                </div>

                {{-- extra --}}
                <div class="col-md-13">
                    <label for="extra" class="form-label fw-bold">
                        Write something about yourself
                        <b class="text-danger">*</b>
                    </label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="extra" name="extra" style="height: 100px"
                            required>{{ old('extra', auth()->user()->extra) }}</textarea>
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
