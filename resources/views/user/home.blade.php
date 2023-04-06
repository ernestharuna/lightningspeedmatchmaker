<x-app-layout>
    @php
        // for buttons at the top.. etc
        isset($user->seeks->gender) ? ($disabled = false) : ($disabled = true);
        // for card buttons
        $step_1;
        if ($user->gender && $user->date_of_birth && $user->education && $user->employed && $user->country) {
            $step_1 = false;
        } else {
            $step_1 = true;
        }
        // for matching button
        $user->subscription !== 'Free' ? ($match = true) : ($match = false);
    @endphp
    <div class="container">
        <div>
            <div class="mb-2">
                <h1 class="fw-bold">
                    <i class="bi bi-cloud-sun-fill"></i>
                    Good Day, {{ Auth::user()->first_name }}
                </h1>
                <small>Account Status: Verified <i class="bi bi-check-circle-fill text-primary"></i></small>
            </div>
            <div>

                <a href="{{ route('profile.index') }}" class="text-decoration-none">
                    <button @class([
                        'btn',
                        'btn-outline-primary',
                        'm-1',
                        'bg-gradient',
                        'disabled' => $disabled,
                    ]) title="View your profile">
                        <i class="bi bi-person-circle"></i> Profile
                    </button>
                </a>
                <a href="{{ route('seeks.index') }}" class="text-dark text-decoration-none">
                    <button @class([
                        'btn',
                        'btn-outline-primary',
                        'm-1',
                        'bg-gradient',
                        'disabled' => $disabled,
                    ]) title="Edit your Matching preference">
                        <i class="bi bi-sliders"></i> Preference
                    </button>
                </a>
                <button @class([
                    'btn',
                    'btn-outline-primary',
                    'm-1',
                    'bg-gradient',
                    'disabled' => $disabled,
                ]) title="View match request">
                    <i class="bi bi-envelope-paper-heart-fill"></i> Requests
                </button>
            </div>
        </div>
        <hr>

        {{-- STEP 1 --}}
        <div class="d-sm-flex">
            <div class="card mx-3 my-2">
                <div class="card-body">
                    <h5 class="card-title">Step 1: Complete Your Profile.</h5>
                    <p class="card-text">
                        We need you to complete your user profile so we can offer you much more accurate matches
                    </p>
                    <p class="fw-bold">
                        This takes just a few minutes.
                    </p>
                    <a href="{{ route('profile.edit') }}">
                        <button class="btn btn-primary shadow">
                            {{ __('Complete Profile') }}
                        </button>
                    </a>
                </div>
            </div>

            {{-- STEP 2 --}}
            <div class="card mx-3 my-2">
                <div class="card-body">
                    <h5 class="card-title">Step 2: Your Soul-Mate</h5>
                    <p class="card-text">
                        Now you've completed your profile, tell us about the kind of partner you're
                        loking for.
                    </p>
                    <p>
                        <b>Let's get started!</b>
                    </p>
                    <a href="{{ route('seeks.create') }}">
                        <button @class(['btn', 'btn-primary', 'shadow', 'disabled' => $step_1])>
                            {{ __('Preference Form') }}
                        </button>
                    </a>
                </div>
            </div>
        </div>

        {{-- STEP 3 --}}
        <div>
            <div class="card mx-3 my-2">
                <div class="card-body">
                    <h5 class="card-title">Step 3: Find Your Match</h5>
                    <p class="card-text">
                        We will now match you based on the details you have given us of yourself
                    </p>
                    @if (!$match)
                        <p class="text-danger">
                            <i class="bi bi-info-square-fill text-danger"></i> Only paying members can make matches
                        </p>
                    @endif
                    <button @class(['btn', 'btn-success', 'disabled' => !$match])"
                        onclick="event.preventDefault(); 
                            document.getElementById('match').submit();">
                        <i class="bi bi-search-heart fs-5"></i> Find Match
                    </button>
                    <form id="match" action="{{ route('match', Auth::id()) }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
