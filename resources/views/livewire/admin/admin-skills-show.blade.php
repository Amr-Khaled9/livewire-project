<div>

    <!-- Modal -->
    <div class="modal fade" id="show" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Show Skill</h5>
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
                            <input wire:model.live="name" type="text" class="form-control" placeholder="Name"
                                value="" readonly>
                        </div>

                        <!-- Progress -->
                        <div class="mb-3">
                            <label class="form-label">Progress</label>
                            <input wire:model.live="progress" type="number" class="form-control"
                                placeholder="Progress" value="" readonly>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>



                    </div>

                </form>
            </div>
        </div>
    </div>
</div>