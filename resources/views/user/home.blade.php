<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header">{{ __('Welome To Your Dashboard') }}</div>
    
                    <div class="card-body">    
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">{{__('Complete Your Matching Questionaire')}}</div>
    
                    <div class="card-body">    
                        <button class="btn btn-primary shadow">
                            {{__('Click Here')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>