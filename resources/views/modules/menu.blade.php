<li class="nav-item">
	<a href = "{{url("/")}}" class="nav-link">
		<i class="fas fa-house-user"></i>
		<p>Dashboard</p>
	</a> 

</li>
<li class="nav-item">
{{-- 	<a href = "{{ url("/clientes") }}" class="nav-link"> --}}
	<a href = "{{ route('paginas.cliente.index') }}" class="nav-link">	
		<i class="fas fa-user-tie"></i>
		<p>Clientes</p>
	</a> 

</li>

<li class="nav-item">
	<a href = "{{route('paginas.producto.index')}}" class="nav-link">
		<i class="nav-icon fas fa-edit"></i>
		<p>Inventario</p>
	</a> 

</li>

<li class="nav-item">
	<a href = "{{route('paginas.facturacion')}}" class="nav-link">
		<i class="fas fa-file-invoice"></i>
		<p>Facturacion</p>
	</a> 

</li>

<li class="nav-item">
	<a href="{{url('/')}}" class="nav-link">
		<i class="fas fa-sticky-note"></i>
		<p>
			Consultas
			<i class="right fas fa-angle-left"></i>
		</p>
	</a>

	<ul class="nav nav-treeview">
		<li class="nav-item">
			<a href="{{ route('paginas.consultacliente')}}" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Consulta de clientes</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('paginas.consultaproducto')}}" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Consulta de Productos</p>
			</a>
		</li>
		
	</ul>
</li>

<li class="nav-item">
	<a href="{{url('/')}}" class="nav-link">
		<i class="fas fa-poll"></i>
		<p>
			Reportes
			<i class="right fas fa-angle-left"></i>
		</p>
	</a>

	<ul class="nav nav-treeview">
		<li class="nav-item">
			<a href="{{ route ('paginas.reportecliente')}}" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Reporte de clientes</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('paginas.reporteproductos')}}" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Reporte de Productos</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('paginas.reporteventas')}}" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Reporte de ventas</p>
			</a>
		</li>
	</ul>
</li>



<li class="nav-item">
	<a href="{{url('/')}}" class="nav-link">
		<i class="fas fa-money-bill-wave"></i>
		<p>
			Utilidades
			<i class="right fas fa-angle-left"></i>
		</p>
	</a>

	<ul class="nav nav-treeview">
		
		<li class="nav-item">
			<a href="{{ route('paginas.utilidadmensual')}}" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Utilidad Mensual</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{ route('paginas.utilidadanual') }}" class="nav-link">
				<i class="far fa-circle nav-icon"></i>
				<p>Utilidad Anual</p>
			</a>
		</li>
	</ul>
</li>

<li class="nav-item">
	<a href = "{{url('/')}}" class="nav-link">
		<i class="fas fa-sign-out-alt"></i>
		<p>Salir</p>
	</a> 

</li>

