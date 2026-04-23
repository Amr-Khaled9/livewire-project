<form wire:submit.prevent="save">
    <div class="position-relative w-100 mt-3">

        <input wire:model="email" class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
            placeholder="Enter Your Email" style="height: 48px;">

        <!-- Error -->
        @error('email')
        <small class="text-danger ps-4">{{ $message }}</small>
        @enderror

        <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
            <i class="fa fa-paper-plane text-primary fs-4"></i>
        </button>

    </div>

    <!-- Success Message -->
    @if (session()->has('success'))
    <div class="text-dark mt-2 ps-4">
        {{ session('success') }}
    </div>
    @endif
    <span wire:loading>
        <i class="fa fa-spinner fa-spin"></i>
    </span>
</form>