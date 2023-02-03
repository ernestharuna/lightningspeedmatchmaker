<x-app-layout>
    <x-admin-panel>
        <div class="container">
            <form action="{{ route('sub.update', $sub) }}" class="row g-3 align-items-center">
                <div class="col-md-4">
                    <label for="subscription_type" class="form-label">Subscription Name</label>
                    <input type="text" class="form-control" id="subscription_type" name="subscription_type" placeholder="Annual Plan">
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" class="description"
                        placeholder="This plan last for one (1) year">
                </div>
                <div class="col-md-2">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <div class="input-group-text">$</div>
                        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="100">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </x-admin-panel>
</x-app-layout>
