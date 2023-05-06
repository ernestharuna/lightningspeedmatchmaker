<x-app-layout>
    <div class="container">
        <h2 class="mb-3 fw-bold">Match Search</h2>
        <p>
            Tap <b>Take</b> to save the person of your choice, and then you can view their profile at the
            <b>Matches</b> section while you wait for them to accept your Match Request.
        </p>
        @unless (count($matches) == 0)
            @foreach ($matches as $match)
                <div class="bg-white p-3 rounded border mb-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h3>
                            {{ $match->first_name }}
                        </h3>
                        <p class="m-0">{{ $accuracy }} match with you </p>
                        <p>
                            <i class="d-none" id="data">{{ $match->date_of_birth }}</i> {{-- JS gets age from here --}}
                            <span class="badge bg-gradient bg-primary rounded-pill">
                                <span class="badge bg-white text-dark rounded-pill">Age:</span>
                                <span id="age"></span>
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
                    There's no match for you at the moment, make sure you have your profile
                    correctly filled, and try again.
                </p>
                <a href="{{ route('dashboard') }}">
                    <button class="btn btn-light">Back to dashboard</button>
                </a>
            </div>
        @endunless
    </div>

    <script>
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

        const age = document.getElementById('age').innerHTML = `${yearsDiff} years`;
    </script>
</x-app-layout>
