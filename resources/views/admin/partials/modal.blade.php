<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">Reset Antrian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            {{ $modalBody }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                @if (!$isAll)
                    <button type="button" class="btn btn-primary" onclick="resetAntrian('{{ $category }}', '{{ $type }}')">Reset</button> 
                @else
                    <button type="button" class="btn btn-primary" onclick="resetAllAntrian()">Reset</button>
                @endif
            </div>
        </div>
    </div>
</div>