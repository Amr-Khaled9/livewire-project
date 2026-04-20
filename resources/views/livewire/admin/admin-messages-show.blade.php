<x-show-model title="Show Skill">
    <!-- Name -->
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model.live="name" type="text" class="form-control" readonly>
    </div>

    <!-- email -->
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input wire:model.live="email" type="email" class="form-control" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea wire:model.live="message" class="form-control" rows="4" readonly></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Status</label><br>

        @if($status == 1)
        <span class="badge bg-success">Active</span>
        @else
        <span class="badge bg-danger">Inactive</span>
        @endif
    </div>
</x-show-model>