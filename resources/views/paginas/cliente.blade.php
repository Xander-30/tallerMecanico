@extends("plantilla")

@section('content')
<div class="content-wrapper" style="min-height: 247px;">

	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Clientes</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
					   
						<li class="breadcrumb-item active">Clientes</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		
		<div class="container-fluid">
			
			<div class="row">
				
				<div class="col-12">

					<div class="card card-warning card-outline">
						
						<div class="card-header">
							
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#crearCliente">Crear nuevo Cliente</button>
						
						</div>
                        {{-- <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 500px;">
								<input type="text" name="table_search" class="form-control float-center" placeholder="Search">
								<div class="input-group-append">
									<button type="submit" class="btn btn-default">
										<i class="fas fa-search"></i>
									</button>
								</div>
							</div>
                        </div>  --}}

						<div class="card-body">
						  
							
						   <div>
								<table class="table table-bordered table-striped dt-responsive" width="100%" id="TablaClientes">
									<thead class="thead-dark">
										<tr>
											<th scope="col">#</th>
											<th scope="col">Cedula</th>
											<th scope="col">Nombres</th>
											<th scope="col">Apellidos</th>
											<th scope="col">Sexo</th>
											<th scope="col">Telefono</th>
											<th scope="col">Direccion</th>
											<th scope="col">Email</th>
											<th scope="col">Acciones</th>
										</tr>
									</thead>
									<tbody>
										
										 {{--@foreach($clientes as $client ) --}}
										 @foreach ($clientes as $key => $client)
										 
										
											<tr>
												
												<td>{{ $key+1 }}</td>
												<td>{{ $client->identification_card }}</td>
												<td>{{ $client->name}}</td>
												<td>{{ $client->last_name }}</td>
												<td>{{ $client->genero->name }}</td>
												<td>{{ $client->phone }}</td>
												<td>{{ $client->direction }}</td>
												<td>{{ $client->email }}</td>
												
												<td>
													<div class="btn-group">
														<a href="#edit{{$client->id}}" class="btn btn-warning btn-sm" data-toggle="modal">
															<i class="fas fa-pencil-alt text-white"></i>
														</a> 
                                                    <!--eliminando registro por ajax-->
                                                    <button class = "btn btn-danger btn-sm eliminarRegistro" action ="{{route('paginas.cliente.destroy',$client->id)}}" method="DELETE"  pagina="clientes">
													    @csrf 
														<i class="fas fa-trash-alt"></i>
													</button>
													
														{{--eliminar un registro directamente}}

														{{-- <form action="{{route('paginas.cliente.destroy',$client->id)}}" method="post">
															@method("DELETE")
															@csrf
															<button type="submit" class="btn btn-danger btn-sm">
															<i class="fas fa-trash-alt"></i>
															</button>
														</form>   --}}

													</div>
													@include('edit')
												</td>
											</tr>
										@endforeach    
									</tbody>
								</table>
							{{-- {{$clientes->links()}} --}}
						   </div>
						</div>
							
						<div class="card-footer">
							Footer
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>

</div>


<!--====================
	  Crear Cliente---modal
=======================-->

<div class="modal" id="crearCliente">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
		   
			<form method="POST" action="{{ route('paginas.cliente.store') }}">   
				@csrf
				<div class="modal-header bg-info">
					<h4 class="modal-title">Crear Cliente</h4>
					<button  type="button" class="close" data-dismiss="modal">&times;</button>
				</div>  

				<div class="modal-body">


					<div class="input-group mb-3">
						<!--Cedula-->
					
						<div class="input-group-append input-group-text">
						   <i class="fas fa-id-card"> </i>
						</div>

						<input id="identification_card" type="number" class="form-control @error('identification_card') is-invalid @enderror" name="identification_card" value="{{ old('identification_card') }}"  placeholder="Ingrese su cedula[0-9]"  pattern="[0-9]+" autofocus>

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

						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Ingrese sus nombres" autofocus>

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

						<input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  placeholder="Ingrese sus apellidos"autofocus>

						@error('last_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
					   @enderror
					
					</div>
					<div class="input-group mb-3">
						<!--Sexo-->
						<label>Sexo</label>
						   <select name="id_genders" id="genero" class="custom-select">
							 
							   @foreach ($generos as $genero)
							        
									<option value="{{$genero->id}}" 
									@if($genero->id == old('id_genders',$client->id_genders))
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

						<input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  placeholder="Ingrese su telefono"autofocus>
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

						<input id="direction" type="text" class="form-control @error('direction') is-invalid @enderror" name="direction" value="{{ old('direction') }}"  placeholder="Ingrese la direccion" autofocus>

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

						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ingrese el correo" >

							@error('email')
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
			</form>
			</div>
	
		</div>

	</div>
 

<!--se valida si ahi errores y no se cerrara el modal mientras existan-->
	 @if($errors->any())
    <script>
        $('#crearCliente').modal('show');
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



@endsection
