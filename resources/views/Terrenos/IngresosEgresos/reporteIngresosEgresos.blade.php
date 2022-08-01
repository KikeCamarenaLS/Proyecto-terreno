@extends('template.header')

@section('content_header')
@stop

@section('content')


<div class="row" id="app">
	<body>
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Reporte de Ingresos y Egresos  </div>
					
				</div>
				
				
				<div class="card-body">
					{{-- inicio del row --}}

					<div class=" row " >
						<div class="col-md-4" >
						</div>
						<div class="col-md-4" >
							<label>Búsqueda por proyecto</label>
							<select class="form-control success" id="Busqueda" name="Busqueda"  >
								@foreach($proyectos as $proyecto)
								<option value="{{$proyecto->id_proyecto}}">{{$proyecto->proyecto}}</option>
								@endforeach
							</select> 
						</div>
						<div class="col-md-4" >


						</div>



					</div><br>
					<div class="row">
						<div class="col-md-12">
							<center>
								<input  type="submit" class="btn btn-success" value="Buscar" onclick="Buscar()">
							</center>
						</div>
					</div>
				
					<div class="form-group ">
						<div class="table-responsive" >
							<table class="table" id="list_user">
								<thead>
									<tr>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Fecha de pagare</center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Pagare </center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Mz </center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Lt</center> </th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 45%;"><center>Cliente/Concepto</center></th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Total</center></th>
										<th class="bg-danger sorting" style="color:#ffffff; width: 10%;"><center>Intereses</center></th>
									</tr>
								</thead>

								<tbody id="llenaTabla">


								</tbody>
							</table>
						</div>
					</div>




				</div>
				<div class="card-footer">{{-- inicio del row --}}
					<div class="row">

					</div>
					{{-- fin del row --}}
				</div>


			</div>


		</div>
	</div>


	@endsection

	@section('jscustom')
	<script type="text/javascript">

		function abrir_Popup() {
			var PagoMes=$('#Mensualidadintereses').val();
			var cantidadrecibida=parseFloat($('#cantidadrecibida').val());


			PagoMes = PagoMes.replace(/,/g, "");
			console.log(cantidadrecibida);
			console.log(PagoMes);
			if($('#utilizasaldofavor').val()=='No Utilizar'){
				if(cantidadrecibida>=PagoMes){
					console.log('entro');
					$.ajax({
						data:  {
							"cantidadrecibida":cantidadrecibida,
							"numeroContr":$('#numeroContr').val(),
							"saldofavor":$('#saldofavor').val(),
							"PagoMes":PagoMes,
							"interes":$('#interesgenerado').val(),
							"DiaPagos":$('#DiaPagos').val(),
							"utilizasaldofavor":$('#utilizasaldofavor').val(),
							"periodo":$('#PagoCorrespondienteDelAl').val(),

						}, 
						url:   "{{url('registrar/CobroMes')}}",
						type:  'get',
						success:  function (response) { 
							

								$('#mensajevalidapagos').html('<b style="color:green;">Registro Exitoso</b>')
								llenartablacobros($('#numeroContr').val(),response);
							

						},
					});
				}else{
					$('#mensajevalidapagos').html('<b style="color:red;">La cantidad que ingresaste es menor al pago del mes</b>');
				}
			}else if($('#utilizasaldofavor').val()=='Utilizar'){
				var cantidadrecibida=Math.floor($('#cantidadrecibida').val());
				var saldofavor=Math.floor($('#saldofavor').val());
				var suma=cantidadrecibida  + saldofavor;
				console.log(suma);
				if(suma >=PagoMes){
					$.ajax({
						data:  {
							"cantidadrecibida":$('#cantidadrecibida').val(),
							"numeroContr":$('#numeroContr').val(),
							"saldofavor":$('#saldofavor').val(),
							"PagoMes":PagoMes,
							"interes":$('#interesgenerado').val(),
							"DiaPagos":$('#DiaPagos').val(),
							"utilizasaldofavor":$('#utilizasaldofavor').val(),
							"periodo":$('#PagoCorrespondienteDelAl').val(),

						}, 
						url:   "{{url('registrar/CobroMes')}}",
						type:  'get',
						success:  function (response) { 
							
								$('#cantidadrecibida').val('');
								llenartablacobros($('#numeroContr').val(),response);
								$('#mensajevalidapagos').html('<b style="color:green;">Registro Exitoso</b>')
							

						},
					});
				}else{
					$('#mensajevalidapagos').html('<b style="color:red;">La cantidad que ingresaste es menor al pago del mes</b>')
				}
			}
			


		}

		function descargarPDF(id_contratos,no_pago) {
			var configuracion_ventana = "width=700,height=500,scrollbars=NO";

			

			objeto_window_referencia = window.open('{{url('crea/PDF/ComprobanteCobranza')}}'+'/'+id_contratos+'/'+no_pago, configuracion_ventana);
		}
		$('#list_user').DataTable({
			scrollX:  false,
			scrollCollapse: true,
			filter: true,
			lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
			iDisplayLength: 7,
			"aaSorting": [],
			"language" : {
				"lengthMenu" : "Mostrar _MENU_ datos",
				"zeroRecords" : "No existe el dato introducido",
				"info" : "Página _PAGE_ de _PAGES_ ",
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
		$('#list_user2').DataTable({
			scrollX:  false,
			scrollCollapse: true,
			filter: true,
			lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
			iDisplayLength: 7,
			"aaSorting": [],
			"language" : {
				"lengthMenu" : "Mostrar _MENU_ datos",
				"zeroRecords" : "No existe el dato introducido",
				"info" : "Página _PAGE_ de _PAGES_ ",
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
		function Buscar(){
			$('#list_user').DataTable().destroy();

			$.ajax({
				data:  {
					"Busqueda":$('#Busqueda').val(),
				}, 
				url:   "{{url('busqueda/realizarPagos/IngresosEgresos')}}",
				type:  'get',
				success:  function (response) { 
					console.log(response);
					var html="";
					var costocomilla="";
					var Enganchecomilla="";
					if(response.length==0){
						mensaje('danger','No se encontraron registros');
					}else{
						for (var i = 0; i < response.length; i++) {
							costocomilla='"'+response[i].Costo+'"';
							Enganchecomilla='"'+response[i].Enganche+'"';
							var FechaApartado='"'+response[i].FechaApartado+'"';

							var Apartado='"'+response[i].Apartado+'"';
							var FechaVenta='"'+response[i].FechaVenta+'"';
							var ComplementoEnganche='"'+response[i].ComplementoEnganche+'"';
							var DiaPago='"'+response[i].DiaPago+'"';
							var vendedor='"'+response[i].vendedor+'"';
							var Comision1='"'+response[i].Comision1+'"';
							var Comision2='"'+response[i].Comision2+'"';
							var EstatusVenta='"'+response[i].estatus+'"';
							var MontoMensual='"'+response[i].MontoMensual+'"';
							var N_Parcialidades='"'+response[i].N_Parcialidades+'"';
							var Interes='"'+response[i].Interes+'"';
							var saldofavor='"'+response[i].saldofavor+'"';



							html+="<tr>";
							html+="<td> <FONT  SIZE=2>"+response[i].created_at+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].no_pago+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Mz+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Lt+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].NombreCompleto+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].MontoMensual+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].pago_a_cubrir+"</FONT></td>";
							
							html+="</tr>";
						}$('#llenaTabla').html("");
						$('#llenaTabla').html(html);
						$('#list_user').DataTable({
							scrollX:  false,
							scrollCollapse: true,
							filter: true,
							lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
							iDisplayLength: 7,
			"aaSorting": [],
							"language" : {
								"lengthMenu" : "Mostrar _MENU_ datos",
								"zeroRecords" : "No existe el dato introducido",
								"info" : "Página _PAGE_ de _PAGES_ ",
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

						mensaje('success','registro exitoso!!');
					}



				},
			});
		}
		function EngancheCobranzaCof(){
			var TotalDevengado=$("#EngancheCobranzaCo").val();
			TotalDevengado = TotalDevengado.replace(/,/g, "");
			$("#EngancheCobranzaCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
		}
		function EngancheCobranzaCofvariable(variable){
			var TotalDevengado=variable
			TotalDevengado = TotalDevengado.replace(/,/g, "");
			$("#EngancheCobranzaCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
		}
		function CostodelLoteFormato(){
			var TotalDevengado=$("#CostodelLoteCo").val();
			TotalDevengado = TotalDevengado.replace(/,/g, "");
			$("#CostodelLoteCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
		}
		function CostodelLoteFormatoVariable(costo){
			var TotalDevengado=costo;
			TotalDevengado = TotalDevengado.replace(/,/g, "");
			$("#CostodelLoteCo").val(Intl.NumberFormat('es-MX').format(TotalDevengado));
		}
		function abrirModal(contrato,costo,EstatusVenta,DiaPago,MontoMensual,N_Parcialidades,Interes,saldofavor,FechaVenta){

			$('#modalCobranza').modal('show');
			$('#numeroContr').val(contrato);
			$('#situacionCompra').val(EstatusVenta);
			$('#PagoMes').val(MontoMensual);
			$('#PagosRealizados').val('0');
			$('#TotalPagos').val(N_Parcialidades);
			<?php date_default_timezone_set("America/Mexico_City"); $fechaPHP=date('Y-m-d');?>
							var fechahoy='<?php echo $fechaPHP ?>';

			$('#fechahoy').val(fechahoy);
			$('#FechaDelContrato').val(FechaVenta);



			$('#DiaPagos').val(DiaPago);
			console.log(FechaVenta);
			$('#fechaultimopago').val(FechaVenta);

			$('#interes').val(Interes);
			$('#numeroContr').val(contrato);
					

					$("#numeroContr").prop('disabled', true);
					$("#CostodelLoteCo").prop('disabled', true);
					$("#EngancheCobranzaCo").prop('disabled', true);
					llenartablacobros(contrato,Interes,DiaPago);
					//interesesGenerados();
					
				}
				function interesesGenerados(){

					var PagosRealizados=$('#PagosRealizados').val();
					var PagosRealizados=$('#PagosRealizados').val();
					PagosRealizados=PagosRealizados.substr(0,4);
					$.ajax({
								data:  {
									"Busqueda":$('#Busqueda').val(),
								}, 
								url:   "{{url('busqueda/realizarPagos')}}",
								type:  'get',
								success:  function (response) { 
									



								},
							});
		
				}
				function limpiaTabla2(){
					$('#list_user2').DataTable().destroy();
					$('#llenaTabla2').html("");
						$('#list_user2').DataTable({
							scrollX:  false,
							scrollCollapse: true,
							filter: true,
							lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
							iDisplayLength: 7,
							"aaSorting": [],
							"language" : {
								"lengthMenu" : "Mostrar _MENU_ datos",
								"zeroRecords" : "No existe el dato introducido",
								"info" : "Página _PAGE_ de _PAGES_ ",
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
				function llenartablacobros(contrato,Interes,DiaPago){
					$('#list_user2').DataTable().destroy();

			$.ajax({
				data:  {
					"contrato":contrato,
				}, 
				url:   "{{url('busqueda/pagosRealizadoscontrato')}}",
				type:  'get',
				success:  function (response) { 
					console.log(response);
					var html="";
					var costocomilla="";
					var Enganchecomilla="";
					
					if(response.length==0){
						mensaje('danger','No se encontraron registros de pagos');
						limpiaTabla2();
						
				//muestra los intereses cuando no tiene ningun pago
							var fecha_inicio=$('#FechaDelContrato').val();
							<?php date_default_timezone_set("America/Mexico_City"); $fechaPHP=date('Y-m-d');?>
							//var fechahoy=fcehaLimit;
							var fechahoy='<?php echo $fechaPHP ?>';
							var fechaanoultimo=fecha_inicio.substr(0,4);
							var fechaanohoy=fechahoy.substr(0,4);
							var resulanos= fechaanohoy - fechaanoultimo;
						console.log('intereses en anos '+resulanos);
							var fechamesultimo=fecha_inicio.substr(5,2);
							var fechameshoy=fechahoy.substr(5,2);
							var resulmes= fechameshoy - fechamesultimo;
						console.log('intereses en meses '+resulmes);
							var fechadiaultimo=fecha_inicio.substr(8,2);
							var fechadiahoy=fechahoy.substr(8,2);
							var resuldia=  fechadiahoy - fechadiaultimo;
						console.log('intereses en dias '+resuldia);
							var pagoalmes=$('#PagoMes').val();
							pagoalmes = pagoalmes.replace(/,/g, "");
							var porcentajeintere=parseInt($('#interes').val());
							porcentajeintere=porcentajeintere*.01;
							var totaldeinteresesjuntados=pagoalmes*porcentajeintere*(resulmes-parseInt(response.length));
							$('#interesgenerado').val( totaldeinteresesjuntados);
							var pagoalmes=$('#PagoMes').val();
							pagoalmes = pagoalmes.replace(/,/g, "");
							var sumaInteresesMensualidad=parseFloat(totaldeinteresesjuntados) + parseFloat(pagoalmes);
							$('#Mensualidadintereses').val( sumaInteresesMensualidad);

				//Termina muestra los intereses cuando no tiene ningun pago

 							var pagosRealzado=response.length;
							var LimiteFechaVentaMes=fecha_inicio;

							 //calculo para poner el periodo de fecha de cada pago 
							 var LimiteFechaVentaAyo=LimiteFechaVentaMes;
							 var realizadosmasmesoriginal=pagosRealzado+ parseInt(fecha_inicio.substr(5,2));
							 var delayo=parseInt(realizadosmasmesoriginal/12);
							 var alayo=parseInt((realizadosmasmesoriginal+1)/12);

							  var delmes=parseInt(realizadosmasmesoriginal%12);
							 var almes=parseInt((realizadosmasmesoriginal+1)%12);;

							  if(delmes<=9){
							 	delmes='0'+delmes;
							 }
							 if(almes<=9){
							 	almes='0'+almes;
							 }



							 LimiteFechaVentaAyo=parseInt(LimiteFechaVentaAyo.substr(0,4));//2022
							 var fechaPeriodoDel= (LimiteFechaVentaAyo+delayo)+'-'+delmes+'-'+fecha_inicio.substr(8,2);
							 var fechaPeriodoAl= (LimiteFechaVentaAyo+alayo)+'-'+almes+'-'+fecha_inicio.substr(8,2);
							 var ayodefechahoy=parseInt(fechahoy.substr(0,4));
							 var mesdefechahoy=parseInt(fechahoy.substr(5,2));
							 var diadefechahoy=parseInt(fechahoy.substr(8,2));



							// if () {}
						$('#PagoCorrespondienteDelAl').val(fechaPeriodoDel +' al '+fechaPeriodoAl);

							 // fin calculo para poner el periodo de fecha de cada pago 








					}else{

							$('#saldofavor').val(response[0].saldo_favor);
							$('#PagosRealizados').val(response.length );
							$('#TotalPagos').val(response[0].N_Parcialidades);
							$('#fechaultimopago').val(response[0].created_at);
							
							var fechaultimo=response[0].created_at;
							$('#DiaPagos').val(DiaPago);
					//Aqui comienza el calculo para mostrar los intereses generados
							var fecha_inicio=$('#FechaDelContrato').val();
							<?php date_default_timezone_set("America/Mexico_City"); $fechaPHP=date('Y-m-d');?>
											//var fechahoy=fcehaLimit;
							var fechahoy='<?php echo $fechaPHP ?>';

							var fechaanoultimo=fecha_inicio.substr(0,4);
							var fechaanohoy=fechahoy.substr(0,4);
							var resulanos= fechaanohoy - fechaanoultimo;
						console.log('intereses en anos '+resulanos);
							var fechamesultimo=fecha_inicio.substr(5,2);
							var fechameshoy=fechahoy.substr(5,2);
							var resulmes= fechameshoy - fechamesultimo;
						console.log('intereses en meses '+resulmes);
							var fechadiaultimo=fecha_inicio.substr(8,2);
							var fechadiahoy=fechahoy.substr(8,2);
							var resuldia=  fechadiahoy - fechadiaultimo;
						console.log('intereses en dias '+resuldia);

						var pagoalmes=$('#PagoMes').val();
						pagoalmes = pagoalmes.replace(/,/g, "");
						var porcentajeintere=parseInt($('#interes').val());
						porcentajeintere=porcentajeintere*.01;
						var totaldeinteresesjuntados=pagoalmes*porcentajeintere*(resulmes-parseInt(response.length));
						$('#interesgenerado').val( totaldeinteresesjuntados);

						var sumaInteresesMensualidad=parseFloat(totaldeinteresesjuntados) + parseFloat(pagoalmes);
							$('#Mensualidadintereses').val( sumaInteresesMensualidad);
						//Aqui termina el calculo para mostrar los intereses generados
						


						$('#PagoCorrespondienteDelAl').val( );

						
						
						var months; 
					months = (fechaanohoy - fechaanoultimo )* 12; 
					console.log(months);
					months -= parseInt(fechamesultimo) ; console.log(months);
					months += parseInt(fechameshoy); console.log(months);
					console.log(parseInt(fechadiahoy));
					console.log(parseInt(fechadiaultimo));
					if (parseInt(fechadiahoy) >=parseInt(fechadiaultimo)) {
						months++;
					}

						console.log('intereses en meses '+months);


							 var pagosRealzado=response.length;
							
							 //calculo para poner el periodo de fecha de cada pago 
							 var LimiteFechaVentaAyo=response[0].FechaVenta;
							 var realizadosmasmesoriginal=pagosRealzado+ parseInt(response[0].FechaVenta.substr(5,2));
							 var delayo=parseInt(realizadosmasmesoriginal/12);
							 var alayo=parseInt((realizadosmasmesoriginal+1)/12);

							  var delmes=parseInt(realizadosmasmesoriginal%12);
							 var almes=parseInt((realizadosmasmesoriginal+1)%12);;

							  if(delmes<=9){
							 	delmes='0'+delmes;
							 }
							 if(almes<=9){
							 	almes='0'+almes;
							 }



							 LimiteFechaVentaAyo=parseInt(LimiteFechaVentaAyo.substr(0,4));//2022

						$('#PagoCorrespondienteDelAl').val( (LimiteFechaVentaAyo+delayo)+'-'+delmes+'-'+response[0].FechaVenta.substr(8,2)+' al '+(LimiteFechaVentaAyo+alayo)+'-'+almes+'-'+response[0].FechaVenta.substr(8,2));

							 // fin calculo para poner el periodo de fecha de cada pago 


							 var sumaMeses=months%12;
							 var sumaAyo=parseInt(months/12);
							 console.log(sumaMeses+'-'+LimiteFechaVentaMes);
							 console.log(sumaAyo+'-'+LimiteFechaVentaAyo);
							 sumaMeses=sumaMeses+LimiteFechaVentaMes;
							 sumaAyo=sumaAyo+LimiteFechaVentaAyo;
							 if(sumaMeses<=9){
							 	sumaMeses='0'+sumaMeses;
							 }
							 var fcehaLimit=sumaAyo+'-'+ sumaMeses+'-'+response[0].FechaVenta.substr(8,2);
							//$('#LimitePagoFecha').val(fcehaLimit);
							
							
							//interesgenerado















						for (var i = 0; i < response.length; i++) {
							var cuenta=response.length - i;



							html+="<tr>";
							html+="<td> <FONT  SIZE=2>"+response[i].no_pago+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].nom_proyecto+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Mz+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].Lt+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].MontoMensual+"</FONT></td>";
							html+="<td> <FONT  SIZE=2>"+response[i].cantidadrecibida+"</FONT></td>";
							var colores=response[i].masmenos;
							if (colores.substr(0,1)=="+") {

							html+="<td> <FONT  SIZE=2 style='color:green;'>"+response[i].masmenos+"</FONT></td>";
							}else if (colores.substr(0,1)=="-") {

							html+="<td> <FONT  SIZE=2 style='color:red;'>"+response[i].masmenos+"</FONT></td>";
							}
							html+="<td> <FONT  SIZE=2><input type='submit' class='btn btn-success' value='PDF' onclick='descargarPDF("+ response[i].id_contratos +","+ response[i].no_pago +")' ></FONT></td>";
							
							html+="</tr>";
						}
						$('#llenaTabla2').html("");
						$('#llenaTabla2').html(html);
						$('#list_user2').DataTable({
							scrollX:  false,
							scrollCollapse: true,
							filter: true,
							lengthMenu:   [[7, 14, 21, 28, 35, -1], [7, 14, 21, 28, 35, "Todos"]],
							iDisplayLength: 7,
			"aaSorting": [],
							"language" : {
								"lengthMenu" : "Mostrar _MENU_ datos",
								"zeroRecords" : "No existe el dato introducido",
								"info" : "Página _PAGE_ de _PAGES_ ",
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








				function mensaje(color,mensaje){
					if(mensaje=="sin_mensaje"){

					}else{
						var placementFrom = $('#notify_placement_from option:selected').val();
						var placementAlign = $('#notify_placement_align option:selected').val();
						var state =color;
						var style = $('#notify_style option:selected').val();
						var content = {};

						content.message = mensaje;
						content.title = 'Cobranza';
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