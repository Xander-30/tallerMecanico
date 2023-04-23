<!--====================
      Editar Producto---modal
    =======================-->
   
    <div class="modal fade" id="edit{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header bg-info">
            <h5 class="modal-title" id="exampleModalLabel">EditarProducto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('paginas.producto.update',$producto->id)}}" method="POST"> 
            @method('PATCH')
            @csrf
            
            
				<div class="input-group mb-3">
						<!--Producto-nombre-->
					
					<div class="input-group-append input-group-text">
						<i class="fas fa-th"> </i>
					</div>

					<input id="nameproduct" type="text" class="form-control @error('nameproduct') is-invalid @enderror" name="nameproduct" value="{{ old('nameproduct', $producto->nameproduct) }}"  placeholder="Ingrese el nombre del producto"  autofocus>

					@error('nameproduct')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					
				</div>
            
            <div class="input-group mb-3">
						<!--Descripcion-->
					
				<div class="input-group-append input-group-text">
					<i class="fas fa-sticky-note"> </i>
				</div>

				<input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description',$producto->description) }}" placeholder="Ingrese la descripcion" autofocus>

					@error('description')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					
			</div>
            
           <div class="input-group mb-3">
						<!--Precio-->
					
				<div class="input-group-append input-group-text">
					<i class="fas fa-dollar-sign"> </i>
				</div>

				<input id="price" type="number"  step="any" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price',$producto->price) }}"  placeholder="Ingrese el precio" pattern="[00.0]+"autofocus>

					@error('price')
						<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
						</span>
					@enderror
					
			</div>  
            
           <div class="input-group mb-3">
						<!--Stock-->
					
              <div class="input-group-append input-group-text">
                 <i class="fas fa-th"></i>
              </div>

              <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock',$producto->stock) }}"  placeholder="Ingrese el stock"autofocus>
                @error('stock')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
					
			</div>
            
           <div class="input-group mb-3">
                <!--Proveedor-->
            
                <div class="input-group-append input-group-text">
                    <i class="fas fa-truck-moving"> </i>
                </div>

                <input id="supplier" type="text" class="form-control @error('supplier') is-invalid @enderror" name="supplier" value="{{ old('supplier',$producto->supplier) }}"  placeholder="Ingrese el proveedor" autofocus>

                @error('supplier')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
            </div>
        
            <div class="input-group mb-3">
                <!--Telefono-->
            
                <div class="input-group-append input-group-text">
                    <i class="fas fa-phone"></i>
                </div>

                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone',$producto->phone) }}"  placeholder="Ingrese el telefono"autofocus>
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

                <input id="direction" type="text" class="form-control @error('direction') is-invalid @enderror" name="direction" value="{{ old('direction',$producto->direction) }}"  placeholder="Ingrese la direccion del proveedor" autofocus>

                @error('direction')
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

