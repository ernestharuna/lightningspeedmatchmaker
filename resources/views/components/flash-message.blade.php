<!-- It is never too late to be what you might have been. - George Eliot -->
@if (session()->has('status'))
    <style>
        .alert{
            width: fit-content;
            margin: 10px 0;
            padding: 5px 10px;
            top: 0;
            left: 50%;
            position: fixed;
            transform: translateX(-50%);
        }
    </style>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-success" role="alert">
        <p class="p-0">
            {{ session('status') }}
        </p>
    </div>
@endif
