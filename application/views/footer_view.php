</div>

<script type="text/javascript">
		
			var chart;
			var categories1 = "Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec";
            categories1 = categories1.split(",");
            
			$(document).ready(function() {
				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'container',
						defaultSeriesType: 'line',
						marginRight: 130,
						marginBottom: 25
					},
					title: {
						text: 'Monthly Average Temperature',
						x: -20 //center
					},
					subtitle: {
						text: 'Source: WorldClimate.com',
						x: -20
					},
					xAxis: {
						categories : categories1,
					},
					yAxis: {
						title: {
							text: 'Temperature (°C)'
						},
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
					},
					tooltip: {
						formatter: function() {
				                return '<b>'+ this.series.name +'</b><br/>'+
								this.x +': '+ this.y +'°C';
						}
					},
					legend: {
						layout: 'vertical',
						align: 'right',
						verticalAlign: 'top',
						x: -10,
						y: 100,
						borderWidth: 0
					},
					series: [/*{
						name: 'Tokyo',
						data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
					},*/
					<?php echo $data;?>
					]
				});
				
				
			});
				
		</script>
		<?php
		
		//print_r($data);
		
		?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo base_url();?>assets/bootstrap-3.3.5-dist/jquery/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?= base_url();?>assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> 
</body> 
</html>