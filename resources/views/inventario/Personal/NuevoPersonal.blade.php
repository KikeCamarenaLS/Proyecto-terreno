@extends('template.header')

@section('content_header')
<h4 class="page-title">Nuevo Personal</h4>

@stop

@section('content')


<div class="row" id="app">
	<body onload="cargarAdscripcion();mensaje('{{ $color }}','{{$mensaje}}');">
	<div class="col-md-12" >
		<div class="card">
			<div class="card-header">
				<div class="card-title">Registro</div>
				
			</div>
			{{-- <div class="form-group row " >
						<div class="col-md-4" >
							<label> <span class="required-label"></span></label>
							
						</div>
						<div class="col-md-4">
							<label>Auto llenado<span class="required-label"></span></label>
							<input required="" type="text" class="form-control success" id="id_autollenar" name="id_autollenar" placeholder="id del empleado" >
							<li class="page-item"><a class="page-link" href="#">2</a></li>
						</div>
						<div class="col-md-4">
							<label><span class="required-label"></span></label>
							
						</div>
			</div> --}}
			<div class="form-group row " >
				<div class="col-md-4" ></div>
				<div class="input-group col-md-4">
					<input type="text" class="form-control" id="AutorrellenariD" placeholder="Autorrellenar con ID del Empleado" aria-label="" aria-describedby="basic-addon1">
					<div class="input-group-prepend">
						<button class="btn btn-default btn-border" type="button" onclick="autoRellenado()">Buscar</button>
					</div>
				</div>	
				<div class="col-md-4" ></div>
			</div>

			
			<form id="exampleValidation" method="post" action="{{Route('registrar.personal')}}">
				@csrf
				<div class="card-body">
					{{-- inicio del row --}}

					<div class="form-group row " >
						{{-- <div class="col-md-4 has-error has-feedback" > --}}
						<div class="col-md-4" >
							<label>Nombre(s) <span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" id="Nombre" name="Nombre" placeholder="Nombre(s)" value={{$Nombre}}>
							{{-- {{Form::text('Nombre',null,["class" => "form-control","placeholder" => "Nombre(s)","id" => "Nombre",])}} --}}
						</div>
						<div class="col-md-4">
							<label>Apellido Paterno<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno" placeholder="Apellido Paterno " value={{$Apellido_Paterno}}>
						</div>
						<div class="col-md-4">
							<label>Apellido Materno</label>
							<input  type="text" class="form-control" id="Apellido_Materno" name="Apellido_Materno" placeholder="Apellido Materno" value={{$Apellido_Materno}}>
						</div>
					</div>
					{{-- fin del row --}}
					
					{{-- inicio del row --}}
					<div class="form-group row " >
						<div class="col-md-4">
							<label>ID del Empleado<span class="required-label">*</span></label>
							<input  type="number" class="form-control" id="No_Empleado" name="No_Empleado" placeholder="No.Empleado " value={{$No_Empleado}}>
						</div>
						<div class="col-md-4">
							<label>??rea<span class="required-label">*</span></label>
							<select required="" type="text" class="form-control" id="Area" name="Area"  >
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
								<option value="Sector 50">Sector 50</option>
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
						
						<div class="col-md-4" style="display: none;">
							<label>Adscripci??n</label>
							<select type="text" class="form-control" id="Adscripcion" name="Adscripcion" ></select> 
						</div>
						<div class="col-md-4">
							<label>Correo Institucional</label>
							<input  type="email" class="form-control" id="Correo_Institucional" name="Correo_Institucional" placeholder="Correo Institucional" value={{$Correo_Institucional}}>
						</div>
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}
					<div class="form-group row " >
						<div class="col-md-12">
							<label>Ubicaci??n<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Ubicacion" name="Ubicacion" placeholder="Ubicaci??n " value={{$Ubicacion}}>
						</div>
						
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}
					<div class="form-group row " >
						<div class="col-md-4">
							<label>Estatus</label>
							<select type="text" class="form-control" id="Estatus" name="Estatus" placeholder="Estatus" >
								<option>Activo</option>
								<option>Inactivo</option>
							</select>
						</div>
						<div class="col-md-4">
							<label>Placa</label>
							<input  type="number" class="form-control" id="Placa" name="Placa" placeholder="Placa" value={{$Placa}}>
						</div>
						
						<div class="col-md-4">
							<label>Tel??fono</label>
							<input  type="number" name="Telefono" min="10000000"  class="form-control" id="Telefono" name="Telefono" placeholder="Tel??fono " value={{$Telefono}}>
						</div>
					</div>
					{{-- fin del row --}}
					
					{{-- inicio del row --}}
					<div class="form-group row " >
						<div class="col-md-4" style="display: none;">
							<label>Correo Personal</label>
							<input  type="email" class="form-control " id="Correo_Personal" name="Correo_Personal" placeholder="Correo Personal" value={{$Correo_Personal}}>
						</div>
						
						<div class="col-md-4">
							<label>Extensi??n</label>
							<input  type="number" class="form-control" id="Extencion" name="Extencion" placeholder="Extensi??n" value={{$Extencion}}>
						</div>
					</div>
					{{-- fin del row --}}
					
					
					<br>
					
				</div>
				<div class="card-footer">{{-- inicio del row --}}
					<div class="row">
						<div class="col-md-12">
							<center>
								<input  type="submit" class="btn btn-success" value="Registrar">
							</center>
						</div>
					</div>
					{{-- fin del row --}}
				</div>

			</form>
			
		</div>
		

	</div>
