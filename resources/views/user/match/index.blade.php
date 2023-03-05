<x-app-layout>
    <div class="container">
        <h3>Matches</h3>
        <p>All your saved matches will be showed here.</p>
        @unless(count($matches) == 0)
            @foreach ($matches as $match)
                <div class="bg-white p-3 rounded border mb-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h3> {{ $match->matched_user->first_name }}</h3>
                        <p class="m-0">{{ $match->match_info }}</p>
                    </div>
                    <div>
                        <button class="btn btn-outline-danger">
                            Delete
                        </button>
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
</x-app-layout>
