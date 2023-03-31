{{-- @php
    $word = $match->last_name;
    $last_name = substr($word, 0, 1);
@endphp

<style>
    #banner {
        margin-top: -30px;
        background-position: right bottom, right;
        background-blend-mode: normal;
        background-repeat: no-repeat, no-repeat;
        background-size: cover, cover;
    }

    .dp_box {
        width: 200px;
        height: 200px;
        border: 1px solid black;
        background: #fff;
        overflow: hidden;
    }

    #dp {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #up {
        position: relative;
        top: -100px;
    }
</style>

<x-app-layout>
    <div class="h-25" id="banner"
        style="background-image: linear-gradient(rgba(0, 4, 250, 0.3), rgba(0, 2, 133, 0.5)), url({{ $match->profile_pic ? asset('storage/' . $match->profile_pic) : asset('assets/img/logo.png') }});">
    </div>
    <div class="container">
        <div id="up">
            <div class="dp_box my-2 rounded">
                <img src="{{ $match->profile_pic ? asset('storage/' . $match->profile_pic) : asset('assets/img/logo.png') }}"
                    alt="display picture" id="dp" class="img-fluid" />
            </div>

            <div>
                <h3>{{ $match->first_name }} {{ $last_name }}.</h3>
                <p>{{ $match->date_of_birth }}</p>
                <p>{{ $match->city }}, {{ $match->country }}</p>
            </div>

            <hr>

            <div>
                <h4>{{ $match->first_name }}'s Bio</h4>
                <div class="border border-secondary px-1 m-1 d-inline-block rounded bg-white">
                    <i class="bi bi-stars"></i> {{ $match->zodiac_sign }}
                </div>
                <div class="border border-secondary px-1 m-1 d-inline-block rounded bg-white">
                    <i class="bi bi-briefcase"></i> {{ $match->profession }}
                </div>
                <div class="border border-secondary px-1 m-1 d-inline-block rounded bg-white">
                    <i class="bi bi-person-workspace"></i> {{ $match->education }}
                </div>
                <div class="border border-secondary px-1 m-1 d-inline-block rounded bg-white">
                    <i class="bi bi-person-heart"></i> {{ $match->relationship_status }}
                </div>

                <p>{{ $match->extra }}</p>

                <div>
                    <h3>
                        Extra Information
                    </h3>
                    <div>
                        <b>Gender:</b> {{ $match->gender }}, <b>Orientation:</b>
                        {{ $match->orientation }}
                    </div>
                    <div>
                        <b>Ethnicity:</b> {{ $match->ethnicity }}, <b>Religion:</b>
                        {{ $match->religion }}
                    </div>
                    <div>
                        <b>Looking for:</b> {{ $match->looking_for }}
                    </div>
                    <div>
                        <b>Height:</b> {{ $match->height }},
                        <b>Weight:</b> {{ $match->weight }}lbs,
                        <b>Hair color:</b {{ $match->hair_color }}>
                    </div>
                    <div>
                        <b>Language:</b> {{ $match->first_language }},
                        <b>Second Langauge:</b> {{ $match->second_language }}
                    </div>
                    <div>
                        <b>Pets:</b> {{ $match->pets }},
                        <b>Smokes:</b> {{ $match->smokes }},
                        <b>Drugs:</b> {{ $match->drugs }}
                    </div>
                    <div>
                        <b>How often you workout:</b> {{ $match->activity_level }}
                    </div>
                    <div>
                        <b>Jealous type:</b> {{ $match->how_jelly }}
                    </div>
                </div>
            </div>

            <div class="d-inline-block bg-white bg-gradient border border-secondary border-1 rounded px-3 p-1 fw-bold my-3"
                title="Request Status: {{ $match->status }}">
                Status: {{ $match->status }}
            </div>

            <div class="d-sm-flex justify-content-between mt-3">
                <div>
                    <img class="img-fluid img-thumbnail"
                        src="{{ $match->profile_pic ? asset('storage/' . $match->profile_pic) : asset('assets/img/logo.png') }}"
                        alt="...">
                </div>
                <div>
                    <img class="img-fluid img-thumbnail"
                        src="{{ $match->dp_1 ? asset('storage/' . $match->dp_1) : asset('assets/img/logo.png') }}"
                        alt="...">
                </div>
                <div>
                    <img class="img-fluid img-thumbnail"
                        src="{{ $match->dp_2 ? asset('storage/' . $match->dp_2) : asset('assets/img/logo.png') }}"
                        alt="...">
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
