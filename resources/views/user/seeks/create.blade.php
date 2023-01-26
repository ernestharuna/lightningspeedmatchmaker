<x-layout>
    <div class="d-flex align-items-center justify-content-center mt-3">
        <div
            class="bg-white border rounded-3 shadow col-sm-10 col-md-10 col-lg-6 mx-3 p-4 animate__animated animate__fadeIn">
            <div class="text-left my-4">
                <h3>Now, tell us about the pereson you dream of.</h3>
            </div>
            <form method="POST" action="{{ route('seeks.store') }}" enctype="multipart/form-data" class="row g-3">
                @csrf
                {{-- gender --}}
                <div class="col-md-6">
                    <label for="gender" class="form-label fw-bold">Their gender <b class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="gender" name="gender" required>
                        <option value="{{ $option }}" selected>
                            {{ $option }}
                        </option>
                    </select>
                </div>

                {{-- sexual orientation --}}
                <div class="col-md-6">
                    <label for="sexual_orientation" class="form-label fw-bold">
                        Their sexual orientation
                        <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="sexual_orientation"
                        name="sexual_orientation" required>
                        <option value="{{ $user->orientation }}" selected>
                            {{ $user->orientation }}
                        </option>
                    </select>
                </div>

                {{-- height --}}
                <div class="col-md-6">
                    <label for="height" class="form-label fw-bold">Their height</label>
                    <select class="form-select" aria-label="Default select example" id="height" name="height"
                        value="{{ old('height') }}">
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="4ft - 4'5ft">4ft - 4'5ft</option>
                        <option value="4'6ft - 5'5ft">4'6ft - 5'5ft</option>
                        <option value="5'5ft - 6ft">5'5ft - 6ft</option>
                        <option value="6ft - 6'5ft">6ft - 6'5ft</option>
                        <option value="6'5 above">6'5 above</option>
                    </select>
                </div>

                {{-- body type --}}
                <div class="col-md-6">
                    <label for="body_type" class="form-label fw-bold">Their body type</label>
                    <select class="form-select" aria-label="Default select example" id="body_type" name="body_type">
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="Slim">Slim</option>
                        <option value="Petite">Petite</option>
                        <option value="Muscular">Muscular</option>
                        <option value="Chubby">Chubby</option>
                        <option value="Fat">Fat</option>
                    </select>
                </div>

                {{-- hair color --}}
                <div class="col-md-6">
                    <label for="hair_color" class="form-label fw-bold">Their Hair color</label>
                    <select class="form-select" aria-label="Default select example" id="hair_color" name="hair_color">
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="Black">Black</option>
                        <option value="Brunet">Brunet</option>
                        <option value="Blonde">Blonde</option>
                        <option value="Red">Red</option>
                    </select>
                </div>

                {{-- eye color --}}
                <div class="col-md-6">
                    <label for="eye_color" class="form-label fw-bold">Their Eye color</label>
                    <select class="form-select" aria-label="Default select example" id="eye_color" name="eye_color">
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="Black">Black</option>
                        <option value="Brown">Brown</option>
                        <option value="Blue">Blue</option>
                        <option value="Green">Green</option>
                        <option value="Hazel">Hazel</option>
                    </select>
                </div>

                {{-- ethnicity --}}
                <div class="col-md-6">
                    <label for="ethnicity" class="form-label fw-bold">Ethnicity</label>
                    <select class="form-select" aria-label="Default select example" id="ethnicity" name="ethnicity">
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="American">American</option>
                        <option value="Asian">Asian</option>
                        <option value="African">African</option>
                        <option value="Latinos">Latino/Hispanic</option>
                        <option value="I don't mind">I don't mind</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                {{-- religion --}}
                <div class="col-md-6">
                    <label for="religion" class="form-label fw-bold">
                        Their Religion
                        <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="religion" name="religion"
                        required>
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="Muslim">Muslim</option>
                        <option value="Christian">Christian</option>
                        <option value="Jewish">Jewish</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Other">I don't mind</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                {{-- zodiac  --}}
                <div class="col-md-6">
                    <label for="zodiac_sign" class="form-label fw-bold">Their zodiac sign</label>
                    <select class="form-select" aria-label="Default select example" id="zodiac_sign"
                        name="zodiac_sign">
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="Capricon">Capricon</option>
                        <option value="Libra">Libra</option>
                        <option value="Sagittarius">Sagittarius</option>
                        <option value="Cancer">Cancer</option>
                        <option value="Gemini">Gemini</option>
                        <option value="Leo">Leo</option>
                        <option value="Aquarius">Aquarius</option>
                        <option value="Taurus">Taurus</option>
                        <option value="Pisces">Pisces</option>
                        <option value="Virgo">Virgo</option>
                        <option value="Aries">Aries</option>
                        <option value="Scorpio">Scorpio</option>
                    </select>
                </div>

                {{-- date pet owner --}}
                <div class="col-md-6">
                    <label for="date_pet_owner" class="form-label fw-bold">Can you date a pet owner? <b
                            class="text-danger">*</b></label>
                    <select class="form-select" aria-label="Default select example" id="date_pet_owner"
                        name="date_pet_owner" required>
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                {{-- date drug doer --}}
                <div class="col-md-6">
                    <label for="date_drug" class="form-label fw-bold">
                        Can you date someone who does drugs ? <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="date_drug" name="date_drug"
                        required>
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                {{-- date drinker --}}
                <div class="col-md-6">
                    <label for="date_drink" class="form-label fw-bold">
                        Can you date someone who drinks ? <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="date_drink"
                        name="date_drink" required>
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                {{-- date smoker --}}
                <div class="col-md-6">
                    <label for="date_smoker" class="form-label fw-bold">
                        Can you date someone who smokes ? <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="date_smoker"
                        name="date_smoker" required>
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                {{-- income --}}
                <div class="col-md-6">
                    <label for="income" class="form-label fw-bold">
                        Their Annual Income
                        <b class="text-danger">*</b>
                    </label>
                    <select class="form-select" aria-label="Default select example" id="income" name="income"
                        required>
                        <option value="" selected disabled>
                            Choose an option
                        </option>
                        <option value="I dont't mind">I dont't mind</option>
                        <option value="Less than $50,000">Less than $50,000</option>
                        <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                        <option value="$100,000 - $300,000">$100,000 - $300,000</option>
                        <option value="$300,000 - $400,000">$300,000 - $400,000</option>
                        <option value="$300,000 - $400,000">Above $400,000</option>
                    </select>
                </div>

                <div class="mt-4 d-flex align-item-center justify-content-between">
                    <div>
                        <a href="/" class="btn btn-secondary shadow fw-bold">Back</a>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success shadow fw-bold">Done & Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
