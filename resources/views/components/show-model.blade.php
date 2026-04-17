<div>
    <!-- Modal -->
    <div class="modal fade" id="show" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if(session('success'))
                <div class="alert alert-primary" id="success-alert">
                    {{ session('success') }}
                </div>
                @endif
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        {{$slot}}
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