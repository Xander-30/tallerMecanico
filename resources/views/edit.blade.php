    <!--====================
      Editar Cliente---modal
    =======================-->
   
    <div class="modal fade" id="edit{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header bg-info">
            <h5 class="modal-title" id="exampleModalLabel">EditarCliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('paginas.cliente.update',$client->id)}}" method="POST"> 
            @method('PATCH')
            @csrf
            
            <div class="input-group mb-3">
                 <!--Cedula-->
         
               <div class="input-group-append input-group-text">
                 <i class="fas fa-id-card"> </i>
               </div>
                
                <input id="identification_card" type="text" class="form-control @error('identification_card') is-invalid @enderror" name="identification_card" value="{{ old('identification_card', $client->identification_card) }}" required autocomplete="identification_card" placeholder="Ingrese su cedula"autofocus>

                @error('identification_card')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

        <div class="input-group mb-3">
            <!--Nombres-->
            
            <div class="input-group-append input-group-text">
                <i class="fas fa-user"> </i>
            </div>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $client->name) }}" required autocomplete="name" placeholder="Ingrese sus nombres" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>

        <div class="input-group mb-3">
            <!--Apellidos-->
            
            <div class="input-group-append input-group-text">
                <i class="fas fa-user-plus"> </i>
            </div>

            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name', $client->last_name) }}" required autocomplete="last_name" placeholder="Ingrese sus apellidos"autofocus>

            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>
        <div class="input-group mb-3">
            <!--Sexo-->
            <label>Sexo</label>
            <select name="id_genders" class="custom-select">
                
               <option disabled>Seleccione</option>
                @foreach ($generos as $genero)
                    <option value="{{$genero->id }}" 
                        @if($genero->id == old('id_genders', $client->id_genders))
                        selected 
                        @endif >{{$genero->name.'-'.$genero->description}}
                    </option>
                @endforeach
            </select>
            
        </div>

        <div class="input-group mb-3">
            <!--Telefono-->
            
            <div class="input-group-append input-group-text">
                <i class="fas fa-phone"></i>
            </div>

            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $client->phone) }}" required autocomplete="phone" placeholder="Ingrese su telefono"autofocus>
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>

        <div class="input-group mb-3">
            <!--Direccion-->
            
            <div class="input-group-append input-group-text">
                <i class="fas fa-home"> </i>
            </div>

            <input id="direction" type="text" class="form-control @error('direction') is-invalid @enderror" name="direction" value="{{ old('direction', $client->direction) }}" required autocomplete="direction" placeholder="Ingrese la direccion" autofocus>

            @error('direction')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>

        <div class="input-group mb-3">
            <!--Email-->
            
            <div class="input-group-append input-group-text">
                <i class="fas fa-envelope-square"> </i>
            </div>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $client->email) }}" placeholder="Ingrese el correo" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>
                     
        </div>
         
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
         
          </div>
        </div>
        </form> 
      </div>
    </div>

