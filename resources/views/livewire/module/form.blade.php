@include('common.modalHead')

<div class="row">
    <div class="col-sm-12">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                </span>
            </span>
            <input type="text" wire:model.lazy="name" class="form-control" placeholder="Nombre del Módulo">
        </div>
        @error('name')
            <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-sm-12 mt-3">
        <input type="text" wire:model.lazy="description" class="form-control" placeholder="Descripción del Módulo">
        @error('description')
            <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>
</div>

@include('common.modalFooter')