<x-create-model title="Add New Counter">

    <!-- Name -->
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model.defer="name" type="text" class="form-control" placeholder="Name">
        @include('admin.error' , ['property' => 'name'])
    </div>

    <!-- Count -->
    <div class="mb-3">
        <label class="form-label">Count</label>
        <input wire:model.defer="count" type="number" class="form-control" placeholder="Count">
        @include('admin.error' , ['property' => 'count'])
    </div>

    <!-- Icon -->
    <div class="mb-3">
        <label class="form-label">Icon</label>
        <input wire:model.defer="icon" type="text" class="form-control" placeholder="e.g. bx bx-bar-chart-alt-2">
        @include('admin.error' , ['property' => 'icon'])
    </div>

</x-create-model>