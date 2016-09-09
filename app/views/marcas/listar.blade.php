@extends('index')
@include('marcas.crear')

@section('contenedor')
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	  <div class="modal-dialog modal-lg">
	  	@yield('ventanaModal')
	  </div>
</div>
<button id="modal" type="button" class="btn btn-primary width" data-toggle="modal" data-target=".bs-example-modal-lg">Ingresar marca</button>

<table id="dynamic-table" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th class="text-center">DESCRIPCION</th>
				<th class="text-center">ESTADO</th>
				<th class="text-center">ACCION</th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($marca as $marcas)
				@if($marcas->estado_id == 1)	
					<tr>
						<td class="text-center">{{$marcas->descripcion}}</td>																									
						<td class="text-center"><span class="label label-sm label-primary width-30">{{$marcas->estado->descripcion}} </span></td>
						<td class="text-center width-20">
							<a href="marcas/editar/{{$marcas->id}}" class="btn btn-xs btn-primary">
								<i class="ace-icon fa fa-pencil bigger-120"></i>
							</a>
							<a href="marcas/eliminar/{{$marcas->id}}" class="btn btn-xs btn-danger">
								<i class="ace-icon fa fa-trash-o bigger-120"></i>
							</a>
													
					</tr>
				@else
					<tr>
						<td class="text-center">{{$marcas->descripcion}}</td>																									
						<td class="text-center"><span class="label label-sm label-danger width-30">{{$marcas->estado->descripcion}}</span></td>
						<td class="text-center">
							<a href="marcas/editar/{{$marcas->id}}" class="btn btn-xs btn-primary">
								<i class="ace-icon fa fa-pencil bigger-120"></i>
							</a>
							<a href="marcas/habilitar/{{$marcas->id}}" class="btn btn-xs btn-success">
								<i class="ace-icon fa fa-check bigger-120"></i>
							</a>
													
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