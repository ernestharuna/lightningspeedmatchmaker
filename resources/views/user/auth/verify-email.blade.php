<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card text-center">
                    <div class="card-header">
                        <p class="m-0 fs-5 text-danger">
                            {{ __('Verify your Email!') }}
                        </p>
                    </div>

                    <div class="card-body">
                        <p class="my-1">
                            {{ __('Please check your Email and click the link to verify your email') }}
                        </p>
                        <p>Thank you!</p>
                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('resend').submit();">
                            <button class="btn btn-danger py-1 mb-2">
                                Resend Mail
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
</x-layout>
