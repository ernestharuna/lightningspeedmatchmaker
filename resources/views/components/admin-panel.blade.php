<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<div class="container">
    <div class="dashboard">
        <div class="my-card">
            <h3 class="mb-2"><i class="bi bi-person-check"></i><br>
                Users
            </h3>
            <span>
                <a href="#" class="text-white text-decoration-none">Registered Members</a>
                |<span class="fw-bold"> {{ $users->count() }}</span>
                <br>
                <a href="#" class="text-white text-decoration-none">Subscribed Members</a>
                |<span class="fw-bold"> {{ $users->count() }}</span>
            </span>
        </div>
        <div class="my-card">
            <h3 class="mb-2"><i class="bi bi-valentine"></i><br>
                Matches
            </h3>
            <span>
                <a href="#" class="text-white text-decoration-none">View Matches</a>
                <br>
                <a href="#" class="text-white text-decoration-none">Make a Match</a>
            </span>
        </div>
        <div class="my-card">
            <h3 class="mb-2"><i class="bi bi-gear"></i><br>
                Manage
            </h3>
            <span>
                <a href="#" class="text-white text-decoration-none">Restrict Members</a>
                <br>
                <a href="#" class="text-white text-decoration-none">Add new members</a>
            </span>
        </div>
    </div>

    <div class="panel-detail">
        {{ $slot }}
    </div>
</div>
