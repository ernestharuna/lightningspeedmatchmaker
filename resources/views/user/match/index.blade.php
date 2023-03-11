<x-app-layout>
    <div class="container">
        <h3>Matches</h3>
        <p>All your accepted matches will be showed here.</p>
        @unless(count($matches) == 0)
            @foreach ($matches as $match)
                @php
                    $word = $match->matched_user->last_name;
                    $last_name = substr($word, 0, 1);
                @endphp
                <div class="bg-white p-3 rounded border mb-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h3> {{ $match->matched_user->first_name }} {{ $last_name }}.</h3>
                        <p class="m-0">{{ $match->match_info }}</p>
                    </div>
                    <div>
                        <p class="bg-dark rounded-pill text-white px-3">{{ $match->status }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="p-5 bg-secondary text-white">
                <p>
                    No match made at the moment, go to your dashboard.
                </p>
                <a href="{{ route('dashboard') }}">
                    <button class="btn btn-light">Back to dashboard</button>
                </a>
            </div>
        @endunless
    </div>

    <div class="container">
        <hr>

        <h3>Match Requests</h3>
        <p>Accepted/Declined requests will be deleted within 90 days</p>

        @unless(count($requests) == 0)
            @foreach ($requests as $req)
                @php
                    $word = $req->user->last_name;
                    $last_name = substr($word, 0, 1);
                @endphp
                <div class="bg-white p-3 rounded border mb-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h3> {{ $req->user->first_name }} {{ $last_name }}.</h3>
                        <p class="m-0">{{ $req->match_info }}</p>
                    </div>
                    <div>
                        <a href="{{ route('match.show', $req->id) }}">
                            <button class="btn btn-outline-secondary py-0 px-2">
                                View
                            </button>
                        </a>
                        <button class="btn btn-light bg-gradient border py-0 px-2">
                            {{ $req->status }}
                        </button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="p-2 bg-secondary text-white">
                <span>
                    No match requests at the moment
                </span>
            </div>
        @endunless
    </div>
</x-app-layout>
