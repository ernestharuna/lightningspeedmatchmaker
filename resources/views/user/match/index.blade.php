<x-app-layout>
    <div class="container">
        <h2 class="mb-3 fw-bold">Matches</h2>
        @unless(count($matches) == 0)
            @foreach ($matches as $match)
                <div class="bg-white p-3 rounded border mb-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h3> {{ $match->first_name }}</h3>
                        <p class="m-0">{{ $accuracy }} match with you</p>
                    </div>
                    <div>
                        <button class="btn btn-outline-success"
                            onclick="event.preventDefault(); document.getElementById('update-sub-{{ $match->id }}').submit();">
                            Take
                        </button>
                    </div>
                </div>
                <form action="{{ route('match.store') }}" class="d-none" id="match-user-{{ $match->id }}" method="POST">
                    @csrf
                    <input type="number" value="{{ $match->id }}" name="match">
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
