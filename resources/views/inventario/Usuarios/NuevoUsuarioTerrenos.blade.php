@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body onload="mensaje('{{$color}}','{{$mensaje}}')">
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Registrar Usuario</div>

				</div>



				<div class="card-body">
					{{-- inicio del row --}}

 <form id="exampleValidation" method="post" action="{{Route('insertas.insert_usuarioPost')}}" enctype="multipart/form-data">
        	
				@csrf
					<div class="form-group row"  >

						<div class="col-md-3" id="clienteid" >
							<label>Numero de cliente &nbsp;</label>
							<input  type="text" class="form-control success" id="NclienteHide" onkeyup="buscarUser()" name="NclienteHide" >
						</div>
						<div class="col-md-6">
							
						</div>
						<div class="col-md-3" id="Foto" >
											<div class="input-file input-file-image">
												<img class="img-upload-preview img-circle" id="ponerFoto" width="100" height="100" src="{{url('assets/img/profile.png')}}" alt="preview">
												<input type="file" class="form-control form-control-file" id="uploadImg1" name="uploadImg1" accept="image/*" >
												<label for="uploadImg1" id="FotoInput"   class=" label-input-file btn btn-icon btn-default btn-round btn-lg"><i class="la la-file-image-o"></i> Cargar Foto</label>
											</div>
										</div>
					</div>
					
					<div class="form-group row " >

						<div class="col-md-4" >
							<label>Nombre(s)<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control success" id="Nombre" name="Nombre" >
							<span class="required-label"  id="validaN" style="color:red; display: none;" ><font size="1">Es necesario llenar este campo</font></span>
						</div>
						<div class="col-md-3">
							<label>Apellido Paterno<span class="required-label">*</span></label>
							<input required="" type="text" class="form-control" id="Apellido_Paterno" name="Apellido_Paterno"  >
							<span class="required-label"  id="validaP" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
						</div>
						<div class="col-md-3">
							<label>Apellido Materno<span class="required-label">*</span></label>
							<input  type="text" required="" class="form-control" id="Apellido_Materno" name="Apellido_Materno" >
							<span class="required-label" id="validaM" style="color:red;  display: none;" ><font size="1">Es necesario llenar este campo</font></span>
						</div>
						
					</div>
					{{-- fin del row --}}
					{{-- inicio del row --}}
					<div id="validaexiste" >
						<div class="form-group row " >
							<div class="col-md-3">
								<label>G??nero </label>
								<select  class="form-control success" id="G??nero" name="G??nero"  style="width:100%;">
									<option>Masculino</option>
									<option>Femenino</option>
									<option>Otro</option>
									<option>Prefiero no decirlo</option>

								</select>
							</div>
							<div class="col-md-2">
								<label>Fecha de Nacimiento</label>
								<input  type="date" class="form-control"   id="fechaNac" name="fechaNac" onchange="saberEdad();" >
							</div>
							<div class="col-md-2">
								<label>Edad</label>
								<input  type="text" class="form-control"   id="Edad" name="Edad" disabled>
							</div>

							<div class="col-md-2">
								<label>Nacionalidad</label>
								<input  type="text" class="form-control"   id="Nacionalidad" name="Nacionalidad" >
							</div>

							<div class="col-md-3">
								<label>CURP</label>
								<input  type="text" class="form-control" maxlength="18"   id="CURP" name="CURP"  >
							</div>
						</div>
						<div class="form-group row " >
							<div class="col-md-3">
								<label>RFC</label>
								<input  type="text" class="form-control"   id="RFC" name="RFC"  >
							</div>
							<div class="col-md-3">
								<label>NSS(IMSS)</label>
								<input  type="text" class="form-control"   id="NSS" name="NSS"  >
							</div>
						
							<div class="col-md-3" >
								<label>Estado civil</label>
								<select  class="form-control success" id="Estado_civil" name="Estado_civil"  style="width:100%;">
									<option>Soltero</option>
									<option>Casado</option>
									<option>Divorciado</option>
									<option>Separaci??n en proceso judicial</option>
									<option>Viudo</option>
									<option>Concubinato</option>
									<option>Prefiero no decirlo</option>

								</select>

							</div>
							<div class="col-md-2" >
								<label>N??mero de dependientes</label>
								<input  type="number" class="form-control success" id="dependiente" name="dependiente"  >

							</div>
							</div>
						<div class="form-group row">
							<div class="col-md-2" >
								<label>Hijos dependientes</label>
								<input  type="number" class="form-control success" id="Hijosdependiente" name="Hijosdependiente"  >

							</div>
							<div class="col-md-3" >
								<label>Ultimo nivel de estudios</label>
								<select  class="form-control success" id="estudio" name="estudio" style="width:100%;" >
									<option>Ninguno</option>
									<option>Preescolar</option>
									<option>Primaria</option>
									<option>Secundaria</option>
									<option>Preparatoria o bachillerato</option>
									<option>Ingenier??a</option>
									<option>Licenciatura </option>
									<option>Maestr??a</option>
									<option>Doctorado</option>
									<option>Prefiero no decirlo</option>

								</select>

							</div>
							<div class="col-md-2" >
								<label>Especialidad en</label>
								<input  type="text" class="form-control success" id="Especialidad" name="Especialidad"  >

							</div>
							<div class="col-md-3" >
								<label>Concluido/Trunco</label>
								<select  class="form-control success" id="ConcluidoTrunco" name="ConcluidoTrunco" style="width:100%;" >
									<option>Concluido</option>
									<option>Trunco</option>
									

								</select>

							</div>
							<div class="col-md-2" >
								<label>Cedula</label>
								<input  type="text" class="form-control success" id="Cedula" name="Cedula"  >

							</div>
							

							
							
							
							

						</div>




						<div class="form-group row">
							
							<div class="col-md-12">
								<b><center><h6>Contacto</h6> </center></b>

							</div></br><br>

							<div class="col-md-2" >
								<label>Telefono 1(Cliente)</label>
								<input  type="text" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  class="form-control success" id="Telefono_1" name="Telefono_1"  >

							</div>

							<div class="col-md-2">
								<label>Telefono 2(Recados)</label>
								<input  type="text" class="form-control" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  id="Telefono_3" name="Telefono_3"  >
							</div>
							

							<div class="col-md-4" >
								<label>Correo electr??nico<span class="required-label">*</span></label>
								<input  type="mail" required="" class="form-control success" id="Correo" name="Correo"  >

							</div>
							<div class="col-md-4" >
								<label>Contrase??a<span class="required-label">*</span></label>
								<input  type="password" required="" class="form-control success" id="password" name="password"  >

							</div>
							
							
							
						</div>

						<div class="form-group row " >
							
							<div class="col-md-12">
								<b><center><h6>Domicilio</h6> </center></b>

							</div></br><br>
							<div class="col-md-6">
								<label>Calle</label>
								<input  type="text" class="form-control" id="Calle" name="Calle"  >
							</div>
							<div class="col-md-2">
								<label>Num. Exterior</label>
								<input  type="text" class="form-control" id="NExterior" name="NExterior"  >
							</div>
							<div class="col-md-2">
								<label>Num. Interior</label>
								<input  type="text" class="form-control" id="Ninterior" name="Ninterior"  >
							</div>

						</div>
						{{-- fin del row --}}
						{{-- inicio del row --}}

						<div class="form-group row " >
							<div class="col-md-2">
								<label>C??digo postal</label>
								<input  type="text" class="form-control" id="CodigoPostal" name="CodigoPostal" onkeyup="codigoPOstal()" >
							</div>

							<div class="col-md-3">
								<label>Colonia</label>
								<div class="select2-input">
									<select id="Colonia" name="Colonia"  class="form-control" style="width: 100%;">
										<div id="coloniaoption"></div>
										
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<label>Alcald??a/Municipio</label>
								<input  type="text" class="form-control" id="Municipio" name="Municipio"  >
							</div>
							<div class="col-md-3">
								<label>Localidad/Poblacion/Ciudad</label>
								<input  type="text" class="form-control" id="Poblacion" name="Poblacion"  >
							</div>

						</div>

						{{-- fin del row --}}
						{{-- inicio del row --}}

						<div class="form-group row " >
							<div class="col-md-3">
								<label>Estado</label>
								<input  type="text" class="form-control" id="Estado" name="Estado"  >
							</div>
							<div class="col-md-6">
								<label>Referencia domiciliaria (Ejem: Color de la casa, entre que calles se ubica,etc.)</label>
								<textarea id="Referencia" class="form-control" name="Referencia"  ></textarea>
							</div>
							<div class="col-md-3">
								<label>Geolocalizaci??n (Link Google Maps)</label>
								<input  type="text" class="form-control" id="Geolocalizaci??n" name="Geolocalizaci??n"  >
							</div>


						</div>
						<div class="form-group row " >
							<div class="col-md-2">
								<label>Fecha de ingreso</label>
								<input  type="date" class="form-control" id="ingreso" name="ingreso"  >
							</div>
							<div class="col-md-2">
								<label>??rea</label>
								<input  type="text" class="form-control" id="??rea" name="??rea"  >
							</div>
							<div class="col-md-2">
								<label>Ubicaci??n de la Oficina</label>
								<input  type="text" class="form-control" id="Ubicaci??n" name="Ubicaci??n"  >
							</div>
							<div class="col-md-2">
								<label>Tipo de contrato</label>
								<select required="" id="TipoContrato" name="TipoContrato"  class="form-control" style="width: 100%;">
										<option value="Determinado">Determinado</option>
										<option value="Por Obra">Por Obra</option>
										<option value="Indeterminado">Indeterminado</option>
										
									</select>
							</div>
							<div class="col-md-3" >
							<label for="name" class="text-right">Puesto <span class="required-label">*</span></label>
								<div >
									<select  name="rolesuser[]" id="rolesuser" class="form-control multrol" multiple="multiple" required>
										@foreach($roles as $rol)
										<option value="{{ $rol->name }}">{{$rol->name}}</option>
										@endforeach							
									</select>
									
								</div>
							</div>
						</div>
						<div class="form-group row " >

							<div class="col-md-2">
								<label>Sueldo Semanal<span class="required-label">*</span></label>
								<input required=""  type="text" class="form-control" onkeyup="calculaSalario()" id="SueldoSemanal" name="SueldoSemanal"  >
							</div>
							<div class="col-md-2">
								<label>Sueldo Diario</label>
								<input  type="text" class="form-control" id="SueldoDiario" name="SueldoDiario"  disabled>
							</div>
							<div class="col-md-2">
								<label>Sueldo Mensual</label>
								<input  type="text" class="form-control" id="SueldoMensual" name="SueldoMensual" disabled >
							</div>
							<div class="col-md-2">

								<input  type="hidden" class="form-control" id="bton" name="bton" value="Registrar" >
							</div>


						</div>

						
						
						{{-- fin del row --}}




						<div class="card-footer">{{-- inicio del row --}}
							<div class="row">
								<div class="col-md-12">
									<center>
										<input type="submit" class="btn btn-success"  id="Registrar" value="Registrar">
									</center>
								</div>
							</div>
							<div class="row" >
								<div class="col-md-12">
									<center>
										<input type="submit" style="display:none;" class="btn btn-success" id="Actualizar" value="Actualizar">
									</center>
								</div>
							</div>

						</div>

					</div>
				</form>



				



				</div>


			</div>
		</div>


		@endsection

		@section('jscustom')
		<script type="text/javascript">
			$('#rolesuser').select2({
		theme: "bootstrap",
	});
			function limpiarDatosval(){
				$('#Nombre').val('');
						           $('#Apellido_Paterno').val('');
						           $('#Apellido_Materno').val('');
						           $('#G??nero').val('');
						           $('#Nacionalidad').val('');
						           $('#CURP').val('');
						           $('#RFC').val('');
						           $('#NSS').val('');
						           $('#Estado_civil').val('');
						           $('#dependiente').val('');
						           $('#Hijosdependiente').val('');
						           $('#estudio').val('');
						           $('#rolesuser').val('');
						           $('#Especialidad').val('');
						           $('#ConcluidoTrunco').val('');
						           $('#Cedula').val('');
						           $('#Telefono_1').val('');
						           $('#Telefono_3').val('');
						           $('#fechaNac').val('');
						           
						           $('#Calle').val('');
						           $('#CodigoPostal').val('');
						           $('#Ninterior').val('');
						           $('#NExterior').val('');
						           $('#Colonia').val('');
						           $('#Municipio').val('');
						           $('#Estado').val('');
						           $('#Referencia').val('');
						           $('#Geolocalizaci??n').val('');
						           $('#ingreso').val('');
						           $('#??rea').val('');
						           $('#Ubicaci??n').val('');
						           $('#TipoContrato').val('');
						           $('#SueldoSemanal').val('');
						           $('#estatus').val('');
								$('#ponerFoto').attr("src","{{url('assets/img/profile.png')}}");
								$('#Registrar').css("display","block");
						            $('#Actualizar').css("display","none");

						           $('#bton').val('Registrar');
						            
			}
			function buscarUser(){
				if($('#NclienteHide').val() != "" ){
					$.ajax({
						data:  {
							"NclienteHide":$('#NclienteHide').val(),
						}, 
						 async: true,
						url:   "{{url('user/validaExistencia')}}",
						type:  'get',
						success:  function (data) { 

						console.log(data);

							if(data.length>0){
								if(data[0].Foto==""){
								$('#ponerFoto').attr("src","{{url('assets/img/profile.png')}}");

								}else{
									$('#ponerFoto').attr("src","{{url('archivero')}}/"+ data[0].Foto );
								}

								   $('#Nombre').val(data[0].Nombre);
						           $('#Apellido_Paterno').val(data[0].Apellido_Paterno);
						           $('#Apellido_Materno').val(data[0].Apellido_Materno);
						           $('#G??nero').val(data[0].G??nero);
						           $('#Nacionalidad').val(data[0].Nacionalidad);
						           $('#CURP').val(data[0].CURP);
						           $('#RFC').val(data[0].RFC);
						           $('#NSS').val(data[0].NSS);
						           $('#Estado_civil').val(data[0].Estado_civil);
						           $('#dependiente').val(data[0].dependiente);
						           $('#Hijosdependiente').val(data[0].Hijosdependiente);
						           $('#estudio').val(data[0].estudio);
						           $('#rolesuser').val(data[0].rolesuser);
						           $('#Especialidad').val(data[0].Especialidad);
						           $('#ConcluidoTrunco').val(data[0].ConcluidoTrunco);
						           $('#Cedula').val(data[0].Cedula);
						           $('#Telefono_1').val(data[0].Telefono_1);
						           $('#Telefono_3').val(data[0].Telefono_2);
						           $('#fechaNac').val(data[0].fechaNac);

						           $('#Calle').val(data[0].Calle);
						           codigoPOstal2(data[0].CodigoPostal,data[0].Colonia , data[0].Municipio , data[0].Estado ,  data[0].Poblacion);
						           $('#Ninterior').val(data[0].Ninterior);
						           $('#NExterior').val(data[0].NExterior);
						           $('#Referencia').val(data[0].Referencia);
						           $('#Geolocalizaci??n').val(data[0].Geolocalizaci??n);
						           $('#ingreso').val(data[0].ingreso);
						           $('#??rea').val(data[0].??rea);
						           $('#Ubicaci??n').val(data[0].Ubicaci??n);
						           $('#TipoContrato').val(data[0].TipoContrato);
						           $('#SueldoSemanal').val(data[0].SueldoSemanal);
						           $('#estatus').val(data[0].estatus);

						           $('#Correo').val(data[0].email);
						           $('#bton').val('Actualizar');
						           var html="";
						           saberEdad();


						           $('#rolesuser').attr("disabled","");
						           $('#Correo').attr("disabled","");
						           $('#password').attr("disabled","");
						            $('#Registrar').css("display","none");
						            $('#Actualizar').css("display","block");



								
								mensaje('success','Usuario ya existe en la base de datos!!');
							}else{

								limpiarDatosval();
								
							}


						},
					});
				}else{
					limpiarDatosval();
				}
				

				
			}

			$('#list_user2').DataTable({
				scrollX:  false,
				scrollCollapse: true,
				filter: true,
				lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
				iDisplayLength: 7,
				"language" : {
					"lengthMenu" : "Mostrar _MENU_ datos",
					"zeroRecords" : "No existe el dato introducido",
					"info" : "P??gina _PAGE_ de _PAGES_ ",
					"infoEmpty" : "Sin datos disponibles",
					"infoFiltered": "(mostrando los datos filtrados: _MAX_)",
					"paginate" : {
						"first": "Primero",
						"last": "Ultimo",
						"next": "Siguiente",
						"previous": "Anterior"
					},
					"search": "Buscar",
					"processing" : "Buscando...",
					"loadingRecords" : "Cargando..."
				}
			});
			function calculaSalario(){
				$('#SueldoDiario').val($('#SueldoSemanal').val() / 7)
				$('#SueldoMensual').val(($('#SueldoSemanal').val() /7 ) *30 )
			}
			var ncontrato='';
			

			$( function() {
				$( "#slider" ).slider({
					range: "min",
					max: 100,
					value: 40,
				});
				$( "#slider-range" ).slider({
					range: true,
					min: 0,
					max: 500,
					values: [ 75, 300 ]
				});
			} );








			$('#list_user').DataTable({
				scrollX:  false,
				scrollCollapse: true,
				filter: true,
				lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
				iDisplayLength: 7,
				"language" : {
					"lengthMenu" : "Mostrar _MENU_ datos",
					"zeroRecords" : "No existe el dato introducido",
					"info" : "P??gina _PAGE_ de _PAGES_ ",
					"infoEmpty" : "Sin datos disponibles",
					"infoFiltered": "(mostrando los datos filtrados: _MAX_)",
					"paginate" : {
						"first": "Primero",
						"last": "Ultimo",
						"next": "Siguiente",
						"previous": "Anterior"
					},
					"search": "Buscar",
					"processing" : "Buscando...",
					"loadingRecords" : "Cargando..."
				}
			});

			function cambiarrecomendohiden(){

				if($('#Amigos').prop('checked') ){
					$('#recomendohiden').css('display','block');
				}else{
					$('#recomendohiden').css('display','none');
				}
			}

			function cambiarOtrohiden(){
				
				if($('#Otro').prop('checked') ){
					$('#Otrohiden').css('display','block');
				}else{
					$('#Otrohiden').css('display','none');
				}
			}

			function saberEdad(){
				
				$.ajax({
					data:  {
						"Fecha":$('#fechaNac').val(),

					}, 
					url:   "{{url('calcular/fechaNac')}}",
					type:  'get',
					success:  function (data) { 
						console.log(0);
						$('#Edad').val(data[0].edad);
						$('#EdadActualiza').val(data[0].edad);
					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 
						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});
				
			}
			function validaAdquisicion(){

				var Adquisici??n=$("#Adquisici??n").val();
				if(Adquisici??n=="Financiado"){
					$("#CostoTotal").val(financiado);

					$("#Nparcialidades").val(parcialidades);

					$("#MontoMensual").prop('disabled', false);
					$("#Telefono_2").prop('disabled', false);
					$("#FechaPago").prop('disabled', false);

					$("#FechaPago option[value='0']").attr("selected",false);
				}else if(Adquisici??n=="Contado"){

					$("#CostoTotal").val(contado);

					$("#Nparcialidades").val("");
					$("#FechaPago option[value='0']").attr("selected",true);

					$("#MontoMensual").prop('disabled', true);
					$("#Telefono_2").prop('disabled', true);
					$("#FechaPago").prop('disabled', true);
					$("#Telefono_2").val('');
					$("#Nparcialidades").val('');
					$("#MontoMensual").val('');

				}else{

					$("#CostoTotal").val("");
					$("#Fecha_Venta").val("");
					$("#Enganche").val("");
					$("#Fecha_Contrato").val("");
					$("#Superficie").val("");
					$("#TipoSuperficie").val("");
					$("#TipoPredio").val("");
					$("#Vendedor").val("");
					$("#Nparcialidades").val("");
					$("#MontoMensual").val("");
					$("#Telefono_2").val("");
					$("#Porcentaje").val("");

					$("#MontoMensual").prop('disabled', false);
					$("#Telefono_2").prop('disabled', false);
					$("#FechaPago").prop('disabled', false);

					$("#FechaPago option[value='0']").attr("selected",false);
				}
			}
			var contado;
			var financiado;
			var parcialidades;
			function autoRellena(){
				$.ajax({
					data:  {
						"proyecto":$('#proyecto').val(),
						"Mz":$('#Mz').val(),
						"Lote":$('#Lote').val(),
						"NclienteHide":numcliente,

					}, 
					url:   "{{url('cliente/buscaLote')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);

						if(data=="no existe"){
							$("#Superficie").val("");
							$("#TipoSuperficie option").removeAttr("selected");
							$("#TipoPredio option").removeAttr("selected");
							$("#Vendedor option").removeAttr("selected");
							contado="";
							financiado="";
							mensaje('danger','Lote no encontrado');
						}else{
							contado=data[0].CostoContadoTotal;
							financiado=data[0].CostoFinanciadoTotal;
							parcialidades=data[0].plazo;
							$("#Superficie").val(data[0].superficie);
							$("#TipoSuperficie").val(data[0].TipoSuperficie);
							$("#TipoPredio").val(data[0].TipoPredio);
							$("#Vendedor").val(data[0].idElemento);
							$("#Nparcialidades").val(data[0].plazo);
							$("#Enganche").val(data[0].enganche);
							var financiado2=financiado;
				financiado2 = financiado2.replace(/,/g, "");
							var parcialidades2=parcialidades;
				parcialidades2 = parcialidades2.replace(/,/g, "");

							console.log(financiado2+' '+parcialidades2);

							$("#MontoMensual").val(Intl.NumberFormat('es-MX').format(financiado2 / parcialidades2));




							if (data[0].TipoVenta=="Contado y Financiado") {

								$("#MontoMensual").prop('disabled', false);
								$("#Telefono_2").prop('disabled', false);
								$("#FechaPago").prop('disabled', false);
								$("#FechaPago option[value='0']").attr("selected",false);
								$("#CostoTotal").val(financiado);
								$("#Nparcialidades").val(data[0].plazo);
								$("#Adquisici??n").html("<option>Financiado</option><option>Contado</option>");


							}else if(data[0].TipoVenta=="Financiado"){

								$("#CostoTotal").val(data[0].CostoFinanciadoTotal);
								$("#Nparcialidades").val(data[0].plazo);
								$("#MontoMensual").prop('disabled', false);
								$("#Telefono_2").prop('disabled', false);
								$("#FechaPago").prop('disabled', false);
								$("#FechaPago option[value='0']").attr("selected",false);
								$("#Adquisici??n").html("<option>Financiado</option>");

								


							}else if(data[0].TipoVenta=="Contado"){

								$("#Nparcialidades").val("");
								$("#CostoTotal").val(data[0].CostoContadoTotal);
								$("#FechaPago option[value='0']").attr("selected",true);
								$("#MontoMensual").prop('disabled', true);
								$("#Telefono_2").prop('disabled', true);
								$("#FechaPago").prop('disabled', true);
								$("#Telefono_2").val('');
								$("#Nparcialidades").val('');
								$("#MontoMensual").val('');
								$("#Adquisici??n").html("<option>Contado</option>");


							}
							mensaje("success","Lote Encontrao");


						}


					},
				});
			}
			var numcliente;
			function validaExistencia(){
				if($('#Nombre').val()==""){
					$('#validaN').css("display", "block");
				}else{$('#validaN').css("display", "none");	}
				if($('#Apellido_Paterno').val()==""){
					$('#validaP').css("display", "block");
				}else{$('#validaP').css("display", "none");	}
				if($('#Apellido_Materno').val()==""){
					$('#validaM').css("display", "block");
				}else{$('#validaM').css("display", "none");	}
				if($('#Nombre').val()=="" || $('#Apellido_Paterno').val()=="" || $('#Apellido_Materno').val()==""){

					mensaje('danger','Es necesario llenar el campos obligatorios  ');

					$('#Foto').css("display", "none");
					$('#clienteid').css("display", "none");
				}else{
					$.ajax({
						data:  {
							"Nombre":$('#Nombre').val(),
							"Apellido_Paterno":$('#Apellido_Paterno').val(),
							"Apellido_Materno":$('#Apellido_Materno').val(),
						}, 
						url:   "{{url('cliente/validaExistencia')}}",
						type:  'get',
						success:  function (data) { 

					$('#Foto').css("display", "block");
					$('#clienteid').css("display", "block");
							console.log(data);
							$('#Ncliente').html(data[0].N_Cliente);
							$('#NclienteHide').html(data[0].N_Cliente);
							numcliente=data[0].N_Cliente;

							if(data=="no existe"){
								
								$('#ponerFoto').attr("src","{{url('assets/img/profile.png')}}");
								$('#FotoInput').css("display", "block");
								$('#validaexiste').css("display", "block");
								$('#validaExisteContrato').css("display", "none");
							}else{
								$('#ponerFoto').attr("src","{{url('archivero')}}/"+ data[0].Foto );
								$('#FotoInput').css("display", "none");
								$('#validaexiste').css("display", "none");
								$('#validaExisteContrato').css("display", "block");
								tratos();
								mensaje('success','Usuario ya existe en la base de datos!!');
							}


						},
					});
				}
			}
			var numeroCostoTotal;

			function tratos(){
				$('#list_user2').DataTable().destroy();
				$.ajax({
					data:  {
						"numcliente":numcliente,
					}, 
					url:   "{{url('buscar/tratos')}}",
					type:  'get',
					success:  function (response) { 
						console.log(response);
						var html;

						if(response=="no existe"){
$('#llenaTabla2').html("");
						$('#llenaTabla2').html("No tiene contratos por concluir");
						}else{

							for (var i = 0; i < response.length; i++) {

								var idCliente='"'+response[i].idCliente+'"';
								var id_vendedor='"'+response[i].id_vendedor+'"';
								var proyecto='"'+response[i].proyecto+'"';
								var mz='"'+response[i].mz+'"';
								var lt='"'+response[i].lt+'"';
								var Observaciones='"'+response[i].Observaciones+'"';
								var created_at='"'+response[i].created_at+'"';
								html+="<tr>";
								html+="<td> <FONT  SIZE=2>"+response[i].idCliente+"</FONT></td>";
								html+="<td> <FONT  SIZE=2>"+response[i].id_vendedor+"</FONT></td>";
								html+="<td> <FONT  SIZE=2>"+response[i].proyecto+"</FONT></td>";
								html+="<td> <FONT  SIZE=2>"+response[i].mz+"</FONT></td>";
								html+="<td> <FONT  SIZE=2>"+response[i].lt+"</FONT></td>";
								html+="<td> <FONT  SIZE=2>"+response[i].Observaciones+"</FONT></td>";
								html+="<td> <FONT  SIZE=2>"+response[i].created_at+"</FONT></td>";
							//html+="<td><input type='submit' class='btn btn-success' value='Ver Detalles' onclick='abrirModal("+response[i].id_contratos+","+costocomilla+","+Enganchecomilla+","+FechaApartado+","+Apartado+","+FechaEnganche+","+ComplementoEnganche+","+DiaPago+","+vendedor+","+Comision1+","+Comision2+","+EstatusVenta+")'></td>";
							html+="</tr>";
						}$('#llenaTabla2').html("");
						$('#llenaTabla2').html(html);
						$('#list_user2').DataTable({
							scrollX:  false,
							scrollCollapse: true,
							filter: true,
							lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
							iDisplayLength: 7,
							"language" : {
								"lengthMenu" : "Mostrar _MENU_ datos",
								"zeroRecords" : "No existe el dato introducido",
								"info" : "P??gina _PAGE_ de _PAGES_ ",
								"infoEmpty" : "Sin datos disponibles",
								"infoFiltered": "(mostrando los datos filtrados: _MAX_)",
								"paginate" : {
									"first": "Primero",
									"last": "Ultimo",
									"next": "Siguiente",
									"previous": "Anterior"
								},
								"search": "Buscar",
								"processing" : "Buscando...",
								"loadingRecords" : "Cargando..."
							}
						});
					}


				},
			});
			}
			function cobranzaRegistra(){
				
				$.ajax({
					data:  {
						"FechaApartadoCo":$('#FechaApartadoCo').val(),
						"ApartadoCo":$('#ApartadoCo').val(),
						"NclienteHide":numcliente,
						"ncontrato":$('#numeroContr').val(),
						"FechaEngancheCo":$('#FechaEngancheCo').val(),
						"ComEngancheCo":$('#ComEngancheCo').val(),
						"EngancheCobranzaCo":$('#EngancheCobranzaCo').val(),
						"CostodelLoteCo":$('#CostodelLoteCo').val(),
						"FechaPagoCCo":$('#FechaPagoCCo').val(),
						"VendedorCCo":$('#VendedorCCo').val(),
						
						"Comisi??n1Co":$('#Comisi??n1Co').val(),
						"Comisi??n2Co":$('#Comisi??n2Co').val(),
						"EstatusVentaCo":$('#EstatusVentaCo').val(),
					}, 
					url:   "{{url('alta/capturaCobranza')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						$('#modalCobranza').modal('hide');
						
						limpiar();
						$('#Fecha_Venta').val("")		
						$('#Fecha_Contrato').val("")
						$('#proyecto').val("")
						$('#Mz').val("")
						$('#Lote').val("")
						$('#Superficie').val("")
						$('#TipoSuperficie').val("")
						$('#TipoPredio').val("")
						$('#Vendedor').val("")
						$('#Adquisici??n').val("")
						$('#Nparcialidades').val("")
						$('#CostoTotal').val("")
						$('#Enganche').val("")
						$('#Comisi??n1').val("")
						$('#Comisi??n2').val("")
						$('#FechaPago').val("")
						$('#MontoMensual').val("")
						$('#Porcentaje').val("")
						$('#EstatusVenta').val("")
						mensaje('success','Registro exitoso!!');



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 

						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});
			}

			function numerico(){
				var TotalDevengado=$("#CostoTotal").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostoTotal").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function numerico2(){
				var TotalDevengado=$("#Enganche").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Enganche").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			
			function ApartadoFormato(){
				var TotalDevengado=$("#ApartadoCo").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#ApartadoCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function ComEngancheFormato(){
				var TotalDevengado=$("#ComEngancheCo").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#ComEngancheCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			
			function Comisi??n1Formato(){
				var TotalDevengado=$("#Comisi??n1").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Comisi??n1").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function Comisi??n2Formato(){
				var TotalDevengado=$("#Comisi??n2").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#Comisi??n2").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function MontoMensualFormato(){
				var TotalDevengado=$("#MontoMensual").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#MontoMensual").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			function CostodelLoteFormato(){
				var TotalDevengado=$("#CostodelLoteCo").val();
				TotalDevengado = TotalDevengado.replace(/,/g, "");
				$("#CostodelLoteCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
			}
			
			function actualizaDatos(){
				console.log(numcliente);

				$('#list_user').DataTable().destroy();
				$.ajax({
					data:  {
						"numcliente":numcliente,
					}, 
					url:   "{{url('cliente/ConsultaCliente')}}",
					type:  'get',
					success:  function (response) { 
						console.log(response);
						
							$('#Telefono_1Actualiza').val(response[0].Telefono1);
							$('#Telefono_3Actualiza').val(response[0].Telefono2);
							$('#CorreoActualiza').val(response[0].Correo);
							$('#CalleActualiza').val(response[0].Calle);
							$('#CodigoPostalActualiza').val(response[0].CP);
							$('#NinteriorActualiza').val(response[0].Ninterior);
							$('#NExteriorActualiza').val(response[0].Nexterior);
							$('#ColoniaActualiza').val(response[0].Colonia);
							$('#MunicipioActualiza').val(response[0].Municipio);
							$('#EstadoActualiza').val(response[0].Estado);
							$('#ReferenciaActualiza').html(response[0].Referencia);
							$('#CURPActualiza').val(response[0].CURP);
							$('#RFCActualiza').val(response[0].RFC);
							$('#fechaNacActualiza').val(response[0].fechaNac);
							$('#Ocupaci??nActualiza').val(response[0].Ocupaci??n);
							$('#PoblacionActualiza').val(response[0].Poblacion);
							//$('#RedesActualiza').val(response[0].id_contratos);
							//$('#Bolet??nActualiza').val(response[0].id_contratos);
							//$('#AmigosActualiza').val(response[0].id_contratos);
							//$('#AgentesActualiza').val(response[0].id_contratos);
							//$('#OtroActualiza').val(response[0].id_contratos);
							//$('#otrosActualiza').val(response[0].id_contratos);
							$('#Geolocalizaci??nActualiza').val(response[0].Geolocalizaci??n);
							$('#Estado_civilActualiza').val(response[0].Estado_civil);
							$('#G??neroActualiza').val(response[0].G??nero);
							$('#estudioActualiza').val(response[0].estudio);
							$('#dependienteActualiza').val(response[0].dependiente);
							$('#espectacularActualiza').val(response[0].espectacular);
							$('#QuienRecomendoActualiza').val(response[0].QuienRecomendo);
							$('#NacionalidadActualiza').val(response[0].Nacionalidad);
							$('#HijosdependienteActualiza').val(response[0].HijoDependiente);
							$('#IdenificacionActualiza').val(response[0].Identificacion);
							$('#NoIdentificaci??nActualiza').val(response[0].NoIdentificacion);
							 saberEdad();

					},
				});
			
			}
			function actualizaTabla(){
				console.log(numcliente);

				$('#list_user').DataTable().destroy();
				$.ajax({
					data:  {
						"numcliente":numcliente,
					}, 
					url:   "{{url('cliente/ConsultarContratos')}}",
					type:  'get',
					success:  function (response) { 
						console.log(response);
						var html="";
						for (var i = 0; i < response.length; i++) {
							html+="<tr>";
							html+="<td>"+response[i].id_contratos+"</td>";
							html+="<td>"+response[i].FechaVenta+"</td>";
							html+="<td>$"+response[i].Costo+"(MXN)</td>";
							html+="<td>"+response[i].ProyectoN+"</td>";
							html+="<td>"+response[i].Mz+"</td>";
							html+="<td>"+response[i].Lt+"</td>";
							html+="<td>"+response[i].Superficie+" m<sup>2</sup></td>";
							html+="<td><input type='submit' class='btn btn-success' value='Ver Detalles' onclick='abrirModal("+response[i].id_contratos+")'></td>";
							html+="</tr>";
						}
						$('#llenaTabla').html("");
						$('#llenaTabla').html(html);
						$('#list_user').DataTable({
							scrollX:  false,
							scrollCollapse: true,
							filter: true,
							lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
							iDisplayLength: 7,
							"language" : {
								"lengthMenu" : "Mostrar _MENU_ datos",
								"zeroRecords" : "No existe el dato introducido",
								"info" : "P??gina _PAGE_ de _PAGES_ ",
								"infoEmpty" : "Sin datos disponibles",
								"infoFiltered": "(mostrando los datos filtrados: _MAX_)",
								"paginate" : {
									"first": "Primero",
									"last": "Ultimo",
									"next": "Siguiente",
									"previous": "Anterior"
								},
								"search": "Buscar",
								"processing" : "Buscando...",
								"loadingRecords" : "Cargando..."
							}
						});

					},
				});
			} 
			function abrirModal(id_contrato){
				$.ajax({
					data:  {
						"id_contrato":id_contrato,
					}, 
					url:   "{{url('buscar/encontrarContrato')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						$('#Fecha_VentaH').val(data[0].FechaVenta);
						$('#Fecha_ContratoH').val(data[0].FechaContrato);
						$("#proyectoH option").removeAttr("selected");
						$("#proyectoH option[value='"+data[0].Proyecto+"']").attr("selected",true);

						$('#MzH').val(data[0].Mz);
						$('#LoteH').val(data[0].Lt);
						$('#SuperficieH').val(data[0].Superficie);
						$('#TipoSuperficieH').val(data[0].TipoSuperficie);
						$('#TipoPredioH').val(data[0].TipoPredio);
						$('#VendedorH').val(data[0].Vendedor);
						$('#Adquisici??nH').val(data[0].Adquisicion);
						$('#NparcialidadesH').val(data[0].N_Parcialidades);
						$('#CostoTotalH').val(data[0].Costo);
						$('#EngancheH').val(data[0].Enganche);
						$('#MontoMensualH').val(data[0].MontoMensual);
						$('#PorcentajeH').val(data[0].Interes);
						$('#contratoModal').html(data[0].id_contratos);
						$('#FechaPagoH').val(data[0].DiaPago);




					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});




				$('#modalDetalle').modal('show');
			}
			function validaRegistrarContrato(){
				var valida=0;
				if ($('#Fecha_Venta').val()!="") {
					$('#validaFecha_Venta').css('display','none');
					valida=valida+1;
				}else{
					$('#validaFecha_Venta').css('display','block');
				}
				if ($('#Enganche').val()!="") {
					$('#validaEnganche').css('display','none');
					valida=valida+1;
				}else{
					$('#validaEnganche').css('display','block');
				}
				if ($('#Fecha_Contrato').val()!="") {
					$('#validaFecha_Contrato').css('display','none');
					valida=valida+1;
				}else{
					$('#validaFecha_Contrato').css('display','block');
				}
				if ($('#Mz').val()!="") {
					$('#validaMz').css('display','none');
					valida=valida+1;
				}else{
					$('#validaMz').css('display','block');
				}
				if ($('#Lote').val()!="") {
					$('#validaLote').css('display','none');
					valida=valida+1;
				}else{
					$('#validaLote').css('display','block');
				}
				if ($('#Superficie').val()!="") {
					$('#validaSuperficie').css('display','none');
					valida=valida+1;
				}else{
					$('#validaSuperficie').css('display','block');
				}
				if ($('#Nparcialidades').val()!="") {
					$('#validaNparcialidades').css('display','none');
					valida=valida+1;
				}else{
					$('#validaNparcialidades').css('display','block');
				}
				if ($('#CostoTotal').val()!="") {
					$('#validaCostoTotal').css('display','none');
					valida=valida+1;
				}else{
					$('#validaCostoTotal').css('display','block');
				}
				if ($('#MontoMensual').val()!="") {
					$('#validaMontoMensual').css('display','none');
					valida=valida+1;
				}else{
					$('#validaMontoMensual').css('display','block');
				}
				if ($('#Telefono_2').val()!="" ) {
					$('#validaTelefono_2').css('display','none');
					valida=valida+1;
				}else{
					$('#validaTelefono_2').css('display','block');
				}
				if ($('#Porcentaje').val()!="" ) {
					$('#validaPorcentaje').css('display','none');
					valida=valida+1;
				}else{
					$('#validaPorcentaje').css('display','block');
				}
				console.log(valida);
				return valida;
			}
			function RegistrarContrato(){
				if($('#Adquisici??n').val()=="Contado"){

					$('#validaNparcialidades').css('display','none');
					$('#validaMontoMensual').css('display','none');
					$('#validaTelefono_2').css('display','none');
					$.ajax({
						data:  {
							"Fecha_Venta":$('#Fecha_Venta').val(),
							"Enganche":$('#Enganche').val(),
							"NclienteHide":numcliente,
							"Fecha_Contrato":$('#Fecha_Contrato').val(),
							"proyecto":$('#proyecto').val(),
							"Mz":$('#Mz').val(),
							"Lote":$('#Lote').val(),
							"Superficie":$('#Superficie').val(),
							"TipoSuperficie":$('#TipoSuperficie').val(),
							"TipoPredio":$('#TipoPredio').val(),
							"Vendedor":$('#Vendedor').val(),
							"Adquisici??n":$('#Adquisici??n').val(),
							"Nparcialidades":$('#Nparcialidades').val(),

							"CostoTotal":$('#CostoTotal').val(),
							"FechaPago":$('#FechaPago').val(),
							"MontoMensual":$('#MontoMensual').val(),
							"Porcentaje":$('#Porcentaje').val(),
							"Telefono_2":$('#Telefono_2').val(),
						}, 
						url:   "{{url('alta/capturaContratos')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							ncontrato=data;


							$('#numeroContr').val(data);
							$('#numeroContr').val(ncontrato);

							$('#modalCobranza').modal('show');

						//limpiar();
						$('#Fecha_Venta').val("")		
						$('#Fecha_Contrato').val("")
						$('#proyecto').val("")
						$('#Mz').val("")
						$('#Lote').val("")
						$('#Superficie').val("")
						$('#TipoSuperficie').val("")
						$('#TipoPredio').val("")
						$('#Vendedor').val("")
						$('#Adquisici??n').val("")
						$('#Nparcialidades').val("")
						$('#CostoTotal').val("")
						$('#Enganche').val("")
						$('#Comisi??n1').val("")
						$('#Comisi??n2').val("")
						$('#FechaPago').val("")
						$('#MontoMensual').val("")
						$('#Porcentaje').val("")
						$('#EstatusVenta').val("")
						$('#Telefono_2').val("")

						mensaje('success','Registro exitoso!!');



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 

						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});

				}else if($('#Adquisici??n').val()=="Financiado"){
					$.ajax({
						data:  {
							"Fecha_Venta":$('#Fecha_Venta').val(),
							"Enganche":$('#Enganche').val(),
							"NclienteHide":numcliente,
							"Fecha_Contrato":$('#Fecha_Contrato').val(),
							"proyecto":$('#proyecto').val(),
							"Mz":$('#Mz').val(),
							"Lote":$('#Lote').val(),
							"Superficie":$('#Superficie').val(),
							"TipoSuperficie":$('#TipoSuperficie').val(),
							"TipoPredio":$('#TipoPredio').val(),
							"Vendedor":$('#Vendedor').val(),
							"Adquisici??n":$('#Adquisici??n').val(),
							"Nparcialidades":$('#Nparcialidades').val(),

							"CostoTotal":$('#CostoTotal').val(),
							"FechaPago":$('#FechaPago').val(),
							"MontoMensual":$('#MontoMensual').val(),
							"Porcentaje":$('#Porcentaje').val(),
							"Telefono_2":$('#Telefono_2').val(),
						}, 
						url:   "{{url('alta/capturaContratos')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							$('#modalCobranza').modal('show');

						//limpiar();
						$('#Fecha_Venta').val("")		
						$('#Fecha_Contrato').val("")
						$('#proyecto').val("")
						$('#Mz').val("")
						$('#Lote').val("")
						$('#Superficie').val("")
						$('#TipoSuperficie').val("")
						$('#TipoPredio').val("")
						$('#Vendedor').val("")
						$('#Adquisici??n').val("")
						$('#Nparcialidades').val("")
						$('#CostoTotal').val("")
						$('#Enganche').val("")
						$('#Comisi??n1').val("")
						$('#Comisi??n2').val("")
						$('#FechaPago').val("")
						$('#MontoMensual').val("")
						$('#Porcentaje').val("")
						$('#EstatusVenta').val("")
						mensaje('success','Registro exitoso!!');



					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 

						$('#modalCobranza').modal('show');
						mensaje('danger','Algo salio mal, intentelo mas tarde!!');
					}   
				});

				}
				
				
			}
			function Registrar(){
				if($('#Nombre').val()==""){
					$('#validaN').css("display", "block");
				}else{$('#validaN').css("display", "none");	}
				if($('#Apellido_Paterno').val()==""){
					$('#validaP').css("display", "block");
				}else{$('#validaP').css("display", "none");	}
				if($('#Apellido_Materno').val()==""){
					$('#validaM').css("display", "block");
				}else{$('#validaM').css("display", "none");	}
				if($('#Nombre').val()=="" || $('#Apellido_Paterno').val()=="" || $('#Apellido_Materno').val()==""){

					mensaje('danger','Es necesario llenar el campos obligatorios  ');
				}else{
					$.ajax({
						data:  {
							"Nombre":$('#Nombre').val(),
							"Apellido_Paterno":$('#Apellido_Paterno').val(),
							"Apellido_Materno":$('#Apellido_Materno').val(),
							"Telefono_1":$('#Telefono_1').val(),
							"Telefono_2":$('#Telefono_3').val(),
							"Correo":$('#Correo').val(),
							"Calle":$('#Calle').val(),
							"CodigoPostal":$('#CodigoPostal').val(),
							"Ninterior":$('#Ninterior').val(),
							"NExterior":$('#NExterior').val(),
							"Colonia":$('#Colonia').val(),
							"Municipio":$('#Municipio').val(),
							"Estado":$('#Estado').val(),
							"Referencia":$('#Referencia').val(),
							"CURP":$('#CURP').val(),
							"RFC":$('#RFC').val(),
							"fechaNac":$('#fechaNac').val(),
							"Ocupaci??n":$('#Ocupaci??n').val(),
							"Poblacion":$('#Poblacion').val(),
							"Redes":$('#Redes').val(),
							"Bolet??n":$('#Bolet??n').val(),
							"Amigos":$('#Amigos').val(),
							"Agentes":$('#Agentes').val(),
							"Otro":$('#Otro').val(),
							"otros":$('#otros').val(),
							"Geolocalizaci??n":$('#Geolocalizaci??n').val(),





							"Estado_civil":$('#Estado_civil').val(),
							"G??nero":$('#G??nero').val(),
							"estudio":$('#estudio').val(),
							"dependiente":$('#dependiente').val(),
							"espectacular":$('#espectacular').val(),
							"QuienRecomendo":$('#QuienRecomendo').val(),

							"Nacionalidad":$('#Nacionalidad').val(),
							"Hijosdependiente":$('#Hijosdependiente').val(),
							"Idenificacion":$('#Idenificacion').val(),
							"NoIdentificaci??n":$('#NoIdentificaci??n').val(),


							
						}, 
						url:   "{{url('alta/capturaCliente')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							limpiar();
							if(data=="listo"){
								mensaje('success','registro exitoso!!');
							}else{

								mensaje('danger','usuario ya existe!!');
							}


						},
					});
				}

			}
			function codigoPOstal2(cp,Colonia,Municipio,Estado,Poblacion){
				console.log(cp);
				if(cp.length == 5){
					$.ajax({
						data:  {
							"codigo":cp,
						}, 
						 async: true,
						url:   "{{url('consulta/codigoPostal')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);

						           $('#CodigoPostal').val(cp);
							var html='';
							console.log(data.length);
							for (var i = 0; i < data.length; i++) {
								html+='<option>'+data[i].colonia+'</option>';
								
							}

							$('#Colonia').html(html);
							 $('#Colonia').val(Colonia);
						           $('#Municipio').val(Municipio);
						           $('#Poblacion').val(Poblacion);
						           $('#Estado').val(Estado);

						},
					});
				}else{

				}
				
			}
			function codigoPOstal(){
				if($('#CodigoPostal').val().length == 5){
					$.ajax({
						data:  {
							"codigo":$('#CodigoPostal').val(),
						}, 
						url:   "{{url('consulta/codigoPostal')}}",
						type:  'get',
						success:  function (data) { 
							console.log(data);
							
							$('#Estado').val(data[0].estado);
							$('#Municipio').val(data[0].municipio);
							$('#Poblacion').val(data[0].ciudad);
							var html='';
							console.log(data.length);
							for (var i = 0; i < data.length; i++) {
								html+='<option>'+data[i].colonia+'</option>';
								
							}
							$('#Colonia').html(html);
							console.log(html);
						},
					});
				}else{

				}
				
			}
			function limpiar(){

				$('#Nombre').val("");
				$('#Apellido_Paterno').val("");
				$('#Apellido_Materno').val("");
				$('#Telefono_1').val("");
				$('#Telefono_2').val("");
				$('#Telefono_3').val("");
				$('#Correo').val("");
				$('#Calle').val("");
				$('#CodigoPostal').val("");
				$('#Ninterior').val("");
				$('#NExterior').val("");
				$('#Colonia').html("");
				$('#Municipio').val("");
				$('#Estado').val("");
				$('#Referencia').val("");
				$('#EnteroNosotros').val("");
				$('#otros').val("");
				$('#CURP').val("");
				$('#RFC').val("");
				$('#fechaNac').val("");
				$('#Ocupaci??n').val("");
				$('#Poblacion').val("");


				$('#Fecha_Venta').val("")								
				numcliente=0;
				$('#Fecha_Contrato').val("")
				$('#proyecto').val("")
				$('#Mz').val("")
				$('#Lote').val("")
				$('#Superficie').val("")
				$('#TipoSuperficie').val("")
				$('#TipoPredio').val("")
				$('#Vendedor').val("")
				$('#Adquisici??n').val("")
				$('#Nparcialidades').val("")
				$('#CostoTotal').val("")
				$('#Enganche').val("")
				$('#Comisi??n1').val("")
				$('#Comisi??n2').val("")
				$('#FechaPago').val("")
				$('#MontoMensual').val("")
				$('#Porcentaje').val("")
				$('#EstatusVenta').val("")


				$('#Estado_civil').val("");
				$('#G??nero').val("");
				$('#estudio').val("");
				$('#dependiente').val("");
				$('#espectacular').val("");
				$('#QuienRecomendo').val("");



				$("#Nombre").prop('disabled', false);
				$("#Apellido_Paterno").prop('disabled', false);
				$("#Apellido_Materno").prop('disabled', false);
				$('#validaexiste').css("display", "none");
				$('#validaExisteContrato').css("display", "none");

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
					content.title = 'Modulo Cliente';
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