<x-app-layout>
    <x-admin-panel>
        <div class="container">
            <ol class="list-group list-group-numbered">
                @foreach ($users as $user)
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="{{ route('sub.edit', $user) }}" class="text-dark text-decoration-none">
                                    {{ $user->first_name }} {{ $user->last_name }}
                                </a>
                            </div>
                            {{ $user->orientation }} {{ $user->gender }}
                        </div>
                        <span class="badge bg-secondary rounded-pill">{{ $user->subscription }}</span>
                    </li>
                @endforeach
            </ol>
            <div class="mt-3 p-4">
                {{ $users->links() }}
            </div>
        </div>
    </x-admin-panel>
</x-app-layout>
