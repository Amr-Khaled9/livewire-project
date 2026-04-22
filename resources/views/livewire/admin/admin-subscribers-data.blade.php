<div class="mb-3">
    @livewire('admin.admin-subscribers-delete')

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
                        {{-- <th width="45%">Progress</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $record)
                    <tr>
                        <td>
                            <strong>{{ $record->email }}</strong>
                        </td>
                        {{-- <td>{{ $record->progress }}</td> --}}
                        <td>
                            <div class="d-flex align-items-center gap-2">
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