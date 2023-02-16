<x-app-layout>
    <x-admin-panel>
        <div class="container">
            <h3>Subscribed Users</h3>
            <ol class="list-group list-group-numbered">
                @unless(count($users) == 0)
                    @foreach ($users as $user)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">
                                    <img src="{{ $user->profile_pic ? asset('storage/' . $user->profile_pic) : asset('assets/img/logo.png') }}"
                                        class="img-fluid rounded border" alt="..." style="width: 50px">

                                    <a href="{{ route('users.show', $user) }}" class="text-dark text-decoration-none">
                                        {{ $user->first_name }} {{ $user->last_name }}
                                    </a>
                                </div>
                                {{ $user->orientation }} {{ $user->gender }}
                            </div>
                            <span class="badge bg-secondary rounded-pill">{{ $user->subscription }}</span>
                        </li>
                    @endforeach
                @else
                    <p class="fw-bold text-secondary">
                        No Subcribed users at the moment :(
                    </p>
                @endunless
            </ol>
            <div class="mt-3 p-4">
                {{ $users->links() }}
            </div>
        </div>
    </x-admin-panel>
</x-app-layout>
