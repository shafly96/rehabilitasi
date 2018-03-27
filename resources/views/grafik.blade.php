<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Rehabilitasi</title>
</head>
<body>
	<div class="row">
		<div class="col-md-12" style=" padding: 0px 50px; padding-top: 30px; text-align: right">
			<h1 class="display-4">Hello, {{$user->user}}</h1>
			<button type="button" class="btn btn-success">Export Excel</button>
		</div>
		<div class="col-md-12" style="padding: 30px 50px">
			<!-- accordion -->
			<div class="panel-group" id="accordion">
				@for($i=1; $i<12; $i++)
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}">
								Gerak {{$i}}</a>
							</h4>
						</div>
						<div id="collapse{{$i}}" class="panel-collapse collapse in">
							<div class="panel-body">
								@if(count($gerak[$i])==0)
									Belum ada data
								@else
									<canvas id="myChart{{$i}}" height="50px"></canvas>
								@endif
							</div>
						</div>
					</div>
				@endfor
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{url('')}}/js/chart/chart.bundle.min.js"></script>
	<script>
		<?php
		for($i=1; $i<12; $i++){
			echo 'var ctx'.$i.' = document.getElementById("myChart'.$i.'");';
			echo "var myChart".$i." = new Chart(ctx".$i.", {
				type: 'line',
				data: {
					labels: [";
					foreach($gerak[$i] as $value) echo "'".date("d-M-Y", strtotime($value->tanggal))."',";
			echo "],
					datasets: [{
						label: 'Lama menyelesaikan gerakan (detik)',
						data: [";
					foreach($gerak[$i] as $value) echo "'".$value->value."',";	
			echo "],
					}]
				}
			});";
		}
		?>
	</script>
</body>
</html>