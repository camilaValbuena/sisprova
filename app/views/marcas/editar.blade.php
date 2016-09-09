@extends('index')

@section('contenedor')
<br>
 <table id="simple-table" class="table  table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center">Descripción</th>
			<th class="text-center">Estado</th>
			<th class="text-center col-md-1">Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		<form action="{{$marca->id}}" method="POST">
				@if($marca->estado_id == 1)	
					<tr>
						<td class="text-center width-20"><input class="form-control text-center" type="text" name="descripcion" value="{{$marca->descripcion}}"></td>	
						</td>	
						<td class="text-center width-20"><span class="label label-sm label-primary width-30">{{$marca->estado->descripcion}}</span></td>
						<td class="text-center ">
							<button class="btn btn-xs btn-success">
								<i class="ace-icon fa fa-check bigger-120"></i>
							</button>
							<a href="{{asset('marcas')}}" class="btn btn-xs btn-danger">
								<i class="ace-icon fa fa-times bigger-120" aria-hidden="true"></i>
							</a>
						</td>											
					</tr>
				@endif	
				@if($marca->estado_id == 2)
					<tr>
						<td class="text-center width-20"><input type="text" name="descripcion" class="text-center" value="{{$marca->descripcion}}"></td>
						</td>	
						<td class="text-center width-20"><span class="label label-sm label-danger width-30">{{$marca->estado->descripcion}}</span></td>
						<td class="text-center">
							<button class="btn btn-xs btn-success">
								<i class="ace-icon fa fa-check bigger-120"></i>
							</button>
							<a href="{{asset('marcas')}}" class="btn btn-xs btn-danger">
								<i class="ace-icon fa fa-times bigger-120" aria-hidden="true"></i>
							</a>
						</td>											
					</tr>
				@endif
		</form>	
	</tbody>
</table>
@stop