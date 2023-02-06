
<div class="bg-white border-bottom rounded-1 h-100 p-3">
	<div class="pb-2">
		<div class="d-flex">
			<span class="fs-6 text-secondary pe-3 opacity-75">
				<i class="fas fa-chart-pie"></i>
			</span>
			<span class="fs-6 text-dark fw-bold">
				Statistic Chart
			</span>
		</div>
	</div>
	<div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>

	<?php 
	$dataPoints = array(
		array("x" => 1483381800000 , "y" => 650),
		array("x" => 1483468200000 , "y" => 700),
		array("x" => 1483554600000 , "y" => 710),
		array("x" => 1483641000000 , "y" => 658),
		array("x" => 1483727400000 , "y" => 734),
		array("x" => 1483813800000 , "y" => 963),
		array("x" => 1483900200000 , "y" => 847),
		array("x" => 1483986600000 , "y" => 853),
		array("x" => 1484073000000 , "y" => 869),
		array("x" => 1484159400000 , "y" => 943),
		array("x" => 1484245800000 , "y" => 970),
		array("x" => 1484332200000 , "y" => 869),
		array("x" => 1484418600000 , "y" => 890),
		array("x" => 1484505000000 , "y" => 930)
	);
	?>
	<div class="pb-2 d-none">
		<div class="d-flex">
			<span class="fs-6 text-secondary pe-3 opacity-75">
				<i class="fas fa-chart-pie"></i>
			</span>
			<span class="fs-6 text-dark fw-bold">
				Statistic Chart
			</span>
		</div>
	</div>
	<div class="d-none">
		<div id="chartContainer" style="height: 550px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	</div>
</div>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "STATISTIC CHART"
	},
	axisX: {
		valueFormatString: "DD MMM",
	},
	axisY: {
		title: "",
		includeZero: true,
		maximum: 1200
	},
	data: [{
		type: "splineArea",
		color: "#6599FF",
		xValueType: "dateTime",
		xValueFormatString: "DD MMM",
		yValueFormatString: "#,##0 Visits",
		dataPoints: <?php echo json_encode($dataPoints); ?>
	}]
});
 
chart.render();
 
}
</script>