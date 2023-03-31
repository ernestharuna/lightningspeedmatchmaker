<x-app-layout>
    <div class="container">
        <h2 class="mb-3 fw-bold">Match Search</h2>
        <p>
            Tap <b>Take</b> to save the person of your choice, and then you can view their profile at the
            <b>Matches</b> section while you wait for them to accept your Match Request.
        </p>
        @unless(count($matches) == 0)
            @foreach ($matches as $match)
                <div class="bg-white p-3 rounded border mb-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h3>
                            {{ $match->first_name }}
                        </h3>
                        <p class="m-0">{{ $accuracy }} match with you </p>
                        <p>
                            <span class="bg-primary rounded-pill text-white px-2">Born Year</span>
                            {{ $match->date_of_birth }}
                            <br>
                            <span class="bg-primary rounded-pill text-white px-2">Looking For</span>
                            {{ $match->looking_for }}
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
</x-app-layout>
