<x-edit-model title="Edit Service">

    <!-- Name -->
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model.defer="name" type="text" class="form-control" placeholder="Name">

        @include('admin.error' , ['property' => 'name'])
    </div>

    <!-- Icon -->
    <div class="mb-3">
        <label class="form-label">Icon</label>
        <input wire:model.defer="icon" type="text" class="form-control" placeholder="e.g. bx bx-bar-chart-alt-2">

        @include('admin.error' , ['property' => 'icon'])
    </div>

    <!-- Count -->
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input wire:model.defer="description" type="text" class="form-control" placeholder="description">

        @include('admin.error' , ['property' => 'description'])
    </div>

</x-edit-model>