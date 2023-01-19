<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header">
                        <b>
                            Hi There, {{ auth()->user()->first_name }}
                        </b>
                    </div>

                    <div class="card-body">
                        {{ __('Welcome to your dashboard!') }}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @unless( auth()->user()->income )
                    <div class="card shadow animate__animated animate__headShake">
                        <div class="card-header">{{ __('Complete Your Matching Questionaire') }}</div>

                        <div class="card-body">
                            <p>
                                In order to make the best matches possible, we need to ask you some questions.
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
                    <div class="card shadow animate__animated animate__headShake">
                        <div class="card-header">{{ __('Tell us about your ideal person') }}</div>

                        <div class="card-body">
                            <p>
                                Now you've filled out the necessary quesetions, tell us about the kind of partner you're loking for.
                            </p>
                            <p>
                                <b>Let's get started!</b>
                            </p>
                            <a href="#">
                                <button class="btn btn-primary shadow fw-bolder">
                                    {{ __('Start') }}
                                </button>
                            </a>
                        </div>
                    </div>
                @endunless
            </div>
        </div>
    </div>
</x-layout>
