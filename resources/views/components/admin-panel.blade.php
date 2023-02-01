<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<div class="container">
    <div class="dashboard">
        <div class="my-card">
            <h3><i class="bi bi-person-check"></i><br>
                Users
            </h3>
            <span>
                <a href="#" class="text-white">Registered Members</a>
                <br>
                <a href="#" class="text-white">Subscribed Members</a>
            </span>
        </div>
        <div class="my-card">
            <h3><i class="bi bi-valentine"></i><br>
                Matches
            </h3>
            <span>
                <a href="#" class="text-white">View Matches</a>
                <br>
                <a href="#" class="text-white">Make a Match</a>
            </span>
        </div>
        <div class="my-card">
            <h3><i class="bi bi-gear"></i><br>
                Manage
            </h3>
            <span>
                <a href="#" class="text-white">Restrict Members</a>
                <br>
                <a href="#" class="text-white">Add new members</a>
            </span>
        </div>
    </div>

    <div class="panel-detail">
        {{ $slot }}
    </div>
</div>
