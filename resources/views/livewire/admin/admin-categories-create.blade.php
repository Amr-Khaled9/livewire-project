<x-create-model title="Add New Counter">

    <!-- Name -->
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model.defer="name" type="text" class="form-control" placeholder="Name">
        @include('admin.error' , ['property' => 'name'])
    </div>

</x-create-model>