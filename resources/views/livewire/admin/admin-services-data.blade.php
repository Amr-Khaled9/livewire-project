<div class="mb-3">
    <br>
    @livewire('admin.admin-services-delete')

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
                {{-- Create Skill --}}
                @livewire('admin.admin-services-create')
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width="45%">Name</th>
                        <th width="45%">Icon</th>
                        <th width="45%">Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $record)
                    <tr>
                        <td><strong>{{ $record->name }}</strong></td>
                        <td> <i class="{{ $record->icon }} text-secondary mb-3"></i></td>
                        <td>{{ $record->description }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <a class="btn btn-sm btn-outline-primary" id="#edit"
                                    wire:click.prevent="$dispatch('skillUpdate', { id: {{ $record->id }} })">
                                    <i class="bx bx-edit-alt"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" id="#delete"
                                    wire:click.prevent="$dispatch('skillDelete', { id: {{ $record->id }} })">
                                    <i class="bx bx-trash"></i>
                                </a>
                                @livewire('admin.admin-services-update')

                                <a href="#" class="btn btn-sm btn-outline-info" id="#show"
                                    wire:click.prevent="$dispatch('skillShow', { id: {{ $record->id }} })">
                                    <i class="bx bx-show"></i>
                                </a>
                                @livewire('admin.admin-services-show')
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