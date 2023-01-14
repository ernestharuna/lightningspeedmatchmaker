<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header">
                        <b>
                            Hi There, {{ auth()->user()->first_name }}
                        </b>
                    </div>
    
                    <div class="card-body">    
                        {{ __('You are logged in . . .') }}
                        <br>
                        {{ __('Welcome to your dashboard!') }}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">{{__('Complete Your Matching Questionaire')}}</div>
    
                    <div class="card-body">  
                        <p>
                            In order to make the best matches possible, we need to ask you some questions.
                            <br>
                            This takes just a few minutes, <b>Let's get started!</b>
                        </p>  
                        <a href="/questionniare">
                            <button class="btn btn-primary shadow">
                                {{__('Click Here')}}
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>