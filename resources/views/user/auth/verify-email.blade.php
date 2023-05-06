<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card text-start shadow my-5">
                    <div class="card-header">
                        <p class="m-0 fs-4 fw-medium">
                            {{ __('You\'re almost there!') }}
                        </p>
                    </div>

                    <div class="card-body">
                        <p class="my-1">
                            Please check your email inbox for a <b>verification email</b> and follow the prompts to
                            verify your account.
                        </p>
                        <hr>
                        <p>
                            Didn't receive an email from us yet? <br> Try waiting a while or request another email by
                            clicking the button below.
                        </p>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('resend').submit();">
                            <button class="btn btn-danger mb-2">
                                Resend Email
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
