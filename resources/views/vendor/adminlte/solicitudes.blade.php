@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Solicitudes
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Solicitudes Pendientes</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table id="solicitudes" class="table table-hover table-condensed">
					        <thead>
					        <tr>
					            <th>Id</th>
					            <th>Nombre</th>
					            <th>Email</th>
					            <th>Identificación</th>
					            <th>Celular</th>
					            <th>Estado</th>
					            <th>Acciones</th>
					        </tr>
					        </thead>
					        <tbody>
					        	@foreach($solicitudes as $solicitud)
					        	<tr>
					        		<td>{{$solicitud->id}}</td>
					        		<td>{{$solicitud->nombres}}</td>
					        		<td>{{$solicitud->email}}</td>
					        		<td>{{$solicitud->identificacion}}</td>
					        		<td>{{$solicitud->celular}}</td>
					        		@if($solicitud->estado == 0)
					        			<td><span class="label label-primary">Nueva</span></td>
					        		@else
					        			<td><span class="label label-warning">En Proceso</span></td>
					        		@endif
					        		<td><a href="" class="label label-primary"> <i class="fa fa-eye"></i></a></td>
					        	</tr>
					        	@endforeach
					        </tbody>
					    </table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			
		</div>
	</div>

@endsection
@section('scripts_adicional')
	<script type="text/javascript" src="{{asset('plugins/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
	       $('#solicitudes').DataTable();
	    });
	</script>
@endsection