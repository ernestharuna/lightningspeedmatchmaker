<x-app-layout>
    <div class="container">
        <h2>All Subscriptions</h2>
        <p>You can come back to change this anytime</p>
        <div class="subscriptions">
            @unless(count($subs) == 0)

                @foreach ($subs as $sub)
                    <div class="box">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3>{{ $sub->subscription_type }}</h3>
                            <p class="btn btn-outline-light p-1">Select</p>
                        </div>
                        <p>${{ $sub->price }}</p>
                        <p>
                            {{ $sub->description }}
                        </p>
                    </div>
                @endforeach
            @else
                <p class="bg-secondary p-2">No subscriptions available at the momonet</p>
            @endunless
        </div>
    </div>
</x-app-layout>
