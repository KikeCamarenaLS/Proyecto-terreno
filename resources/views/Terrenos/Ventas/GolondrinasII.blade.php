@extends('template.header')

@section('content_header')
@stop

@section('content')
<style type="text/css">
	th, td {
		border: 1px solid black;
		border-radius: 10px;
	}
</style>

<div class="row" id="app">
	<body onload="inicio()">
		<div class="col-md-12" >
			<div class="card">
				<div class="card-header">
					<div class="card-title">Ventas de Lotes</div>

				</div>


				<div class="card-body">
					{{-- inicio del row --}}


					{{-- fin del row --}}
					{{-- inicio del row --}}
					



					<div class="col-md-3">
						<label>Proyecto </label>
						<select class="form-control success"  id="proyectoH" onchange="cambiarProyecto()">
							@foreach($proyectos as $proyecto)
							<option value="{{$proyecto->id_proyecto}}" >{{$proyecto->proyecto}}</option>
							@endforeach
						</select>
					</div>



					<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header" id="headerModal" style="background-color:red; color: #ffffff;">

								</button>
							</div>
							<div class="modal-body" id="texto">

							</div>
							<div class="modal-footer" id="footerModal">

							</div>
						</div>
					</div>
				</div>



				<br>
				<center><h3>Golondrinas II</h3></center>
				<div class="row">
					<div class="col-md-2">
						<label>Disponible</label>
						<table>
							<tr>
								<td style="width: 30px; height:30px; background-color: rgb(105, 239, 67);">
									&nbsp;
								</td>
							</tr>

						</table>

					</div>
					<div class="col-md-2">
						<label>Apartado</label>
						<table>
							<tr>
								<td style="width: 30px; height:30px; background-color: yellow;">
									&nbsp;
								</td>
							</tr>

						</table>

					</div>
					<div class="col-md-2">
						<label>Vendido</label>
						<table>
							<tr>
								<td style="width: 30px; height:30px; background-color: rgb(131,131,254);">
									&nbsp;
								</td>
							</tr>

						</table>

					</div>
					<div class="col-md-2">
						<label>No Disponible</label>
						<table>
							<tr>
								<td style="width: 30px; height:30px; background-color: rgb(199,199,199);">
									&nbsp;
								</td>
							</tr>

						</table>

					</div>
					<div class="col-md-2 "  >
						<label>Proceso de rescisión</label>
						<table>
							<tr>
								<td style="width: 30px; height:30px; background-color: rgb(159,240,238);">
									&nbsp;
								</td>
							</tr>

						</table>

					</div>


				</div>
				<br>
				<div class="table-responsive " style="scroll-x: scroll; scroll-y: scroll; width:1600;">
					<table class="">


						<tbody>
							<br><font size="1">
								Mz 01
							</font>
							<tr>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="11" onclick="cambiar('1','1')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="12" onclick="cambiar('1','2')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="13" onclick="cambiar('1','3')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="14" onclick="cambiar('1','4')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="15" onclick="cambiar('1','5')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="16" onclick="cambiar('1','6')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="17" onclick="cambiar('1','7')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="18" onclick="cambiar('1','8')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="19" onclick="cambiar('1','9')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="110" onclick="cambiar('1','10')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="111" onclick="cambiar('1','11')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="112" onclick="cambiar('1','12')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="113" onclick="cambiar('1','13')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="114" onclick="cambiar('1','14')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="115" onclick="cambiar('1','15')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="116" onclick="cambiar('1','16')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="117" onclick="cambiar('1','17')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="118" onclick="cambiar('1','18')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="119" onclick="cambiar('1','19')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="120" onclick="cambiar('1','20')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="121" onclick="cambiar('1','21')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="122" onclick="cambiar('1','22')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="123" onclick="cambiar('1','23')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="124" onclick="cambiar('1','24')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="125" onclick="cambiar('1','25')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="126" onclick="cambiar('1','26')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="127" onclick="cambiar('1','27')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="128" onclick="cambiar('1','28')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="129" onclick="cambiar('1','29')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="130" onclick="cambiar('1','30')"></td>
								<td style="width: 50px; height:85px; cursor:pointer;" rowspan="2" id="131" onclick="cambiar('1','31')"></td>
								
								
							</tr>
							<tr>
								
							</tr>
							


							<tr>
								<td style="border:0px black solid; width: 70px; height: 70px;">
									<br><font size="1">
										<br><br> Mz 02
									</font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1">
										<br><br> Mz 03
									</font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1">
										<br><br> Mz 04
									</font>
								</td>
							</tr>
							</tbody>
					</table>
