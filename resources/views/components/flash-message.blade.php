<!-- It is never too late to be what you might have been. - George Eliot -->
@if (session()->has('status'))
    <style>
        #alert {
            position: fixed;
            top: 10px;
            left: 50%;
            transform: translate(-50%, -50%);
            width: fit-content;
        }
    </style>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="alert alert-success animate__animated animate__shakeX" role="alert" id="alert">
        <p class="p-0 m-0">
            {{ session('status') }}
        </p>
    </div>
@endif
