<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card text-center">
                    <div class="card-header">
                        <p class="m-0 fs-5 text-danger">
                            {{ __('Verify Your Email!') }}
                        </p>
                    </div>

                    <div class="card-body">
                        <p class="my-1">
                            {{ __('Please check your e-mail and click the link to verify your email.') }}
                        </p>
                        <p>
                            {{ __('Make sure to check your spam box, or click the button below to resend another verfication email.') }}
                        </p>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('resend').submit();">
                            <button class="btn btn-danger mb-2">
                                Resend Verification Mail
                            </button>
                        </a>

                        <form action="/email/verification-notification" class="d-none" method="POST" id="resend">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
