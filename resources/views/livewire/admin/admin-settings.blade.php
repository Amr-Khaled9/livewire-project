<div class="card">
    @if(session('success'))
    <div class="alert alert-primary" id="success-alert" >
        {{ session('success') }}
    </div>
@endif
    <div class="card-header">
        <h4>Settings</h4>
    </div>

    <div class="card-body">

        <form wire:submit.prevent="store">

            {{-- Name --}}
            <div class="mb-3">
                <label class="form-label">Name</label>

                <input type="text" class="form-control" maxlength="20" wire:model.live="settings.name">

                @error('settings.name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Address --}}
            <div class="mb-3">
                <label class="form-label">Address</label>

                <input type="text" class="form-control" wire:model.live="settings.address">

                @error('settings.address')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label class="form-label">Email</label>

                <input type="email" class="form-control" wire:model.live="settings.email">

                @error('settings.email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Phone --}}
            <div class="mb-3">
                <label class="form-label">Phone</label>

                <input type="text" class="form-control" maxlength="20" wire:model.live="settings.phone">

                @error('settings.phone')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Facebook --}}
            <div class="mb-3">
                <label class="form-label">Facebook</label>

                <input type="text" class="form-control" wire:model.live="settings.facebook">

                @error('settings.facebook')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Twitter --}}
            <div class="mb-3">
                <label class="form-label">Twitter</label>

                <input type="text" class="form-control" wire:model.live="settings.twitter">

                @error('settings.twitter')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- LinkedIn --}}
            <div class="mb-3">
                <label class="form-label">LinkedIn</label>

                <input type="text" class="form-control" wire:model.live="settings.linkedin">

                @error('settings.linkedin')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Instagram --}}
            <div class="mb-3">
                <label class="form-label">Instagram</label>

                <input type="text" class="form-control" wire:model.live="settings.instagram">

                @error('settings.instagram')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Submit --}}
            <div class="text-end">
                <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="store">

                    <span wire:loading.remove wire:target="store">
                        Save Settings
                    </span>

                    <span wire:loading wire:target="store">
                        Saving...
                    </span>

                </button>
            </div>

        </form>

    </div>
</div>