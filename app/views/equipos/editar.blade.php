@extends('index')
@section('contenedor')
<div class="col-md-8 col-md-offset-2">

<div class="col-md-12 text-center">
	<h3 class="margintit font"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Edicion de equipos</h3> <hr>
</div>

	<form class="form-horizontal" action="{{$equipo->id}}" method="POST">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Numero serial</label>
			<div class="col-sm-7">
				<input type="text" required class="form-control" name="serial" value="{{$equipo->numero_serial}}" placeholder="Numero serial">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Descripcion</label>
			<div class="col-sm-7">
				<textarea class="form-control resize" rows="5" name="descripcion" placeholder="Descripcion">{{$equipo->descripcion}}</textarea>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Color</label>
			<div class="col-sm-7">
				<input type="text" required class="form-control" name="color" value="{{$equipo->color}}" placeholder="Color">
			</div>	
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Observaciones</label>
			<div class="col-sm-7">
				<textarea class="form-control resize" rows="5" name="observaciones" placeholder="Observaciones">{{$equipo->observaciones}}</textarea>
			</div>	
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Marca</label>
			<div class="col-sm-7">
							<select name="marca" class="form-control">
								@foreach($marca as $marca)
									@if($marca->tipo_registro_id == 101)
										@if($marca->id == $equipo->p_marca)
											<option value="{{$marca->id}}" selected="selected">{{$marca->nombre}}</option>
										 @endif
										 	<option value="{{$marca->id}}">{{$marca->descripcion}}</option>	
									@endif	 	
								@endforeach	
							</select>	
			</div>	
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Persona</label>
			<div class="col-sm-7">
							<select name="persona" class="form-control">
								@foreach($persona as $persona)
									@if($marca->id == $equipo->persona_id)
										<option value="{{$persona->id}}" selected="selected">{{$persona->primer_nombre.' '.$persona->primer_apellido}}</option>
									@endif	
									 	<option value="{{$persona->id}}">{{$persona->primer_nombre.' '.$persona->primer_apellido}}</option>	
								@endforeach	
							</select>
			</div>	
		</div>

		<div class="form-group">
			<div class="col-md-7 col-md-offset-3  text-center">
				<button class="btn btn-primary btn-block">Actualizar equipo</button>
				<a href="{{asset('equipos')}}" class="btn btn-danger btn-block">Cancelar</a>
			</div>
		</div>
	</form>

	<div class="col-md-12">
	</div>
</div>
@stop