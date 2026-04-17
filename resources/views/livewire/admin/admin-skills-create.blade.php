<x-create-model title="Add New Skill">

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model.defer="name" type="text" class="form-control" placeholder="Name">
        @include('admin.error' , ['property' => 'name'])
    </div>

    <!-- Progress -->
    <div class="mb-3">
        <label class="form-label">Progress</label>
        <input wire:model.defer="progress" type="number" class="form-control" placeholder="Progress">
        @include('admin.error' , ['property' => 'progress'])
    </div>
</x-create-model>
