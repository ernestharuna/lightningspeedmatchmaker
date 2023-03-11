<style>
    #banner {
        margin-top: -30px;
        background-position: right bottom, right;
        background-blend-mode: normal;
        background-repeat: no-repeat, no-repeat;
        background-size: cover, 700px 700px;
    }

    .dp_box {
        width: 200px;
        height: 200px;
        border: 1px solid black;
        background-blend-mode: color-burn;
        background: #fff
    }

    @media screen and (max-width: 760px) {
        .dp_box {
            width: 150px;
            height: 150px;
            border: 1px solid black;
            background-blend-mode: color-burn;
            background: #fff
        }
    }

    #up {
        position: relative;
        top: -100px;
    }
</style>

<x-app-layout>
    <div class="h-25" id="banner"
        style="background-image: linear-gradient(rgba(0, 4, 250, 0.3), rgba(0, 2, 133, 0.5)), url({{ $user->profile_pic ? asset('storage/' . $user->profile_pic) : asset('assets/img/logo.png') }});">
    </div>
    <div class="container">
        <div id="up">
            <div class="dp_box my-2 rounded">
                <img src="{{ $user->profile_pic ? asset('storage/' . $user->profile_pic) : asset('assets/img/logo.png') }}"
                    alt="display picture" id="dp" class="img-fluid" />
            </div>

            <div>
                <h3 class="fw-bold">{{ $user->first_name }} {{ $user->last_name }}</h3>
                <p>
                    {{ $user->email }} | {{ $user->city }}, {{ $user->country }}
                    <br>
                    {{ $user->phone_number }}
                </p>
                <p>{{ $user->date_of_birth }}</p>
            </div>

            <hr>

            <div>
                <h4>{{ $user->first_name }}'s Bio</h4>
                <div class="border border-secondary px-1 d-inline rounded bg-white">
                    <i class="bi bi-stars"></i> {{ $user->zodiac_sign }}
                </div>
                <div class="border border-secondary px-1 mx-1 d-inline rounded bg-white">
                    <i class="bi bi-briefcase"></i> {{ $user->profession }}
                </div>
                <div class="border border-secondary px-1 mx-1 d-inline rounded bg-white">
                    <i class="bi bi-person-workspace"></i> {{ $user->education }}
                </div>
                <div class="border border-secondary px-1 mx-1 d-inline rounded bg-white">
                    <i class="bi bi-person-heart"></i> {{ $user->relationship_status }}
                </div>
                <p>{{ $user->extra }}</p>
            </div>
            {{-- Extra info --}}
            <div>
                <h3>Extra Information</h3>
                <div>
                    <b>Gender:</b> {{ $user->gender }}, <b>Orientation:</b> {{ $user->orientation }}
                </div>
                <div>
                    <b>Ethnicity:</b> {{ $user->ethnicity }}, <b>Religion:</b> {{ $user->religion }}
                </div>
                <div>
                    <b>Looking for:</b> {{ $user->looking_for }}
                </div>
                <div>
                    <b>Height:</b> {{ $user->height }},
                    <b>Weight:</b> {{ $user->weight }}lbs,
                    <b>Hair color:</b {{ $user->hair_color }}>
                </div>
                <div>
                    <b>Language:</b> {{ $user->first_language }},
                    <b>Second Langauge:</b> {{ $user->second_language }}
                </div>
                <div>
                    <b>Pets:</b> {{ $user->pets }},
                    <b>Smokes:</b> {{ $user->smokes }},
                    <b>Drugs:</b> {{ $user->drugs }}
                </div>
                <div>
                    <b>How often you workout:</b> {{ $user->activity_level }}
                </div>
                <div>
                    <b>Jealous type:</b> {{ $user->how_jelly }}
                </div>
            </div>


            <div class="d-flex align-items-center my-4 mx-1">
                <a href="{{ route('profile.edit') }}">
                    <button class="btn btn-dark">
                        Edit Profile
                    </button>
                </a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-profile').submit();">
                    <button class="btn btn-danger mx-2">
                        Delete Profile
                    </button>
                </a>

                {{-- for delete --}}
                <form id="delete-profile" action="{{ route('profile.delete') }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>
            </div>

            <h3>Your photo's</h3>
            <div class="d-sm-flex justify-content-between mt-3">
                <div>
                    <img class="img-fluid img-thumbnail"
                        src="{{ $user->profile_pic ? asset('storage/' . $user->profile_pic) : asset('assets/img/logo.png') }}"
                        alt="...">
                </div>
                <div>
                    <img class="img-fluid img-thumbnail"
                        src="{{ $user->dp_1 ? asset('storage/' . $user->dp_1) : asset('assets/img/logo.png') }}"
                        alt="...">
                </div>
                <div>
                    <img class="img-fluid img-thumbnail"
                        src="{{ $user->dp_2 ? asset('storage/' . $user->dp_2) : asset('assets/img/logo.png') }}"
                        alt="...">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
