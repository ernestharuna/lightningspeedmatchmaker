<x-app-layout>
    <x-admin-panel>
        <div class="container">
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">
                            <b class="text-dark text-decoration-none">
                                {{ $user->first_name }} {{ $user->last_name }}
                            </b>
                        </div>
                        <p>Sexual Orientation - {{ $user->orientation }} <br> Gender - {{ $user->gender }}</p>
                        <p>Date of Birth <small>(yyyy-dd-mm)</small> - {{ $user->date_of_birth }} <br> Zodiac Sign - {{ $user->zodiac_sign }}</p>
                        <p>Relationship Status - {{ $user->relationship_status }} <br> Looking for - {{ $user->looking_for }}</p>
                        <p>Ethnicity - {{ $user->ethnicity }} <br> Religion - {{ $user->religion }}</p>
                        <p>Employment Status - {{ $user->employed }} <br> Income and Profession - {{ $user->income }} | {{ $user->profession}}</p>
                        <p>City and Country - {{ $user->city }}, {{ $user->country }}</p>
                    </div>
                    <span class="badge bg-secondary rounded-pill">{{ $user->subscription }}</span>
                </li>
            </ol>
        </div>
    </x-admin-panel>
</x-app-layout>
