<x-layout>
    <h2>Hello Boss</h2>

    @forelse ($users as $user)
        <p>
            {{ $user->first_name }}
        </p>
        @empty
        <p>No users at the moment</p>
    @endforelse
</x-layout>
