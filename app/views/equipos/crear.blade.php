@extends('index')
@section('contenedor')
<div class="col-md-8 col-md-offset-2">

<div class="col-md-12 text-center">
	<h3 class="margintit font"><i class="menu-icon fa fa-desktop" aria-hidden="true"></i> Creacion de equipos</h3> <hr>
</div>

	<form class="form-horizontal" action="ingresar" method="POST">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Numero serial</label>
			<div class="col-sm-7">
				<input type="text" required class="form-control" name="numero_serial" placeholder="Numero serial">

				@if( $errors->has('numero_serial') )
	                <div class="alert alert-danger alert-dismissable marginerror">
	                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                      <h4><i class="icon fa fa-ban"></i> Error!</h4>
	                      @foreach($errors->get('numero_serial') as $error )   
	                       {{ $error }}
	                      @endforeach
	                </div>
            	@endif	
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Color</label>
			<div class="col-sm-7">
				<input type="text" required class="form-control" name="color" placeholder="Color">

				@if( $errors->has('color') )
	                <div class="alert alert-danger alert-dismissable marginerror">
	                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                      <h4><i class="icon fa fa-ban"></i> Error!</h4>
	                      @foreach($errors->get('color') as $error )   
	                       {{ $error }}
	                      @endforeach
	                </div>
            	@endif	
			</div>	
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Elementos extra</label>
			<div class="col-sm-7">
				<input type="text" required class="form-control" name="elementos_ex" placeholder="Elementos extra">

				@if( $errors->has('elementos_ex') )
	                <div class="alert alert-danger alert-dismissable marginerror">
	                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                      <h4><i class="icon fa fa-ban"></i> Error!</h4>
	                      @foreach($errors->get('elementos_ex') as $error )   
	                       {{ $error }}
	                      @endforeach
	                </div>
            	@endif	
			</div>	
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Marca</label>
			<div class="col-sm-7">
				<select class="form-control" id="form-field-select-2" required name="marca_id">
				@foreach($marca as $marcas)
					<option value="{{$marcas->id}}">{{$marcas->descripcion}}</option>
				@endforeach
				</select>
			</div>	
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Persona</label>
			<div class="col-sm-7">
				<select class="form-control" id="form-field-select-2" required name="persona_id">
				@foreach($persona as $personas)
					<option value="{{$personas->id}}">{{$personas->primer_nombre.' '.$personas->primer_apellido}}</option>
				@endforeach
				</select>
				<input type="hidden" name="estado_id" value="1">
			</div>	
		</div>

		<div class="form-group">
			<div class="col-md-7 col-md-offset-3  text-center">
				<button class="btn btn-primary btn-block">Ingresar equipo</button>
				<a href="{{asset('equipos')}}" class="btn btn-danger btn-block">Cancelar</a>
			</div>
		</div>
	</form>

	<div class="col-md-12">
	</div>
</div>
@stop