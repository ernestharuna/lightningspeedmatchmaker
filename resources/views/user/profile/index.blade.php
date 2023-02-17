<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <p class="m-0 fs-5">
                            Your Profile
                        </p>
                    </div>
                    <div class="card-body">
                        {{-- Picture --}}
                        <div class="row">
                            <div class="col rounded">
                                <img src="{{ $user->profile_pic ? asset('storage/' . $user->profile_pic) : asset('assets/img/logo.png') }}"
                                    class="img-thumbnail mb-3" alt="..." style="width: 200px">
                            </div>
                        </div>
                        {{-- Names --}}
                        <div class="row">
                            <div class="col rounded border mx-2">
                                First Name: <br>
                                <b>{{ $user->first_name }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Last Name: <br>
                                <b>{{ $user->last_name }}</b>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                E-mail Address: <br>
                                <b>{{ $user->email }}</b>
                            </div>
                        </div>

                        {{-- Date of birth --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                Date of Birth: <br>
                                <b>{{ $user->date_of_birth }}</b>
                            </div>
                        </div>

                        {{-- Gender & Orientation --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                Gender: <br>
                                <b>{{ $user->gender }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Sexual Orientation: <br>
                                <b>{{ $user->orientation }}</b>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                Relationship status: <br>
                                <b>{{ $user->relationship_status }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Looking for: <br>
                                <b>{{ $user->looking_for }}</b>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                Height: <br>
                                <b>{{ $user->height }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Weight: <br>
                                <b>{{ $user->weight }}</b>
                            </div>
                        </div>

                        {{-- hair & eye color --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                Hair color: <br>
                                <b>{{ $user->hair_color }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Eye color: <br>
                                <b>{{ $user->eye_color }}</b>
                            </div>
                        </div>

                        {{-- ethnicity and religion --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                Ethnicity: <br>
                                <b>{{ $user->ethnicity }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Religion: <br>
                                <b>{{ $user->religion }}</b>
                            </div>
                        </div>

                        {{-- zodiac --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                Zodiac sign : <br>
                                <b>{{ $user->zodiac_sign }}</b>
                            </div>
                        </div>


                        {{-- language --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                First Language: <br>
                                <b>{{ $user->first_language }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Second Language: <br>
                                <b>{{ $user->second_language }}</b>
                            </div>
                        </div>

                        {{-- profesion & education --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                Income: <br>
                                <b>{{ $user->education }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Profession: <br>
                                <b>{{ $user->profession }}</b>
                            </div>
                        </div>

                        {{-- pets & smoke --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                Do you have pets: <br>
                                <b>{{ $user->pets }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Do you smoke: <br>
                                <b>{{ $user->smokes }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Do you do drugs: <br>
                                <b>{{ $user->drugs }}</b>
                            </div>
                        </div>

                        {{-- city & country --}}
                        <div class="row mt-3">
                            <div class="col rounded border mx-2">
                                City: <br>
                                <b>{{ $user->city }}</b>
                            </div>
                            <div class="col rounded border mx-2">
                                Country: <br>
                                <b>{{ $user->country }}</b>
                            </div>
                        </div>

                        {{-- extra --}}
                        <div class="row my-3">
                            <div class="col rounded border mx-2">
                                About you: <br>
                                <b>{{ $user->extra }}</b>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-4 mx-1">
                            <a href="{{ route('profile.edit') }}">
                                <button class="btn btn-dark">
                                    Edit Profile
                                </button>
                            </a>
                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('delete-profile').submit();">
                                <button class="btn btn-danger mx-2">
                                    Delete
                                </button>
                            </a>

                            {{-- for delete --}}
                            <form id="delete-profile" action="{{ route('profile.delete') }}" method="POST"
                                class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
