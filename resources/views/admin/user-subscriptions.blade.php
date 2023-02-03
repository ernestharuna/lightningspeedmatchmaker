<x-app-layout>
    <x-admin-panel>
        <div class="container">
            <ol class="list-group list-group-numbered">
                @foreach ($subs as $sub)
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="{{ route('sub.edit', $sub) }}" class="text-dark text-decoration-none">
                                    {{ $sub->subscription_type }}
                                </a>
                            </div>
                            {{ $sub->description }}
                        </div>
                        <span class="badge bg-success rounded-pill">$ {{ $sub->price }}</span>
                    </li>
                @endforeach
            </ol>
        </div>
    </x-admin-panel>
</x-app-layout>
