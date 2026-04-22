<x-edit-model title="Edit Counter">

    <!-- Name -->
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model.defer="name" type="text" class="form-control" placeholder="Name">

        @include('admin.error' , ['property' => 'name'])
    </div>

</x-edit-model>