<table class="">


						<tbody>
							<tr>
								<td style="width: 85px; height:85px;cursor:pointer;" rowspan="2" id="21" onclick="cambiar('2','1')"></td>
								<td style="width: 85px; height:85px;cursor:pointer;" rowspan="2" id="212" onclick="cambiar('2','12')"></td>
								<td style="width: 68px; height:43px;cursor:pointer; border-top: 0px; border-bottom: 0px;" rowspan="2"  ></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="31" onclick="cambiar('3','1')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="32" onclick="cambiar('3','2')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="33" onclick="cambiar('3','3')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="34" onclick="cambiar('3','4')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="35" onclick="cambiar('3','5')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="36" onclick="cambiar('3','6')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="37" onclick="cambiar('3','7')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="38" onclick="cambiar('3','8')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="39" onclick="cambiar('3','9')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="310" onclick="cambiar('3','10')"></td>
								<td style="width: 68px; height:43px;cursor:pointer; border-top: 0px; border-bottom: 0px;" rowspan="2" id="314" onclick="cambiar('3','14')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="41" onclick="cambiar('4','1')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="42" onclick="cambiar('4','2')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="43" onclick="cambiar('4','3')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="44" onclick="cambiar('4','4')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="45" onclick="cambiar('4','5')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="46" onclick="cambiar('4','6')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="47" onclick="cambiar('4','7')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="48" onclick="cambiar('4','8')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="49" onclick="cambiar('4','9')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="410" onclick="cambiar('4','10')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="411" onclick="cambiar('4','11')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="412" onclick="cambiar('4','12')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="413" onclick="cambiar('4','13')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="414" onclick="cambiar('4','14')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="415" onclick="cambiar('4','15')"></td>
								
							</tr>
							<tr></tr>
							<tr>
								<td style="width: 85px; height:85px;cursor:pointer;" rowspan="2" id="22" onclick="cambiar('2','2')"></td>
								<td style="width: 85px; height:85px;cursor:pointer;" rowspan="2" id="211" onclick="cambiar('2','11')"></td>
								<td style="width: 68px; height:43px;cursor:pointer; border-top: 0px; border-bottom: 0px;" rowspan="2"  ></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="320" onclick="cambiar('3','20')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="319" onclick="cambiar('3','19')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="318" onclick="cambiar('3','18')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="317" onclick="cambiar('3','17')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="316" onclick="cambiar('3','16')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="315" onclick="cambiar('3','15')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="314" onclick="cambiar('3','14')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="313" onclick="cambiar('3','13')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="312" onclick="cambiar('3','12')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="311" onclick="cambiar('3','11')"></td>
								<td style="width: 68px; height:43px;cursor:pointer; border-top: 0px; border-bottom: 0px;" rowspan="2" id="314" onclick="cambiar('3','14')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="430" onclick="cambiar('4','30')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="429" onclick="cambiar('4','29')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="428" onclick="cambiar('4','28')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="427" onclick="cambiar('4','27')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="426" onclick="cambiar('4','26')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="425" onclick="cambiar('4','25')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="424" onclick="cambiar('4','24')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="423" onclick="cambiar('4','23')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="422" onclick="cambiar('4','22')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="421" onclick="cambiar('4','21')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="420" onclick="cambiar('4','20')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="419" onclick="cambiar('4','19')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="418" onclick="cambiar('4','18')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="417" onclick="cambiar('4','17')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="2" id="416" onclick="cambiar('4','16')"></td>
								
							</tr>
							<tr>
								
							</tr>
							


							<tr>
								<td style="width: 85px; height:85px;cursor:pointer;" rowspan="2" id="23" onclick="cambiar('2','3')"></td>
								<td style="width: 85px; height:85px;cursor:pointer;" rowspan="2" id="210" onclick="cambiar('2','10')"></td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1">
										<br><br> Mz 05
									</font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1"><br><br> </font>
								</td>
								<td style="border:0px black solid; width: 70; height: 70px;">
									<br><font size="1">
										<br><br> Mz 06
									</font>
								</td>
							</tr>
							
