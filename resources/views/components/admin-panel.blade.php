<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
@props(['users', 'subs'])

<div class="container">
    <div class="dashboard">
        <div class="my-card">
            <h3 class="mb-2"><i class="bi bi-person-check"></i><br>
                Users
            </h3>
            <span>
                <a href="{{ route('users.index') }}" class="text-white text-decoration-none">Members</a>
                <br>
                <a href="#" class="text-white text-decoration-none">Subscribed Members</a>
            </span>
        </div>
        <div class="my-card">
            <h3 class="mb-2"><i class="bi bi-valentine"></i><br>
                Matches
            </h3>
            <span>
                <a href="#" class="text-white text-decoration-none">View Matches</a>
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
                {{-- <a href="#" class="text-white text-decoration-none">Lorem ipsum</a> --}}
            </span>
        </div>
    </div>

    {{-- --------------------SLOT --}}
    {{-- --------------------SLOT --}}
    {{-- --------------------SLOT --}}

    <div class="my-3">
        {{ $slot }}
    </div>

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
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Content for list item
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Content for list item
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Content for list item
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
