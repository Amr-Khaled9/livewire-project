<div>
    @if(session('success'))
    <div class="alert alert-primary" id="success-alert">
        {{ session('success') }}
    </div>
    @endif
    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="delete">
                    <div class="modal-body">
                        <div>
                            Are you sure you want to delete this record ?
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