</tbody>
					</table>
					<div class="">
						<table>
							<tr>
						<td style="border: 0px black solid;">
									<div style="float: left; width:200px; height:180px; background-color: ; ">

							<table class="" >


						<tbody>
							<tr>
								<td style="width: 50px; height:58px;cursor:pointer; border-top: 1px;" rowspan="6" id="24" onclick="cambiar('2','4')"></td>
								<td style="width: 50px; height:58px;cursor:pointer; border-top:1px black solid;" rowspan="6" id="29" onclick="cambiar('2','9')"></td>
								<td style="width: 50px; height:58px;cursor:pointer; border-top: 1px; border-bottom: 1px;" rowspan="6"  ></td>
								<td style="width: 50px; height:58px;cursor:pointer;"  id="51"   onclick="cambiar('5','1')"></td>
								
								
							</tr>
							<tr></tr>
							<tr></tr>

							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr>
								<td style="width: 50px; height:58px;cursor:pointer; border-top: 1px;" rowspan="6" id="25" onclick="cambiar('2','5')"></td>
								<td style="width: 50px; height:58px;cursor:pointer; border-top:0px;" rowspan="6" id="28" onclick="cambiar('2','8')"></td>
								<td style="width: 50px; height:58px;cursor:pointer; border-top: 0px; border-bottom: 0px;" rowspan="6"  ></td>
								<td style="width: 50px; height:58px;cursor:pointer;"   id="52" onclick="cambiar('5','2')"></td>
								
							</tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr>
								<td style="width: 50px; height:58px;cursor:pointer; border-top: 1px;" rowspan="6" id="26" onclick="cambiar('2','6')"></td>
								<td style="width: 50px; height:58px;cursor:pointer; border-top:0px;" rowspan="6" id="27" onclick="cambiar('2','7')"></td>
								<td style="width: 50px; height:58px;cursor:pointer; border-top: 0px; border-bottom: 0px;" rowspan="6"  ></td>
								<td style="width: 50px; height:58px;cursor:pointer;"  id="53"  onclick="cambiar('5','3')"></td>
								
							</tr>
						</tbody>
					</table>
					</div>
				</td>
								<td style="border: 0px black solid;">
										
									<div style="float: left; width:1400px; height:180px; ">
					<table >
						<tbody>
														<tr>
								
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="521" onclick="cambiar('5','21')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="520" onclick="cambiar('5','20')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="519" onclick="cambiar('5','19')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="518" onclick="cambiar('5','18')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="517" onclick="cambiar('5','17')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="516" onclick="cambiar('5','16')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="515" onclick="cambiar('5','15')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="514" onclick="cambiar('5','14')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="513" onclick="cambiar('5','13')"></td>
								<td style="width: 68px; height:43px;cursor:pointer; border-top: 0px; border-bottom: 0px;" rowspan="6" ></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="61" onclick="cambiar('6','1')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="62" onclick="cambiar('6','2')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="63" onclick="cambiar('6','3')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="64" onclick="cambiar('6','4')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="65" onclick="cambiar('6','5')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="66" onclick="cambiar('6','6')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="67" onclick="cambiar('6','7')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="68" onclick="cambiar('6','8')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="69" onclick="cambiar('6','9')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="610" onclick="cambiar('6','10')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="611" onclick="cambiar('6','11')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="612" onclick="cambiar('6','12')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="613" onclick="cambiar('6','13')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="614" onclick="cambiar('6','14')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="615" onclick="cambiar('6','15')"></td>
								
							</tr>
							<tr></tr>
							<tr></tr>

							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr>
								
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="54" onclick="cambiar('5','4')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="55" onclick="cambiar('5','5')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="56" onclick="cambiar('5','6')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="57" onclick="cambiar('5','7')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="58" onclick="cambiar('5','8')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="59" onclick="cambiar('5','9')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="510" onclick="cambiar('5','10')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="511" onclick="cambiar('5','11')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="512" onclick="cambiar('5','12')"></td>
								<td style="width: 68px; height:43px;cursor:pointer; border-top: 0px; border-bottom: 0px;" rowspan="6"  ></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="632" onclick="cambiar('6','32')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="631" onclick="cambiar('6','31')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="630" onclick="cambiar('6','30')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="629" onclick="cambiar('6','29')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="628" onclick="cambiar('6','28')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="627" onclick="cambiar('6','27')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="626" onclick="cambiar('6','26')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="625" onclick="cambiar('6','25')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="624" onclick="cambiar('6','24')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="623" onclick="cambiar('6','23')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="622" onclick="cambiar('6','22')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="621" onclick="cambiar('6','21')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="620" onclick="cambiar('6','20')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="619" onclick="cambiar('6','19')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="618" onclick="cambiar('6','18')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="617" onclick="cambiar('6','17')"></td>
								<td style="width: 50px; height:85px;cursor:pointer;" rowspan="6" id="616" onclick="cambiar('6','16')"></td>
								
							</tr>
							




						</tbody>
					</table>
					</div>

								</td>
							</tr>
						</table>
					
					
					</div>
					

					<br>
				</div>

					<input type="hidden" id="lotes" value="{{json_encode($lotes)}}">


				</div>

				
			</div>
		</div>


		@endsection

		@section('jscustom')
		<script type="text/javascript">
			function inicio(){
				$('#proyectoH').select2({
					theme: "bootstrap"
				});
				let lotes=$('#lotes').val();

				
				@foreach($lotes as $lote)
				if('{{$lote->estatus}}'=='Disponible'){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(105,239,67)');
				}else if('{{$lote->estatus}}'=='Liquidado'){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(131,131,254)');
				}else if('{{$lote->estatus}}'=='Apartado' ){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','yellow');
				}else if('{{$lote->estatus}}'=='Proceso de rescisión' ){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(159,240,238)');
				}else if('{{$lote->estatus}}'=='Donación' ||'{{$lote->estatus}}'=='Al corriente' ||'{{$lote->estatus}}'=='Rescisión' ||'{{$lote->estatus}}'=='Enganches' ){
					$('#'+{{$lote->mz}}+{{$lote->lt}}).css('background-color','rgb(199,199,199)');
				} 
				var area={{$lote->Ancho}}*{{$lote->Largo}};
				area=''+area+'';
				console.log(area);
				var areas=area.substr(0,6);
				$('#'+{{$lote->mz}}+{{$lote->lt}}).html('<FONT FACE="arial" SIZE=1 id="area11"><center>'+areas+'m<sup>2</sup></center><br><center>LT'+{{$lote->lt}}+'</center></FONT>');
				@endforeach



			}
			function cambiarProyecto(){

				window.location.href = "{{url('ventalotesView/')}}"+$('#proyectoH').val();
			}
			function cambiar(mz,lote){

				$.ajax({
					data:  {
						"mz":mz,
						"lote":lote,
						"proyecto":3,
					}, 
					url:   "{{url('buscar/ProyectosLotes')}}",
					type:  'get',
					success:  function (data) { 
						console.log(data);
						if(data.length==0){

							$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">Información </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
							$('#texto').html('Este lote no cuenta con informacion ');
							$('#footerModal').html('');

						}else{




							var texto='';
							texto+='<div class="row" ><div class="col-md-6"><div class="card-pricing">'+

								'<ul class="specification-list">'+
								'<li>'+
								'<span class="name-specification">Mz</span>'+
								'<span class="status-specification">'+data[0].mz+'<input type="hidden" id="mzModal" value="'+data[0].mz+'"></span>'+

								'</li>'+
								'<li>'+
								'<span class="name-specification">Lt</span>'+
								'<span class="status-specification">'+data[0].lt+'<input type="hidden" id="ltModal" value="'+data[0].lt+'"></span>'+
								'</li>'+
								'<li>'+
								'<span class="name-specification">Superficie</span>'+
								'<span class="status-specification">'+data[0].superficie+'m<sup>2</sup><input type="hidden" id="proyectoModal" value="'+data[0].proyecto+'"></span>'+
								'</li>'+
								'<li>'+
								'<span class="name-specification">Tipo de superficie</span>'+
								'<span class="status-specification">'+data[0].tipoSuperficie+'</span>'+
								'</li>'+
								'<li>'+
								'<span class="name-specification">Costo Total</span>'+
								'<span class="status-specification">'+data[0].Costo+'</span>'+
								'</li>'+
								'<li>'+
								'<span class="name-specification">Tipo de venta</span>'+
								'<span class="status-specification">'+data[0].tipoVenta+'</span>'+
								'</li>'+
								'</div>'+
								'</div>'+
								'<div class="col-md-6"><div class="card-pricing">'+

								'<ul class="specification-list">'+
								'<li>'+
								'<span class="name-specification">Ancho</span>'+
								'<span class="status-specification">'+data[0].Ancho+'m<sup></sup></span>'+
								'</li>'+
								'<li>'+
								'<span class="name-specification">Largo</span>'+
								'<span class="status-specification">'+data[0].Largo+'m<sup></sup></span>'+
								'</li>'+
								'<li>'+
								'<span class="name-specification">Colinancia</span>'+
								'<span class="status-specification">'+data[0].colinancia+'</span>'+
								'</li>'+
								'<li>'+
								'<span class="name-specification">Clave Catastral</span>'+
								'<span class="status-specification">'+data[0].claveCatastral+'</span>'+
								'</li>'+
								'<li>'+
								'<span class="name-specification">Fecha Clave Catastral</span>'+
								'<span class="status-specification">'+data[0].fechaClaveCatastral+'</span>'+
								'</li>'+

								'</ul>'+
								'</div>'+
								'</div>'+
								'<div class="col-md-12" id="validaExistencia">'+
								
								'</div>';
								if(data[0].estatus=='Proceso de rescisión'){
								texto+='<div class="col-md-4">'+
								'<label>Nombre(s)</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Nombre" name="Nombre"  >'+
								'</div>'+
								'<div class="col-md-4">'+
								'<label>Apellido Paterno</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Apaterno" name="Apaterno">'+
								'</div>'+
								'<div class="col-md-4">'+
								'<label>Apellido Materno</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Amaterno" name="Amaterno">'+
								'</div>';
								}else if(data[0].estatus=='Disponible'){
									texto+='<div class="col-md-4">'+
								'<label>Nombre(s)</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Nombre" name="Nombre"  >'+
								'</div>'+
								'<div class="col-md-4">'+
								'<label>Apellido Paterno</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Apaterno" name="Apaterno">'+
								'</div>'+
								'<div class="col-md-4">'+
								'<label>Apellido Materno</label><input type="text" class="form-control" onkeyup="buscarNombre()" id="Amaterno" name="Amaterno">'+
								'</div>'+
								'<div class="col-md-12">'+
								'<label>Observaciones</label><input type="text" class="form-control"  id="Observaciones" name="Observaciones">'+
								'</div>';
								}
								texto+='</div>'+

								'</div>'+' ';
								$('#texto').html(texto);

							if(data[0].estatus=='Disponible'){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button><button type="button" class="btn btn-success" onclick="apartado()">Apartado</button>');
							}else if(data[0].estatus=='Liquidado'){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('');
							}else if(data[0].estatus=='Apartado' ){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('');
							}else if(data[0].estatus=='Proceso de rescisión' ){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">'+data[0].estatus+' </h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button><button type="button" class="btn btn-success" onclick="agregarALista()">Lista de espera</button>');
							}else if(data[0].estatus=='Donación' || data[0].estatus=='Al corriente' ||data[0].estatus=='Rescisión' || data[0].estatus=='Enganches' ){
								$('#headerModal').html('<h5 class="modal-title" id="exampleModalLongTitle">No Disponible</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>');
								$('#footerModal').html('');
							} 

						}

						$('#modal').modal('show');
					},
				});

}

