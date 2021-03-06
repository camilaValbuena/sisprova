@section('ventanaModal')
<div class="panel panel-primary">
	<div class="col-md-12 header"> 
		<div class="col-md-11">
			<h4 class="modal-title text" id="myModalLabel"><i class="menu-icon fa fa-tags" aria-hidden="true"></i> Ingresar marca</h4> 
		</div>
		<div class="col-md-1">
			<button type="button" class="btnclose" data-dismiss="modal" aria-label="Close">
				<p>X</p>
			</button> 
		</div>
	</div> 

	<div class="panel-body">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal" action="marcas/ingresar" method="POST">
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">Descripción</label>
					<div class="col-sm-7">
						<input type="text" required class="col-md-12" name="descripcion" placeholder="Descripción">
					</div>
				</div>
				<input type="hidden" name="estado_id" value="1">
				<div class="form-group">
					<div class="col-sm-7 col-sm-offset-3">
						<button class="btn btn-primary btn-block">Ingresar marca</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- <div class="modal-content"> 
	<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button> 

		<h4 class="modal-title" id="myModalLabel">Modal title</h4> 
	</div> 

	<div class="modal-body">
	  	<form class="form-horizontal" action="marcas/ingresar" method="POST">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right">Descripción</label>
				<div class="col-sm-7">
					<input type="text" required class="col-md-12" name="descripcion" placeholder="Descripción">
				</div>
			</div>
			<input type="hidden" name="estado_id" value="1">
			<div class="form-group">
				<div class="col-sm-7 col-sm-offset-3">
					<button class="btn btn-primary btn-block">Ingresar marca</button>
					<a href="{{asset('marcas')}}" class="btn btn-danger btn-block">Cancelar</a>
				</div>
			</div>
		</form>
	</div> 
</div> -->
@stop