<x-create-model title="Add New Service">

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

    <!-- Description -->
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea wire:model.defer="description" class="form-control" placeholder="Service Description"></textarea>
        @include('admin.error' , ['property' => 'description'])
    </div>

</x-create-model>