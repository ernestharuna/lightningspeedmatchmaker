<x-app-layout>
    <x-admin-panel>
        <div class="container">
            <form action="#">
                {{-- <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Search</span>
                    <input type="search" class="form-control my-3">
                </div> --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Search</span>
                    <input type="search" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </form>
            <ol class="list-group list-group-numbered">
                @foreach ($users as $user)
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="d-flex ">
                                <img src="{{ $user->profile_pic ? asset('storage/' . $user->profile_pic) : asset('assets/img/logo.png') }}"
                                    class="img-fluid rounded border" alt="..." style="width: 50px">
                                <div class="mx-2">
                                    <a href="{{ route('users.show', $user) }}"
                                        class="text-dark text-decoration-none fw-bold">
                                        {{ $user->first_name }} {{ $user->last_name }}
                                        <br>
                                    </a>
                                    {{ $user->orientation }} {{ $user->gender }}
                                </div>
                            </div>
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
