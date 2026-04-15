<div class="card">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <div class="mb-3">

                <h5 class=" fw-semibold mb-2">Skills</h5>
                <div class="col-lg-4 col-md-6">
                    <div class="mt-3">
                        <button type="button" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal"
                            data-bs-target="#create">
                            Add New
                        </button>
                        {{-- Create Skill --}}
                        @livewire('admin.admin-skills-create')
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <br>
                <div>
                    <div class="mb-3">
                        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
                    </div>

                    <div class="table-responsive text-nowrap">
                        @if (count($data) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="45%">Name</th>
                                    <th width="45%">Progress</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($data as $record)
                                <tr>
                                    <td>
                                        <strong>{{ $record->name }}</strong>
                                    </td>
                                    <td>{{ $record->progress }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">

                                            <a href="#" class="btn btn-sm btn-outline-primary"
                                                wire:click.prevent="$dispatch('skillUpdate', { id: {{ $record->id }} })">
                                                <i class="bx bx-edit-alt"></i>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-outline-danger"
                                                wire:click.prevent="$dispatch('skillDelete', { id: {{ $record->id }} })">
                                                <i class="bx bx-trash"></i>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-outline-info"
                                                wire:click.prevent="$dispatch('skillShow', { id: {{ $record->id }} })">
                                                <i class="bx bx-show"></i>
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

        </div>

    </div>
</div>