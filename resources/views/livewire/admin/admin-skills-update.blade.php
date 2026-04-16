<div>

    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit Skill</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if(session('success'))
                <div class="alert alert-primary" id="success-alert">
                    {{ session('success') }}
                </div>
                @endif
                <form wire:submit.prevent="save">

                    <div class="modal-body">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input wire:model.defer="skill.name" type="text" class="form-control" placeholder="Name"
                                value="">

                            @error('skill.name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Progress -->
                        <div class="mb-3">
                            <label class="form-label">Progress</label>
                            <input wire:model.defer="skill.progress" type="number" class="form-control"
                                placeholder="Progress" value="">

                            @error('skill.progress')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>

                        <!-- Submit Button with Loading -->
                        <button type="submit" class="btn btn-primary d-flex align-items-center gap-2">

                            <span wire:loading.remove>
                                Submit
                            </span>

                            <span wire:loading wire:target="save">
                                <span class="spinner-border spinner-border-sm"></span>
                                Loading...
                            </span>

                        </button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>