</div>


@endsection

@section('jscustom')
<script type="text/javascript">
	function cargarAdscripcion(){
		 $.get("{{Route('combo.Adscripcion')}}", function(data){
          console.log(data.length);
          var html = '<option value="">Seleccione una Adscripci??n</option>';
          for(i=0; i<data.length; i++) {
          	if(data[i].ADSCRIPCION=="VACIO"){
          		html+='<option selected value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
          	}else{
          		html+='<option value="'+data[i].ADSCRIPCION+'">'+data[i].ADSCRIPCION+'</option>';
              	}
          }
          $('#Adscripcion').html(html);

        });

	}
	function autoRellenado(){
		var nombre= document.getElementById('AutorrellenariD').value;
		 $.get("{{url('/autollenado/personal')}}/"+nombre, function(data){
		 	if(data.length>0){
		 		document.getElementById('No_Empleado').value=data[0].ID_ELEMENTO;
		 	document.getElementById('Nombre').value=data[0].NOMBRE;
		 	document.getElementById('Apellido_Paterno').value=data[0].APELLIDOP;
		 	document.getElementById('Apellido_Materno').value=data[0].APELLIDOM;
		 	document.getElementById('Ubicacion').value="Sector: "+data[0].SECTOR+", Destacamento: "+data[0].DEST;
		 	document.getElementById('Placa').value=data[0].PLACA;
		 	console.log(data);
	 	
		 	var x = document.getElementById("Adscripcion");
var option = document.createElement("option");
option.text = data[0].R_SOCIAL;
x.add(option);

		 	document.getElementById('Adscripcion').value=data[0].R_SOCIAL;

		 		mensaje("success","Campos llenos");
		 	}else{
		 	mensaje("danger","Persona no encontrada");
		 	document.getElementById('No_Empleado').value="";
		 	document.getElementById('Nombre').value="";
		 	document.getElementById('Apellido_Paterno').value="";
		 	document.getElementById('Apellido_Materno').value="";
		 	document.getElementById('Ubicacion').value="";
		 	document.getElementById('Placa').value="";
		 	document.getElementById('Area').value="Sin ??rea";
		 	document.getElementById('Adscripcion').value="Seleccione una Adscripci??n";
		 	
		 }
          });
	}
	function mensaje(color,mensaje){
		if(mensaje=="sin_mensaje"){

		}else{
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state =color;
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = mensaje;
			content.title = 'Nuevo Personal';
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
	
</script>

@endsection