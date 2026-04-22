<div class="mb-3">
    <br>
    @livewire('admin.admin-projects-delete')

    <div>
        <div class="mb-3">
            <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <button type="button" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal"
                    data-bs-target="#create">
                    Add New
                </button>
                {{-- Create categories --}}
                @livewire('admin.admin-projects-create')
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $record)
                    <tr>
                        <!-- ID -->
                        <td>{{ $record->id }}</td>

                        <!-- Name -->
                        <td><strong>{{ $record->name }}</strong></td>

                        <!-- Category -->
                        <td>
                            {{ $record->category->name ?? '-' }}
                        </td>

                        <!-- Link -->
                        <td>
                            @if($record->link)
                            <a href="{{ $record->link }}" target="_blank">View</a>
                            @else
                            -
                            @endif
                        </td>

                        <td>
                            @if($record->image)
                            <img src="{{ asset('storage/' . $record->image) }}" width="60" height="60"
                            style="object-fit: cover; border-radius: 8px;">
                            @else
                            <span class="text-muted">No Image</span>
                            @endif
                        </td>

                        <!-- Actions -->
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Edit --}}
                                <a class="btn btn-sm btn-outline-primary" id="#edit"
                                    wire:click.prevent="$dispatch('skillUpdate', { id: {{ $record->id }} })">
                                    <i class="bx bx-edit-alt"></i>
                                </a>
                                @livewire('admin.admin-projects-update')

                                <!-- Delete -->
                                <a class="btn btn-sm btn-outline-danger" id="#delete"
                                    wire:click.prevent="$dispatch('skillDelete', { id: {{ $record->id }} })">
                                    <i class="bx bx-trash"></i>
                                </a>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $data->links() }}
            @else
            <span class="text-danger">No results found</span>
            @endif
        </div>
 
    </div>
</div>