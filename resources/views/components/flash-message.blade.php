<!-- It is never too late to be what you might have been. - George Eliot -->
@if (session()->has('status'))
    <style>
        #alert {
            position: fixed;
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: max-content;
            background: rgba(12, 255, 12, 0.2);
            border: 0.5px solid darkslategray;
            padding: 5px 10px;
        }
    </style>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition.duration.500ms role="alert" id="alert" class="rounded shadow">
        <p class="p-0 m-0 fw-bold">
            {{ session('status') }}
        </p>
    </div>
@endif
