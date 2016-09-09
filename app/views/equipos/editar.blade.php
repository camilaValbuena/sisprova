@extends('index')

@section('contenedor')
<br>
 <table id="simple-table" class="table  table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center">Numero Serial</th>
			<th class="text-center">Color</th>
			<th class="text-center">Elementos Ex</th>
			<th class="text-center">Marca</th>
			<th class="text-center">Persona</th>
			<th class="text-center">Estado</th>
			<th class="text-center col-md-1">Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		<form action="{{$equipo->id}}" method="POST">
				@if($equipo->estado_id == 1)	
					<tr>
						<td class="text-center"><input class="form-control" type="text" name="serial" value="{{$equipo->numero_serial}}"></td>
						<td class="text-center"><input class="form-control" type="text" name="color" value="{{$equipo->color}}"></td>
						<td class="text-center"><input class="form-control" type="text" name="elementos" value="{{$equipo->elementos_ex}}"></td>		
						<td class="text-center">
							<select name="marca" class="form-control">
								@foreach($marca as $marca)
									@if($marca->id == $equipo->marca_id)
										<option value="{{$marca->id}}" selected="selected">{{$marca->descripcion}}</option>
									 @endif
									 	<option value="{{$marca->id}}">{{$marca->descripcion}}</option>	
								@endforeach	
							</select>
						</td>	
						<td class="text-center">
							<select name="persona" class="form-control">
								@foreach($persona as $persona)
									@if($persona->id == $equipo->persona_id)
										<option value="{{$persona->id}}" selected="selected">{{$persona->primer_nombre.' '.$persona->primer_apellido}}</option>
									@endif	
									 	<option value="{{$persona->id}}">{{$persona->primer_nombre.' '.$persona->primer_apellido}}</option>	
								@endforeach	
							</select>
						</td>	
						<td class="text-center"><span class="label label-sm label-primary width-100">{{$equipo->estado->descripcion}}</span></td>
						<td class="text-center">
							<button class="btn btn-xs btn-success">
								<i class="ace-icon fa fa-check bigger-120"></i>
							</button>
							<a href="{{asset('equipos')}}" class="btn btn-xs btn-danger">
								<i class="ace-icon fa fa-times bigger-120" aria-hidden="true"></i>
							</a>
						</td>											
					</tr>
				@endif	
				@if($equipo->estado_id == 2)
					<tr>
						<td class="text-center"><input type="text" name="serial" value="{{$equipo->numero_serial}}"></td>
						<td class="text-center"><input type="text" name="color" value="{{$equipo->color}}"></td>
						<td class="text-center"><input type="text" name="elementos" value="{{$equipo->elementos_ex}}"></td>		
						<td class="text-center">
							<select name="marca" class="form-control">
								@foreach($marca as $marca)
									@if($marca->id == $equipo->marca_id)
										<option value="{{$marca->id}}" selected="selected">{{$marca->descripcion}}</option>
									@endif
									 	<option value="{{$marca->id}}">{{$marca->descripcion}}</option>	
								@endforeach	
							</select>
						</td>	
						<td class="text-center">
							<select name="persona" class="form-control">
								@foreach($persona as $persona)
									@if($persona->id == $equipo->persona_id)
										<option value="{{$persona->id}}" selected="selected">{{$persona->primer_nombre.' '.$persona->primer_apellido}}</option>
									@endif	
									 	<option value="{{$persona->id}}">{{$persona->primer_nombre.' '.$persona->primer_apellido}}</option>	
								@endforeach	
							</select>
						</td>	
						<td class="text-center"><span class="label label-sm label-danger width-100">{{$equipo->estado->descripcion}}</span></td>
						<td class="text-center">
							<button class="btn btn-xs btn-success">
								<i class="ace-icon fa fa-check bigger-120"></i>
							</button>
							<a href="{{asset('equipos')}}" class="btn btn-xs btn-danger">
								<i class="ace-icon fa fa-times bigger-120" aria-hidden="true"></i>
							</a>
						</td>											
					</tr>
				@endif
		</form>	
	</tbody>
</table>
@stop