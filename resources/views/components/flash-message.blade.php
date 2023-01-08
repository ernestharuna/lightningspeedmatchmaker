<!-- It is never too late to be what you might have been. - George Eliot -->
@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
        class="position-absolute top-0 start-50 translate-middle-x border shadow rounded">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
