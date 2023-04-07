<x-app-layout>
    <x-admin-panel>
        <div class="container">
            <h3>Mailing</h3>
            <small>
                Emails sent from this form are sent to only <span class="text-danger">verified users</span>
            </small>
            <hr>
            <form action="{{ route('send.mail') }}" method="POST" class="row g-3 align-items-center">
                @csrf
                <div class="mb-1">
                    <label for="title" class="form-label">Mail Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Hello all users">
                    @error('title')
                        <small class="text-danger fw-bold mt-1">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Mail Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3"
                        placeholder="Write email content to all verified users"></textarea>
                    @error('content')
                        <small class="text-danger fw-bold mt-1">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Send e-mails</button>
                </div>
            </form>
        </div>
    </x-admin-panel>
</x-app-layout>
