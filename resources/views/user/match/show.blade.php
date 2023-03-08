@php
    $word = $match->user->last_name;
    $last_name = substr($word, 0, 1);
@endphp

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

    #up {
        position: relative;
        top: -100px;
    }
</style>

<x-app-layout>
    <div class="h-25" id="banner"
        style="background-image: linear-gradient(rgba(0, 4, 250, 0.3), rgba(0, 2, 133, 0.5)), url({{ $match->user->profile_pic ? asset('storage/' . $match->user->profile_pic) : asset('assets/img/logo.png') }});">
    </div>
    <div class="container">
        <div id="up">
            <div class="dp_box my-2 rounded">
                <img src="{{ $match->user->profile_pic ? asset('storage/' . $match->user->profile_pic) : asset('assets/img/logo.png') }}"
                    alt="display picture" id="dp" class="img-fluid" />
            </div>

            <h3>{{ $match->user->first_name }} {{ $last_name }}.</h3>
            <p>{{ $match->user->date_of_birth }}</p>
            <p>{{ $match->user->city }}, {{ $match->user->country }}</p>

            <hr>

            <h4>{{ $match->user->first_name }}'s Bio</h4>
            <p>{{ $match->user->extra }}</p>

            <button class="btn btn-success">Accept</button>
            <button class="btn btn-danger mx-3">Decline</button>

            <form action="#" method="POST" class="d-none">
                @csrf
                <input type="text" name="" id="">
            </form>

            <div class="d-sm-flex justify-content-center mt-3">
                <div>
                    <img class="img-fluid img-thumbnail"
                        src="{{ $match->user->profile_pic ? asset('storage/' . $match->user->profile_pic) : asset('assets/img/logo.png') }}"
                        alt="...">
                </div>
                <div>
                    <img class="img-fluid img-thumbnail"
                        src="{{ $match->user->dp_1 ? asset('storage/' . $match->user->dp_1) : asset('assets/img/logo.png') }}"
                        alt="...">
                </div>
                <div>
                    <img class="img-fluid img-thumbnail"
                        src="{{ $match->user->dp_2 ? asset('storage/' . $match->user->dp_2) : asset('assets/img/logo.png') }}"
                        alt="...">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
