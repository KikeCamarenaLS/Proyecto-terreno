@extends('template.header')


@section('content_header')
<h4 class="page-title">Listado Personal</h4>
@stop

@section('content')

<div class="row">
	<body onload="abrirModal();mensaje('{{ $color }}','{{$mensaje}}');">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title"><h4>Datos</h4></div>
					<center><div class="col-md-5">
						<label>Buscar por ID del Elemento</label>
						<input type="text" class="form-control" id="busquedaText" name="busquedaText" placeholder="Escribe el ID del Empleado" onkeyup ="Cargartabla()">

					</div></center>

					
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<div id="TablaDatos" style="width:100%;">


						</div>
					</div>

				</div>
			</div>
		</div><div class="modal fade" id="estatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="post" action="{{Route('modificar.estatus.personal')}}">
						@csrf
						<div class="modal-body" id="MensajeConfirmModal">

						</div>
						<input type="hidden" id="ID_PersonalModal" name="ID_PersonalModal">
						<input type="hidden" id="EstatusModal" name="EstatusModal">
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<input type="submit" class="btn btn-primary" value="Aceptar"> 
						</div>
					</form>
				</div>
			</div>
		</div>

	</div><div class="modal fade bd-example-modal-lg" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<br>

				</div>
					<input type="hidden" id="color" name="color" value="{{ $color }}">

				@if($color=="danger")
				<div class="alert alert-{{ $color }}" role="alert">
					{{$mensaje}}
					<input type="hidden" id="color" name="color" value="{{ $color }}">
					<input type="hidden" id="AdscripcionModalModiHidden" name="AdscripcionModalModiHidden" value="{{ $AdscripcionModalModi }}">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times; </span>
					</button>
				</div>
				@endif
				<form method="post" action="{{Route('modificar.personal')}}">
					@csrf
					<div class="card-body">
						{{-- inicio del row --}}
						<div class="form-group row " >
							<div class="col-md-4 " >
								<label>Nombre(s) </label>
								<input required="" type="text" class="form-control success" id="NombreModalModiModi" name="NombreModalModiModi" placeholder="Nombre(s)" disabled value="{{$NombreModalModiModiHidden}}">
								<input  type="hidden" id="NombreModalModiModiHidden" name="NombreModalModiModiHidden" value="{{$NombreModalModiModiHidden}}">
								{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
							</div>
							<div class="col-md-4">
								<label>Apellido Paterno</label>
								<input required="" type="text" class="form-control" id="Apellido_PaternoModalModi" name="Apellido_PaternoModalModi" disabled placeholder="Apellido Paterno " value="{{$Apellido_PaternoModalModiHidden}}">
								<input  type="hidden" id="Apellido_PaternoModalModiHidden" name="Apellido_PaternoModalModiHidden" value="{{$Apellido_PaternoModalModiHidden}}">
							</div>
							<div class="col-md-4">
								<label>Apellido Materno</label>
								<input required="" type="text" class="form-control" id="Apellido_MaternoModalModi" name="Apellido_MaternoModalModi" disabled placeholder="Apellido Materno" value="{{$Apellido_MaternoModalModiHidden}}">
								<input  type="hidden" id="Apellido_MaternoModalModiHidden" name="Apellido_MaternoModalModiHidden" value="{{$Apellido_MaternoModalModiHidden}}">
							</div>
						</div>
						{{-- fin del row --}}

						{{-- inicio del row --}}
						<div class="form-group row " >
							<div class="col-md-4">
								<label>Placa</label>
								<input required="" type="number" class="form-control" id="PlacaModalModi" name="PlacaModalModi" placeholder="Placa" disabled value="{{$PlacaModalModiHidden}}">
								<input  type="hidden" id="PlacaModalModiHidden" name="PlacaModalModiHidden" value="{{$PlacaModalModiHidden}}">
							</div>
							<div class="col-md-4">
								<label>ID del Empleado</label>
								<input required="" type="number" class="form-control" id="No_EmpleadoModalModi" name="No_EmpleadoModalModi" placeholder="ID del Empleado " disabled value="{{$No_EmpleadoModalModiHidden}}">
								<input  type="hidden" id="No_EmpleadoModalModiHidden" name="No_EmpleadoModalModiHidden" value="{{$No_EmpleadoModalModiHidden}}">
							</div>
							<div class="col-md-4">
								<label>Estatus</label>
								<input type="text" class="form-control" id="EstatusModalModi" name="EstatusModalModi" placeholder="Estatus" disabled value="{{$EstatusModalModiHidden}}">
								<input  type="hidden" id="EstatusModalModiHidden" name="EstatusModalModiHidden" value="{{$EstatusModalModiHidden}}">
							</div>

						</div>
						{{-- fin del row --}}

						{{-- inicio del row --}}
						<div class="form-group row " >
							

							<div class="col-md-4">
							<label>??rea<span class="required-label">*</span></label>
							<select class="form-control" id="AreaModalModi" name="AreaModalModi"  >
								<option value="Sin ??rea">Sin ??rea</option>
								<option value="Agrupamientos">Agrupamientos</option>
								<option value="Calidad">Calidad</option>
								<option value="Comandante de Regi??n I">Comandante de Regi??n I</option>
								<option value="Comandante de Regi??n II">Comandante de Regi??n II</option>
								<option value="Comandante de Regi??n III">Comandante de Regi??n III</option>
								<option value="Contralor??a Interna">Contralor??a Interna</option>
								<option value="Direcci??n de Coordinaci??n Corporativa">Direcci??n de Coordinaci??n Corporativa </option>
								<option value="Direcci??n de Finanzas">Direcci??n de Finanzas</option>
								<option value="Direcci??n de Informaci??n, Sistemas y Comunicaci??n">Direcci??n de Informaci??n, Sistemas y Comunicaci??n </option>
								<option value="Direcci??n de Inspecci??n General y Evaluaci??n">Direcci??n de Inspecci??n General y Evaluaci??n </option>
								<option value="Direcci??n de Planeaci??n y Desarrollo de Capital Humano">Direcci??n de Planeaci??n y Desarrollo de Capital Humano </option>
								<option value="Direcci??n del Instituto de Educaci??n Superior de la Polic??a Auxiliar de la CDMX">Direcci??n del Instituto de Educaci??n Superior de la Polic??a Auxiliar de la CDMX</option>
								<option value="Direcci??n Ejecutiva de Desarrollo Institucional y Servicios de Apoyo">Direcci??n Ejecutiva de Desarrollo Institucional y Servicios de Apoyo </option>
								<option value="Direcci??n Ejecutiva de Operaci??n Policial">Direcci??n Ejecutiva de Operaci??n Policial</option>
								<option value="Direcci??n Ejecutiva de Recursos Humanos y Financieros">Direcci??n Ejecutiva de Recursos Humanos y Financieros </option>
								<option value="Direcci??n General de la Polic??a Auxiliar de la Ciudad de M??xico">Direcci??n General de la Polic??a Auxiliar de la Ciudad de M??xico </option>
								<option value="Direcci??n Jur??dica y Consultiva">Direcci??n Jur??dica y Consultiva</option>
								<option value="Jefatura del Estado Mayor">Jefatura del Estado Mayor </option>
								<option value="JUD de Contrataci??n de Servicios">JUD de Contrataci??n de Servicios </option>
								<option value="JUD de Administraci??n de Personal">JUD de Administraci??n de Personal </option>
								<option value="JUD de Adquisiciones">JUD de Adquisiciones </option>
								<option value="JUD de Almacenes, Inventarios y Archivos">JUD de Almacenes, Inventarios y Archivos</option> 
								<option value="JUD de Armamento">JUD de Armamento </option>
								<option value="JUD de Atenci??n Institucional">JUD de Atenci??n Institucional</option> 
								<option value="JUD de Capacitaci??n">JUD de Capacitaci??n</option>
								<option value="JUD de Carrera Policial">JUD de Carrera Policial </option>
								<option value="JUD de Cobranza">JUD de Cobranza</option>
								<option value="JUD de Comunicaci??n Social y Transparencia">JUD de Comunicaci??n Social y Transparencia </option>
								<option value="JUD de Contabilidad y Costos">JUD de Contabilidad y Costos </option>
								<option value="JUD de Desarrollo de Sistemas">JUD de Desarrollo de Sistemas </option>
								<option value="JUD de Desarrollo Pedag??gico">JUD de Desarrollo Pedag??gico </option>
								<option value="JUD de Enlace con ??rganos Fiscalizadores">JUD de Enlace con ??rganos Fiscalizadores </option>
								<option value="JUD de Evaluaci??n">JUD de Evaluaci??n</option>
								<option value="JUD de Evaluaci??n y Permanencia">JUD de Evaluaci??n y Permanencia </option>
								<option value="JUD de Facturaci??n">JUD de Facturaci??n </option>
								<option value="JUD de Infraestructura y Telecomunicaciones">JUD de Infraestructura y Telecomunicaciones </option>
								<option value="JUD de Jur??dico y Consultivo">JUD de Jur??dico y Consultivo </option>
								<option value="JUD de Nomina">JUD de Nomina </option>
								<option value="JUD de Operaci??n de Servicios de Telem??tica y Mantenimiento">JUD de Operaci??n de Servicios de Telem??tica y Mantenimiento </option>
								<option value="JUD de Operaci??n de Sistemas y Estad??sticas">JUD de Operaci??n de Sistemas y Estad??sticas </option>
								<option value="JUD de Organizaci??n">JUD de Organizaci??n </option>
								<option value="JUD de Prestaciones">JUD de Prestaciones</option>
								<option value="JUD de Presupuesto">JUD de Presupuesto</option>
								<option value="JUD de Reclutamiento, Selecci??n y Control de Confianza">JUD de Reclutamiento, Selecci??n y Control de Confianza </option>
								<option value="JUD de Registro y Diagnostico del S.N.S.P.">JUD de Registro y Diagnostico del S.N.S.P.</option>
								<option value="JUD de Servicios Generales">JUD de Servicios Generales </option>
								<option value="JUD de Servicios y Evaluaci??n de Seguridad">JUD de Servicios y Evaluaci??n de Seguridad </option> 
								<option value="JUD de Soporte y Atenci??n de Usuario Final">JUD de Soporte y Atenci??n de Usuario Final </option>
								<option value="JUD de Supervisi??n Administrativa">JUD de Supervisi??n Administrativa </option>
								<option value="JUD de Supervisi??n Operativa">JUD de Supervisi??n Operativa</option>
								<option value="JUD de Tesorer??a">JUD de Tesorer??a </option>
								<option value="JUD de Materia Civil y Mercantil">JUD de Materia Civil y Mercantil </option>
								<option value="JUD de Materia Laboral">JUD de Materia Laboral </option>
								<option value="JUD de Materia Penal">JUD de Materia Penal </option>
								<option value="Oficial??a de Partes">Oficial??a de Partes </option>
								<option value="Region Metropolitana">Region Metropolitana </option>
								<option value="Region IV">Region IV</option>
								<option value="sector 50">Sector 50</option>
								<option value="Sector 51">Sector 51</option>
								<option value="Sector 52">Sector 52</option>
								<option value="Sector 53">Sector 53</option>
								<option value="Sector 54">Sector 54</option>
								<option value="Sector 56">Sector 56</option>
								<option value="Sector 58">Sector 58</option>
								<option value="Sector 59">Sector 59</option>
								<option value="Sector 60">Sector 60</option>
								<option value="Sector 61">Sector 61</option>
								<option value="Sector 63">Sector 63</option>
								<option value="Sector 64">Sector 64</option>
								<option value="Sector 65">Sector 65</option>
								<option value="Sector 66">Sector 66</option>
								<option value="Sector 68">Sector 68</option>
								<option value="Sector 69">Sector 69</option>
								<option value="Sector 70">Sector 70</option>
								<option value="Sector 73">Sector 73</option>
								<option value="Sector 74">Sector 74</option>
								<option value="Sector 76">Sector 76</option>
								<option value="SSCCDMX">SSCCDMX</option>
								<option value="Subdirecci??n Contenciosa">Subdirecci??n Contenciosa </option>
								<option value="Subdirecci??n de An??lisis y Clasificaci??n">Subdirecci??n de An??lisis y Clasificaci??n </option>
								<option value="Subdirecci??n de Comunicaci??n Operativa">Subdirecci??n de Comunicaci??n Operativa</option>
								<option value="Subdirecci??n de Facturaci??n y Cobranza">Subdirecci??n de Facturaci??n y Cobranza </option>
								<option value="Subdirecci??n de Log??stica">Subdirecci??n de Log??stica</option>
								<option value="Subdirecci??n de Operaciones">Subdirecci??n de Operaciones</option>
								<option value="Subdirecci??n de Organizaci??n">Subdirecci??n de Organizaci??n</option>
								<option value="Subdirecci??n de Personal Operativo ">Subdirecci??n de Personal Operativo </option>
								<option value="Subdirecci??n de Recursos Financieros">Subdirecci??n de Recursos Financieros </option>
								<option value="Subdirecci??n de Recursos Humanos">Subdirecci??n de Recursos Humanos </option>
								<option value="Subdirecci??n de Recursos Materiales y Servicios Generales">Subdirecci??n de Recursos Materiales y Servicios Generales </option>
								<option value="Subdirecci??n de Selecci??n y Educaci??n Policial">Subdirecci??n de Selecci??n y Educaci??n Policial </option>
								<option value="Subdirecci??n de Sistemas">Subdirecci??n de Sistemas </option>

							</select>
						</div>
							<div class="col-md-4">
								<label>Adscripci??n<span class="required-label">*</span></label>
								<select required="" type="text" class="form-control" id="AdscripcionModalModi" name="AdscripcionModalModi" >
									{{$AdscripcionModalModi}}
								</select> 
							</div>
							<div class="col-md-4">
								<label>Correo Institucional</label>
								<input  type="email" class="form-control" id="Correo_InstitucionalModalModi" name="Correo_InstitucionalModalModi" placeholder="Correo Institucional" value="{{$Correo_InstitucionalModalModi}}">
							</div>
						</div>
						{{-- fin del row --}}

						{{-- inicio del row --}}
						<div class="form-group row " >
							
							<div class="col-md-4">
								<label>Tel??fono</label>
								<input  type="number"  {{-- min="1000000000" max="9999999999" --}} class="form-control"
								id="TelefonoModalModifi" name="TelefonoModalModifi"  value="{{$TelefonoModalModi}}" placeholder="Ingresa Tel??fono a 10 digitos">
								<input type="hidden" id="TelefonoModalModiHidden" name="TelefonoModalModiHidden" value="2">
							</div>
							<div class="col-md-4">
								<label>Extensi??n</label>
								<input  type="number" class="form-control" id="ExtencionModalModi" name="ExtencionModalModi" placeholder="Extensi??n" value="{{$ExtencionModalModi}}">
								<input type="hidden" name="ExtencionModalModiHidden" id="ExtencionModalModiHidden" value="{{$ExtencionModalModi}}">
							</div>
							<div class="col-md-4">
								<input  type="hidden" class="form-control " id="Correo_PersonalModalModi" name="Correo_PersonalModalModi" placeholder="Correo Personal" value="{{$Correo_PersonalModalModi}}">
							</div>
						</div>
						{{-- fin del row --}}

						{{-- inicio del row --}}
						<div class="form-group row " >
							<div class="col-md-12">
								<label>Ubicaci??n<span class="required-label">*</span></label>
								<input required="" type="text" class="form-control" id="UbicacionModalModi" name="UbicacionModalModi" placeholder="Ubicaci??n " value="{{$UbicacionModalModi}}">
							</div>

						</div>
						{{-- fin del row --}}

					</div>

					<div class="modal-footer">
						<center>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<input type="submit" class="btn btn-primary" value="Actualizar"> 
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>
										
	@endsection

	@section('jscustom')
	<script type="text/javascript">
		function mensaje(color,mensaje){
		if(mensaje=="sin_mensaje"){

		}else{
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state =color;
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = mensaje;
			content.title = 'Listado Personal';
			if (color == "danger") {
				content.icon = 'la la-close';
			} else {
				content.icon = 'la la-check';
			}
			content.url = 'index.html';
			content.target = '_blank';

			$.notify(content,{
				type: state,
				placement: {
					from: placementFrom,
					align: placementAlign
				},
				time: 1000,
			});
		}
		
	}
		function modal(estatus,nombre,id){
			document.getElementById('ID_PersonalModal').value =id;
			document.getElementById('EstatusModal').value =estatus;
			$('#myInput').trigger('focus');
			if(estatus=="Activo"){
				estatus="Inactivo";
				document.getElementById('MensajeConfirmModal').innerHTML='??Estas seguro de querer cambiar el estatus de <b>'+nombre+'</b> a: <b>'+estatus+'</b>?';
			}else if(estatus=="Inactivo"){
				estatus="Activo";
				document.getElementById('MensajeConfirmModal').innerHTML='??Estas seguro de querer cambiar el estatus de <b>'+nombre+'</b> a: <b>'+estatus+'</b>?';
			}
			
		}
		function abrirModal(){
			color=document.getElementById('color').value;
			if(color=="danger"){
				$.get("{{Route('combo.Adscripcion')}}", function(data){
					console.log(data);
					Adscripci??n=document.getElementById("AdscripcionModalModiHidden").value;
					var html = '<option>Seleccione una Adscripci??n</option>';

					for(i=0; i<data.length; i++) {
						if(Adscripci??n==data[i].ADSCRIPCION){
							html+='<option selected  value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';

						}
						html+='<option value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
					}
					$('#AdscripcionModalModi').html(html);

				});
				$('#modificarModal').modal('show');
			}

		}
		function Cargartabla(){
			textoBuscar=document.getElementById('busquedaText').value;
			if(textoBuscar.length>4){
				$.get("{{url('/busqueda/tabla')}}"+textoBuscar, function(data){
				console.log("{{url('/busqueda/tabla/')}}/"+textoBuscar);
				if(data==""){
					var html = '';
				html+='<div class="alert alert-danger" role="alert">El personal no fue encontrado en la base de datos'+
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
							'<span aria-hidden="true">&times; </span>'
						'</button>'
					'</div>';
					$('#TablaDatos').html(html);
				}else{
				var html = '';
				html+='<table class="table table-bordered table-head-bg-primary table-bordered-bd-info mt-4">'+
				'<thead><tr>'+
				'<th scope="col">ID</th>'+
				'<th scope="col">Nombre </th>'+
				'<th scope="col">Estatus</th>'+
				'<th scope="col">Ubicaci??n</th>'+
				'<th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acci??n</th>'+
				'</tr></thead>';

				for(i=0; i<data.length; i++) {
					var nombreCompleto="'"+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+"'";
					var nombre="'"+data[i].Nombre+"'";
					var Apellido_P="'"+data[i].Apellido_P+"'";
					var Apellido_M="'"+data[i].Apellido_M+"'";
					var estatus="'"+data[i].Estatus+"'";
					var ID_Personal="'"+data[i].ID_EMPLEADO+"'";
					var Placa="'"+data[i].Placa+"'";
					var No_Empleado="'"+data[i].No_Empleado+"'";
					var Area="'"+data[i].Area+"'";
					var Adscripcion="'"+data[i].Adscripcion+"'";
					var Ubicacion="'"+data[i].Ubicacion+"'";
					var Correo_Institucional="'"+data[i].Correo_Institucional+"'";
					var Correo_Personal="'"+data[i].Correo_Personal+"'";
					var Telefono=""+data[i].Telefono+"";
					var Extension=""+data[i].Extension+"";
					var Estatus="'"+data[i].Estatus+"'";


					html+='<tr';
					if(i% 2 == 0){
						html+='role="row" class="odd"';
					}else{
						html+='role="row" class="even"';
						
					}
					html+='><td class="primary" id="ID_Personal">'+data[i].ID_EMPLEADO+'</td>'+
					'<td class="primary " id="Nombre">'+data[i].Nombre+' '+data[i].Apellido_P+' '+data[i].Apellido_M+'</td>';

					if(data[i].Estatus=="Activo"){
						html+='<td class="primary " id="ID_Personal"style="color:green;"><b>'+data[i].Estatus+'</b></td>';
					}else if(data[i].Estatus=="Inactivo"){
						html+='<td class="primary " id="ID_Personal"style="color:red;"><b>'+data[i].Estatus+'</b></td>';
					}

					html+='<td class="primary " id="Ubicacion">'+data[i].Ubicacion+'</td>'+
					'<td class="primary " id="ID_Personal">'+
					'<a  data-toggle="modal" style="color:white;" onclick="modificarPersonalModal('+
					ID_Personal+','+nombre+','+Apellido_P+','+Apellido_M+','+Placa+','+No_Empleado+','+Adscripcion+','+Area+','+
					''+Ubicacion+','+Correo_Institucional+','+Correo_Personal+','+Telefono+','+Extension+','+Estatus+')" class="btn btn-primary">Modificar</a>';

					if(data[i].Estatus=="Activo"){
						html+='<a onclick="modal('+estatus+','+nombreCompleto+','+ID_Personal+')"'+' data-toggle="modal" style="color:white;" data-target="#estatusModal" class="btn btn-success">Estatus</a>';
					}
					else if(data[i].Estatus=="Inactivo"){
						html+='<a onclick="modal('+estatus+','+nombreCompleto+','+
						''+ID_Personal+')"data-toggle="modal" style="color:white;" data-target="#estatusModal" class="btn btn-danger">Estatus</a>';
					}

					html+='</td></tr>';			
				}
				html+='</table>';

				$('#TablaDatos').html(html);
				}
			});
			}
			
		}
		function modificarPersonalModal(ID_Personal,nombre,Apellido_P,Apellido_M,Placa,No_Empleado,Adscripci??n,Area,Ubicacion,Correo_Institucional,Correo_Personal,Telefono,Extension,Estatus){
			$.get("{{Route('combo.Adscripcion')}}", function(data){
				console.log(data);
				var html = '<option>Seleccione una Adscripci??n</option>';
				for(i=0; i<data.length; i++) {
					if(Adscripci??n==data[i].ADSCRIPCION){
						html+='<option selected  value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';

					}
					html+='<option value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
				}
				$('#AdscripcionModalModi').html(html);

			});
			
			document.getElementById('NombreModalModiModiHidden').value =nombre;
			document.getElementById('Apellido_PaternoModalModiHidden').value =Apellido_P;
			document.getElementById('Apellido_MaternoModalModiHidden').value =Apellido_M;
			document.getElementById('PlacaModalModiHidden').value =Placa;
			document.getElementById('No_EmpleadoModalModiHidden').value =ID_Personal;
			document.getElementById('EstatusModalModiHidden').value =Estatus;

			document.getElementById('NombreModalModiModi').value =nombre;
			document.getElementById('Apellido_PaternoModalModi').value =Apellido_P;
			document.getElementById('Apellido_MaternoModalModi').value =Apellido_M;
			document.getElementById('PlacaModalModi').value =Placa;
			document.getElementById('No_EmpleadoModalModi').value =ID_Personal;
			document.getElementById('EstatusModalModi').value =Estatus;
			//document.getElementById('AreaModalModi').value =Area;
			console.log(Area);
			$("#AreaModalModi option[value='"+ Area +"']").attr("selected",true);
			document.getElementById('AdscripcionModalModi').value =Adscripci??n;
			document.getElementById('Correo_InstitucionalModalModi').value =Correo_Institucional;
			document.getElementById('Correo_PersonalModalModi').value =Correo_Personal;
			
			document.getElementById('TelefonoModalModifi').value =Telefono;
			document.getElementById('TelefonoModalModifi').value =Telefono;
			
			document.getElementById('ExtencionModalModi').value =Extension;
			document.getElementById('ExtencionModalModiHidden').value =Extension;
			
			
			document.getElementById('UbicacionModalModi').value =Ubicacion;

			$('#modificarModal').modal('show');
		}
	</script>


@endsection