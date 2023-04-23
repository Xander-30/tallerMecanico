@extends("plantilla")

@section('content')
<div class="content-wrapper" style="min-height: 1542.4px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                       
                        <li class="breadcrumb-item active">Productos</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
	
    @if(session('status'))
		<div class="status">
			{{ session('status') }}
		</div>
    @endif

    <section class="content">
        
        <div class="container-fluid">
            
            <div class="row">
                
                <div class="col-12">

                    <div class="card card-warning card-outline">
                        
                        <div class="card-header">
                            
                            <button class = "btn btn-primary btn-sm" data-toggle="modal" data-target="#crearProducto">Crear nuevo producto</button>
                           
                        
                        </div>
                        
                        <div class="card-body">
                            
                            <div>
                                <table class= "table table-bordered table-striped" width="100%" id="TablaProductos">
                            
                                    <thead class= "thead-dark">

                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Producto</th>
                                                <th scope="col">Descripcion </th>
                                                <th scope="col">Precio $ </th>
                                                <th scope="col">Stock </th>
                                                <th scope="col">Proveedor </th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">Direccion </th>
                                                <th scope="col">Acciones</th>
                                                
                                            </tr>
                                    </thead>
                                    <tbody>
                                      
                                       @foreach ($productos  as $key => $producto )
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $producto->nameproduct }}</td>
                                                <td>{{ $producto->description }}</td>
                                                <td>{{ $producto->price }}</td>
                                                <td>{{ $producto->stock }}</td>
                                                <td>{{ $producto->supplier }}</td>
                                                <td>{{ $producto->phone }}</td>
                                                <td>{{ $producto->direction }}</td>
                                                
                                                <td> 
                                                   <div class="btn-group">
                                                        
                                                        <a href="#edit{{$producto->id }}" class="btn btn-warning btn-sm" data-toggle="modal">
														    <i class ="fas fa-pencil-alt text-white"> </i>
														</a>

													    <button class="btn btn-danger btn-sm  eliminarProducto" action="{{route('paginas.producto.destroy',$producto->id )}}" method="DELETE" pagina="producto">
                                                           <i class="fas fa-trash-alt"></i>
														   @csrf
														</button>

												   </div>
                                                   @include('editproducto')

												</td>
                                            </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if($errors->any())
						   <script>
                               $("#crearProducto").modal('show');
						  </script>
                        @endif
						
	@if (Session::has("ok-crear"))

   <script>
      notie.alert({ type: 1, text: '¡El registro ha sido creado correctamente!', time: 10 })
   </script>

   @endif	
   
   @if (Session::has("ok-editar"))

    <script>
      notie.alert({ type: 2, text: '¡El registro ha sido actualizado correctamente!', time: 10 })
    </script>

   @endif
					   
	


<!--====================
  Crear Producto---modal
=======================-->

<div class="modal" id="crearProducto">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
		 @csrf  
			<form method="POST" action="{{ route('paginas.producto.store') }}">
			 @csrf  
				<div class="modal-header bg-info">
					<h4 class="modal-title">Crear Producto</h4>
					<button  type="button" class="close" data-dismiss="modal">&times;</button>
				</div>  

				<div class="modal-body">


					<div class="input-group mb-3">
						<!--Producto-nombre-->
					
						<div class="input-group-append input-group-text">
						   <i class="fas fa-th"> </i>
						</div>

						<input id="nameproduct" type="text" class="form-control @error('nameproduct') is-invalid @enderror" name="nameproduct" value="{{ old('nameproduct') }}"  placeholder="Ingrese el nombre del producto"  autofocus>

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

						<input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="Ingrese la descripcion" autofocus>

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

						<input id="price" type="number"  step="any" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"  placeholder="Ingrese el precio" pattern="[00.0]+"autofocus>

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

						<input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}"  placeholder="Ingrese el stock"autofocus>
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

						<input id="supplier" type="text" class="form-control @error('supplier') is-invalid @enderror" name="supplier" value="{{ old('supplier') }}"  placeholder="Ingrese el proveedor" autofocus>

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

						<input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  placeholder="Ingrese el telefono"autofocus>
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

						<input id="direction" type="text" class="form-control @error('direction') is-invalid @enderror" name="direction" value="{{ old('direction') }}"  placeholder="Ingrese la direccion del proveedor" autofocus>

						@error('direction')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
					   @enderror
					
					</div>
						
				</div>

				<div class="modal-footer d-flex justify-content-between">
				<div>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
				
				<div>
					<button type="submit" id="validar" class="btn btn-primary">Guardar</button>
				</div>
				</div >
			
			</div>
	
		</div>

	</div>

       
                        <div class="card-footer">
                            Footer
                        </div>

                    </div>

                </div>
            </div>
        </div>
        @if($errors->any())
			<script>
                $("#crearProducto").modal('show');
			</script>
        @endif

    </section>
@endsection
</div>