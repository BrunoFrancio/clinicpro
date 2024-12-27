<div class="c-event-modal modal fade" id="{{ $modalId }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md c-event-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">{{ $title }}</h6>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
                    <img src="{{ asset('img/svg/x.svg') }}" alt="Fechar" class="svg">
                </button>
            </div>
            <div class="modal-body">
                <div class="c-event-form">
                    {{ $slot }}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary btn-sm">Salvar</button>
            </div>
        </div>
    </div>
</div>
