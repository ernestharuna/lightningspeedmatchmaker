<!-- Nothing worth having comes easy. - Theodore Roosevelt -->
<!-- This component has its algorigthm in app/View/Components -->

<div class="bg-white p-3 rounded shadow mb-3 d-flex align-items-center justify-content-between">
    <div>
        <h3>
            <a href="{{ route('user.foo', $match) }}" class="text-decoration-none text-dark">{{ $match->first_name }}</a>
        </h3>
        <p class="m-0">
            <small>
                {{ $accuracy }}% match with you | <a href="{{ route('user.foo', $match) }}">See
                    profile</a>
            </small>
        </p>
        <p>
            <span class="badge bg-gradient bg-primary rounded-pill">
                <span class="badge bg-white text-dark rounded-pill">Age:</span>
                <span>{{ $age }} Years</span>
            </span>

            <span class="badge bg-gradient bg-primary mx-1 rounded-pill">
                <span class="badge bg-white text-dark rounded-pill">seeking:</span>
                {{ $match->looking_for }}
            </span>
        </p>
    </div>
    <div>
        <button class="btn btn-outline-secondary rounded-0 shadow"
            onclick="event.preventDefault(); 
            document.getElementById('match-user-{{ $match->id }}').submit();">
            <small>Send Request</small>
        </button>
    </div>
</div>

<form action="{{ route('match.store') }}" class="d-none" id="match-user-{{ $match->id }}" method="POST">
    @csrf
    <input type="number" value="{{ $match->id }}" name="matchedUser_id">
    <input type="text" value="{{ $accuracy }}%" name="match_info">
</form>
