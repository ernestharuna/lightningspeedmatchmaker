<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header">
                        <p class="m-0 fs-5">
                            Hi there, {{ $user->first_name }} 🤙🏽
                        </p>
                    </div>

                    <div class="card-body">
                        <p>
                            {{ __('Welcome to your dashboard!') }}
                        </p>
                        <p>
                            Memberships are billed annually. If you would like to become a paying member, and have full
                            access to recieve weekly matches,
                            <a href="{{ route('subs') }}" target="_blank" rel="noopener noreferrer" class="fw-bold">click here</a>
                        </p>
                    </div>
                </div>
            </div>

            {{-- show if user hasn't filled these fields --}}
            <div class="col-md-8 mb-4">
                @unless($user->gender && $user->date_of_birth && $user->income && $user->employed && $user->country)
                    <div class="card shadow animate__animated animate__headShake">
                        <div class="card-header text-danger">
                            <p class="m-0 fs-5">
                                {{ __('Complete Your Matching Questionaire') }}
                            </p>
                        </div>

                        <div class="card-body">
                            <p>
                                ⚠ In order to make the best matches, we need to ask you some questions.
                                <br>
                                This takes just a few minutes.
                            </p>
                            <p>
                                <b>Let's get started!</b>
                            </p>
                            <a href="{{ route('profile.edit') }}">
                                <button class="btn btn-primary shadow">
                                    {{ __('Edit Profile') }}
                                </button>
                            </a>
                        </div>
                    </div>
                @else
                    @unless(isset($user->seeks->gender))
                        <div class="card animate__animated animate__headShake">
                            <div class="card-header">{{ __('Describe your ideal person') }}</div>

                            <div class="card-body">
                                <p>
                                    Now you've filled out the necessary quesetions, tell us about the kind of partner you're
                                    loking for.
                                </p>
                                <p>
                                    <b>Let's get started!</b>
                                </p>
                                <a href="{{ route('seeks.create') }}">
                                    <button class="btn btn-dark shadow fw-bolder">
                                        {{ __('Start') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endunless
                @endunless
            </div>

            <div class="col-md-8">
                @isset($user->seeks->gender)
                    <div class="card shadow animate__animated animate__headShake">
                        <div class="card-header fw-bold text-success">{{ __('You\'re all set!') }}</div>

                        <div class="card-body">
                            <p>
                                Now you've filled out the necessary quesetions, we will make you the best match possible
                                with the details you've provided.
                            </p>
                            <div class="d-flex align-items-center">
                                <span class="text-center border border-2 px-2 py-1 rounded">
                                    <a href="{{ route('seeks.index') }}" class="text-decoration-none text-dark">
                                        {{ __('View Your Preference') }}
                                    </a>
                                </span>
                                <span class="text-center mx-3 border border-2 px-2 py-1 rounded">
                                    <a href="{{ route('profile.index') }}" class="text-decoration-none text-dark">
                                        {{ __('View Your Profile') }}
                                    </a>
                                </span>
                                <span class="text-center border border-2 px-2 py-1 rounded">
                                    <a href="#" class="text-decoration-none text-dark">
                                        {{ __('Refer a friend') }}
                                    </a>
                                </span>
                            </div>
                            {{-- <a href="{{ route('seek.create') }}">
                                <button class="btn btn-dark shadow fw-bolder">
                                    {{ __('Start') }}
                                </button>
                            </a> --}}
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </div>
</x-layout>
