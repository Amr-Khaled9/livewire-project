<div>
    <form id="formAuthentication" class="mb-3" wire:submit.prevent="login">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input wire:model.live="email" type="text" class="form-control" id="email" name="email"
                placeholder="Enter your email" autofocus />
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="input-group input-group-merge">
                <input wire:model.live="password" type="password" id="password" class="form-control" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                @error('password')
                    <small class="text-danger">{{ $password }}</small>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input wire:model.live="remember" class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
                @error('remember')
                    <small class="text-danger">{{ $remember }}</small>
                @enderror
            </div>
        </div>
        <button wire:loading.attr="disabled" class="btn btn-primary d-grid w-100" type="submit">
            <span wire:loading.remove>
                Sign in
            </span>
            <span wire:loading>
                <span class="spinner-border spinner-border-sm me-2"></span>
                Loading...
            </span>
        </button>
    </form>
</div>