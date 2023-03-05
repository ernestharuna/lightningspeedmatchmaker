<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
@props(['users', 'subs', 'matches'])

<div class="container">
    <div class="dashboard">
        <div class="my-card">
            <h3 class="mb-2"><i class="bi bi-person-check"></i><br>
                Users
            </h3>
            <span>
                <a href="{{ route('users.index') }}" class="text-white text-decoration-none">Members</a>
                <br>
                <a href="{{ route('sub.users') }}" class="text-white text-decoration-none">Subscribed Members</a>
            </span>
        </div>
        <div class="my-card">
            <h3 class="mb-2"><i class="bi bi-valentine"></i><br>
                Matches
            </h3>
            <span>
                <a href="{{ route('admin.dashboard') }} " class="text-white text-decoration-none">View Matches</a>
                <br>
                <a href="#" class="text-white text-decoration-none">Make a Match</a>
            </span>
        </div>
        <div class="my-card">
            <h3 class="mb-2"><i class="bi bi-gear"></i><br>
                Manage
            </h3>
            <span>
                <a href="{{ route('manage.subs') }}" class="text-white text-decoration-none">
                    Subscriptions
                </a>
                <br>
                <a href="{{ route('user.refs') }}" class="text-white text-decoration-none">
                    Referrals
                </a>
            </span>
        </div>
    </div>

    {{-- --------------------SLOT --}}

    <div class="my-3">
        {{ $slot }}
    </div>

    @if (Route::is('admin.dashboard'))
        <div class="container accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="fs-4 accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Recent Matches
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <ol class="list-group list-group-numbered">
                            @unless(count($matches) == 0)
                                @foreach ($matches as $match)
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">{{ $match->user->first_name }}'s match</div>
                                            {{ $match->user->first_name }} made a match with
                                            {{ $match->matched_user->first_name }}
                                        </div>
                                        <span class="badge bg-info rounded-pill">{{ $match->match_info }}</span>
                                    </li>
                                @endforeach
                            @else
                                <p>
                                    No Matches have been made yet.
                                </p>
                            @endunless
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    @endif
