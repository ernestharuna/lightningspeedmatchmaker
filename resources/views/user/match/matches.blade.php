<x-app-layout>
    <div class="container">
        <h2 class="mb-3 fw-bold">Match Search</h2>
        <p>
            <small>
                - Tap <b>Take</b> to save the person of your choice. <br>
                - You can view their profile by tapping their or <b>See Profile</b>.
            </small>
        </p>

        @unless (count($matches) == 0)
            @foreach ($matches as $match)
                {{-- Matching percentage calculator --}}
                @include('partials._percentager')
                {{-- Matching percentage calculator END --}}
                <div class="bg-white p-3 rounded border mb-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h3>
                            <a href="{{ route('user.foo', $match) }}"
                                class="text-decoration-none text-dark">{{ $match->first_name }}</a>
                        </h3>
                        <p class="m-0">
                            <small>
                                {{ $accuracy }}% match with you | <a href="{{ route('user.foo', $match) }}">See
                                    profile</a>
                            </small>
                        </p>
                        <p>
                            <span class="badge bg-gradient bg-primary rounded-pill">
                                <span class="badge bg-white text-dark rounded-pill">Age:</span>
                                <span>{{ $age }} Years</span>
                            </span>

                            <span class="badge bg-gradient bg-primary mx-1 rounded-pill">
                                <span class="badge bg-white text-dark rounded-pill">seeking:</span>
                                {{ $match->looking_for }}
                            </span>
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-outline-success"
                            onclick="event.preventDefault(); 
                            document.getElementById('match-user-{{ $match->id }}').submit();">
                            Take
                        </button>
                    </div>
                </div>

                <form action="{{ route('match.store') }}" class="d-none" id="match-user-{{ $match->id }}" method="POST">
                    @csrf
                    <input type="number" value="{{ $match->id }}" name="matchedUser_id">
                    <input type="text" value="{{ $accuracy }}" name="match_info">
                </form>
            @endforeach
        @else
            <div class="p-5 bg-secondary text-white">
                <p>
                    No match made at the moment, make sure you have your profile
                    correctly filled out and try again.
                </p>
                <a href="{{ route('dashboard') }}">
                    <button class="btn btn-light">Back to dashboard</button>
                </a>
            </div>
        @endunless
        <div class="my-1 p-2">
            {{ $matches->links() }}
        </div>
    </div>

    {{-- <script>
        const data = document.getElementById('data').innerHTML;

        const birthDate = new Date(data);
        const today = new Date();

        var yearsDiff = today.getFullYear() - birthDate.getFullYear();
        const monthsDiff = today.getMonth() - birthDate.getMonth();
        const daysDiff = today.getDate() - birthDate.getDate();

        // Check if the birth date hasn't happened yet this year
        if (monthsDiff < 0 || (monthsDiff === 0 && daysDiff < 0)) {
            yearsDiff--;
        }

        const age = document.getElementById('age').innerHTML = `${yearsDiff} years`; --}}
    </script>
</x-app-layout>
