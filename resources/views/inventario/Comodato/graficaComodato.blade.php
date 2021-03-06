@extends('template.header')


@section('content_header')
<h4 class="page-title">Estadisticas de Comodatos.</h4>

@stop


@section('content')


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Comodatos</div>
				
			</div>

			<div name="mensajeJS" id="mensajeJS"></div>

			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Comodatos registrados</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="barChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						
				</div>
			</div>
			
		</div>
	</div>
</div>

@endsection
@section('jscustom')
	<!--   Core JS Files   -->
	<script src="{{url('/assets')}}/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{url('/assets')}}/js/core/popper.min.js"></script>
	<script src="{{url('/assets')}}/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="{{url('/assets')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{url('/assets')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="{{url('/assets')}}/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{url('/assets')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Ready Pro JS -->
	<script src="{{url('/assets')}}/js/ready.min.js"></script>
	<!-- Ready Pro DEMO methods, don't include it in your project! -->
	<script src="{{url('/assets')}}/js/setting-demo2.js"></script>

	<script type="text/javascript">

		$.ajax({

		url:   "{{url('estadisticas/personal/Areas')}}",
		type:  'get',
		success:  function (response) { 
	var myBarChart = new Chart(barChart, {
			type: 'bar',
			data: {
				labels: ["51", "52", "53 ", "54", "56", "58", "59", "60", "61", "63", "64", "65", "66", "68", "69", "70", "73", "74", "76","Sin ??rea"],
				datasets : [{
					label: "Personas por sector",
					backgroundColor :["#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#f3545d","#fdaf4b","#f3545d","#1d7af3","#f3545d","#fdaf4b","#f3545d","#1d7af3","#1d7af3"],
					borderColor: 'rgb(23, 125, 255)',
					data: [response[0].sec51, response[0].sec52, response[0].sec53, response[0].sec54, response[0].sec56,response[0].sec58, response[0].sec59, response[0].sec60, response[0].sec61, response[0].sec63,response[0].sec64, response[0].sec65, response[0].sec66, response[0].sec68, response[0].sec69,response[0].sec70, response[0].sec73, response[0].sec74, response[0].sec76, response[0].sinArea],
				}],
			},
			options: {
				responsive: true, 
				maintainAspectRatio: true,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				},
			}
		});
	}
	});
		

	</script>
@endsection