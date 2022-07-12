<div>
    <div class="row justify-content-evenly">
        <div class="col-12 col-md-6 form-floating mb-4">
            <input type="text" class="form-control" wire:model.defer="nombre" placeholder="Nombres">
            <label for="floatingInput">Nombres</label>
            @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-12 col-md-6 form-floating mb-4">
            <input type="text" class="form-control" wire:model.defer="apellido" placeholder="Apellidos">
            <label for="floatingInput">Apellidos</label>
            @error('apellido') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
                            
        <div class="col-12 col-md-6 form-floating mb-4">
            <input type="text" class="form-control" wire:model.defer="telefono" placeholder="Teléfono">
            <label for="floatingInput">Teléfono</label>
            @error('telefono') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-12 col-md-6 form-floating mb-4">
            <input type="email" class="form-control" wire:model.defer="correo" placeholder="Email">
            <label for="floatingInput">Email</label>
            @error('correo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-12 form-floating mb-4">
            <textarea  rows="10" class="form-control" wire:model.defer="mensaje" placeholder="Mensaje" style="resize: none"></textarea>
            <label for="floatingInput">Mensaje</label>
            @error('mensaje') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <button wire:click="sendMessage" class="btn_gral mt-4">Enviar</button>
</div>
