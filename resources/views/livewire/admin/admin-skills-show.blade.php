<x-show-model title="Show Skill">
    <!-- Name -->
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model.live="name" type="text" class="form-control" placeholder="Name" value="" readonly>
    </div>

    <!-- Progress -->
    <div class="mb-3">
        <label class="form-label">Progress</label>
        <input wire:model.live="progress" type="number" class="form-control" placeholder="Progress" value="" readonly>

    </div>
</x-show-model>


