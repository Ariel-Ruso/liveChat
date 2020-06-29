<div>
    <div class="form-group">
        <label for="nombre">
            Nombre
        </label>
        <input type="text" class="form-control" id="nombre" wire:model= "nombre">
        </input>
        @error("nombre")
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

    <div class="form-group">
        <label for="mensaje">
            Nombre
        </label>
        <input type="text" class="form-control" id="mensaje" wire:model= "mensaje">
        </input>
        @error("mensaje")
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <button class="btn btn-primary" wire:click= "enviarMensaje">
        Enviar Mensaje
    </button>

    <!-- mensajes d alerta -->
    
    <div style="position: absolute;"
        class="alert alert-success collapse mt-3"
        role="alert"
        id="avisoSuccess">
        Se envio
    </div>

    <script>
        //recibimo en js cdo emite el comp livewire
        //evento mjeEnviado
        window.livewire.on('mjeEnviado', function(){
            //muestro aviso
            $("#avisoSuccess").fadeIn("slow");

            //en 3 seg desaparece
            setTimeout(function(){ $("#avisoSuccess").fadeOut("slow"); }, 3000);

        });
         
    </script>




</div>
