<x-edit-model title="Edit Skill">
    <!-- Name -->
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model.defer="skill.name" type="text" class="form-control" placeholder="Name" value="">

        @include('admin.error' , ['property' => 'skill.name'])

    </div>

    <!-- Progress -->
    <div class="mb-3">
        <label class="form-label">Progress</label>
        <input wire:model.defer="skill.progress" type="number" class="form-control" placeholder="Progress" value="">

        @include('admin.error' , ['property' => 'skill.progress'])

    </div>
</x-edit-model>