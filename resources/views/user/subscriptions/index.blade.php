<x-app-layout>
    <div class="container">
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
