<x-app-layout>
    <div class="container">
        <h2>All Subscriptions</h2>
        <p>You can come back to change this anytime</p>
        <div class="subscriptions">
            @foreach ($subs as $sub)
                <div class="box">
                    <h3>{{ $sub->subscription_type }}</h3>
                    <p>${{ $sub->price }}</p>
                    <p>
                        {{ $sub->description }}
                    </p>
                    <button class="btn btn-light">Select Plan</button>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
