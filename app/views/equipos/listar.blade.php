@extends('index')
@section('contenedor')
<a href="equipos/ingresar" class="btn btn-primary width">Ingresar equipo</a>

<table id="dynamic-table" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th class="text-center">NUMERO SERIAL</th>
				<th class="text-center">COLOR</th>
				<th class="text-center">ELEMENTOS EXTRA</th>
				<th class="text-center">MARCA</th>
				<th class="text-center">PERSONA</th>
				<th class="text-center">ESTADO</th>
				<th class="text-center">ACCIONES</th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($equipo as $equipos)
				@if($equipos->estado_id == 1)	
					<tr>
						<td class="text-center">{{$equipos->numero_serial}}</td>													
						<td class="text-center">{{ucwords($equipos->color)}}</td>													
						<td class="text-center">{{ucwords($equipos->elementos_ex)}}</td>													
						<td class="text-center">{{ucwords($equipos->marca->descripcion)}}</td>													
						<td class="text-center">{{ucwords($equipos->persona->primer_nombre.' '.$equipos->persona->segundo_nombre.' '.$equipos->persona->primer_apellido.' '.$equipos->persona->segundo_apellido)}}</td>	
						<td class="text-center"><span class="label label-sm label-primary width-100">{{$equipos->estado->descripcion}}</span></td>
						<td class="text-center">
							<a href="equipos/editar/{{$equipos->id}}" class="btn btn-xs btn-primary">
								<i class="ace-icon fa fa-pencil bigger-120"></i>
							</a>
							<a href="equipos/inhabilitar/{{$equipos->id}}" class="btn btn-xs btn-danger">
								<i class="ace-icon fa fa-times bigger-130" aria-hidden="true"></i>
							</a>
						</td>											
					</tr>
				@else
					<tr>
						<td class="text-center">{{$equipos->numero_serial}}</td>													
						<td class="text-center">{{ucwords($equipos->color)}}</td>													
						<td class="text-center">{{ucwords($equipos->elementos_ex)}}</td>													
						<td class="text-center">{{ucwords($equipos->marca->descripcion)}}</td>													
						<td class="text-center">{{ucwords($equipos->persona->primer_nombre.' '.$equipos->persona->segundo_nombre.' '.$equipos->persona->primer_apellido.' '.$equipos->persona->segundo_apellido)}}</td>	
						<td class="text-center"><span class="label label-sm label-danger width-100">{{$equipos->estado->descripcion}}</span></td>
						<td class="text-center">
							<a href="equipos/editar/{{$equipos->id}}" class="btn btn-xs btn-primary">
								<i class="ace-icon fa fa-pencil bigger-120"></i>
							</a>
							<a href="equipos/habilitar/{{$equipos->id}}" class="btn btn-xs btn-success">
								<i class="ace-icon fa fa-check bigger-100"></i>
							</a>
						</td>											
					</tr>
				@endif
			@endforeach	
		</tbody>
</table>

<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="assets/js/dataTables.buttons.min.js"></script>
<script src="assets/js/buttons.flash.min.js"></script>
<script src="assets/js/buttons.html5.min.js"></script>
<script src="assets/js/buttons.print.min.js"></script>
<script src="assets/js/buttons.colVis.min.js"></script>
<script src="assets/js/dataTables.select.min.js"></script>

<script type="text/javascript">
			$(function($){
				var myTable = $('#dynamic-table').DataTable({});
			})
</script>
@stop