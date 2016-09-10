@extends('index')
@section('contenedor')
<div class="col-md-8 col-md-offset-2">

<div class="col-md-12 text-center">
	<h3 class="margintit font"><i class="fa fa-desktop fa-lg" aria-hidden="true"></i> Creacion de equipos</h3> <hr>
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
			<label class="col-sm-3 control-label no-padding-right">Descripcion</label>
			<div class="col-sm-7">
				<textarea class="form-control resize" rows="5" name="descripcion" placeholder="Descripcion"></textarea>

				@if( $errors->has('descripcion') )
	                <div class="alert alert-danger alert-dismissable marginerror">
	                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                      <h4><i class="icon fa fa-ban"></i> Error!</h4>
	                      @foreach($errors->get('descripcion') as $error )   
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
			<label class="col-sm-3 control-label no-padding-right">Observaciones</label>
			<div class="col-sm-7">
				<textarea class="form-control resize" rows="5" name="observaciones" placeholder="Observaciones"></textarea>

				@if( $errors->has('observaciones') )
	                <div class="alert alert-danger alert-dismissable marginerror">
	                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                      <h4><i class="icon fa fa-ban"></i> Error!</h4>
	                      @foreach($errors->get('observaciones') as $error )   
	                       {{ $error }}
	                      @endforeach
	                </div>
            	@endif	
			</div>	
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Marca</label>
			<div class="col-sm-7">
				<select class="form-control" id="form-field-select-2" required name="p_marca">
					@foreach($marca as $marcas)	
						@if($marcas->tipo_registro_id == 101)
							<option value="{{$marcas->id}}">{{$marcas->nombre}}</option>
						@endif
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
				<input type="hidden" name="p_estado" value="100">
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