function buscarNombre(){
	var nombre=$('#Nombre').val();
	var Apaterno=$('#Apaterno').val();
	var Amaterno=$('#Amaterno').val();
	$.ajax({
			data:  {
				"nombre":nombre,
				"Apaterno":Apaterno,
				"Amaterno":Amaterno,
			}, 
			url:   "{{url('buscar/clientesListaEspera')}}",
			type:  'get',
			success:  function (data) {
				console.log(data);
				if(data.length==0){
					$('#validaExistencia').html('');
				}else{
					$('#validaExistencia').html('<br><label><center>El cliente ya existe, numero e cliente: <b>'+data[0].N_Cliente+'</b></center></label>');
				}
			},
		});

}
function apartado(){
	var nombre=$('#Nombre').val();
	var Apaterno=$('#Apaterno').val();
	var Amaterno=$('#Amaterno').val();
	var mzModal=$('#mzModal').val();
	var ltModal=$('#ltModal').val();
	var Observaciones=$('#Observaciones').val();
	var proyectoModal=$('#proyectoModal').val();
	$.ajax({
			data:  {
				"nombre":nombre,
				"Apaterno":Apaterno,
				"Amaterno":Amaterno,
				"mzModal":mzModal,
				"ltModal":ltModal,
				"Observaciones":Observaciones,
				"proyectoModal":proyectoModal,
			}, 
			url:   "{{url('agregar/tratoVendedor')}}",
			type:  'get',
			success:  function (data) {
				console.log(data);
				$('#modal').modal('hide');
				mensaje('success','Se agrego a la lista de espera!!');
			},
		});
}

function agregarALista(){
	var nombre=$('#Nombre').val();
	var Apaterno=$('#Apaterno').val();
	var Amaterno=$('#Amaterno').val();
	var mzModal=$('#mzModal').val();
	var ltModal=$('#ltModal').val();
	var proyectoModal=$('#proyectoModal').val();
	$.ajax({
			data:  {
				"nombre":nombre,
				"Apaterno":Apaterno,
				"Amaterno":Amaterno,
				"mzModal":mzModal,
				"ltModal":ltModal,
				"proyectoModal":proyectoModal,
			}, 
			url:   "{{url('agregar/clienteListaEspera')}}",
			type:  'get',
			success:  function (data) {
				console.log(data);
				$('#modal').modal('hide');
				mensaje('success','Se agrego a la lista de espera!!');
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