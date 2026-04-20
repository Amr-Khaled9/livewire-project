<div class="mb-3">
    <br>
    @livewire('admin.admin-messages-delete')

    <div>
        <div class="mb-3">
            <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
        </div>
        <div class="col-lg-4 col-md-6">
        </div>
        <div class="table-responsive text-nowrap">
            @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width="45%">Name</th>
                        <th width="45%">email</th>
                        <th width="45%">subject</th>
                        <th width="45%">status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $record)
                    <tr>
                        <td><strong>{{ $record->name }}</strong></td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->subject }}</td>
                        <td>
                            @if($record->status == 1)
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Not Active</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <a href="#" class="btn btn-sm btn-outline-info" id="#show"
                                    wire:click.prevent="$dispatch('skillShow', { id: {{ $record->id }} })">
                                    <i class="bx bx-show"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-danger" id="#delete"
                                    wire:click.prevent="$dispatch('skillDelete', { id: {{ $record->id }} })">
                                    <i class="bx bx-trash"></i>
                                </a>
                                @livewire('admin.admin-messages-show')

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