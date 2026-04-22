<x-edit-model title="Edit Project">

    <!-- Name -->
    <div class="mb-3">
        <label class="form-label">Project Name</label>
        <input wire:model.defer="name" type="text" class="form-control" placeholder="Project Name">
        @include('admin.error' , ['property' => 'name'])
    </div>

    <!-- Link -->
    <div class="mb-3">
        <label class="form-label">Project Link</label>
        <input wire:model.defer="link" type="text" class="form-control" placeholder="https://example.com">
        @include('admin.error' , ['property' => 'link'])
    </div>

    <!-- Image -->
    <div class="mb-3">
        <label class="form-label">Project Image</label>
        <input wire:model="newImage" type="file" class="form-control">

        @include('admin.error' , ['property' => 'newImage'])

        <!-- 🖼️ New Image Preview -->
        @if ($newImage)
        <div class="mt-2">
            <p class="text-muted">New Image:</p>
            <img src="{{ $newImage->temporaryUrl() }}" width="120" style="border-radius: 8px; object-fit: cover;">
        </div>

        <!-- 🖼️ Old Image -->
        @elseif($oldImage)
        <div class="mt-2">
            <p class="text-muted">Current Image:</p>
            <img src="{{ asset('storage/' . $oldImage) }}" width="120" style="border-radius: 8px; object-fit: cover;">
        </div>
        @endif
    </div>

    <!-- Description -->
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea wire:model.defer="description" class="form-control" rows="4"
            placeholder="Project Description"></textarea>
        @include('admin.error' , ['property' => 'description'])
    </div>

    <!-- Category -->
    <div class="mb-3">
        <label class="form-label">Category</label>
        <select wire:model.defer="category_id" class="form-control">
            <option value="">Select Category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
            @endforeach
        </select>
        @include('admin.error' , ['property' => 'category_id'])
    </div>

</x-edit-model>