<x-layout>
    <div>
        <h2>Create Your Account</h2>
    </div>
    <form method="POST" action="/user">
        @csrf
        <div>
            <input id="input" type="text" name="first_name" placeholder="John" value="{{ old('first_name') }}">
        </div>

        <div>
            <input id="input" type="text" name="last_name" placeholder="Doe" value="{{ old('last_name') }}">
        </div>

        <div>
            <input id="input" type="email" name="email" placeholder="johndoe@xyz.com" value="{{ old('email') }}">
        </div>

        <div>
            <input id="input" type="password" name="password" value="{{ old('password') }}">
        </div>

        <div>
            <input id="input" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">  
        </div>

        <div>
            <button type="submit" class="btn btn-success">
                Create Account
            </button>
        </div>
    </form>
</x-layout>
