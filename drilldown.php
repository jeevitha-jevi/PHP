
<html>
<head>
	<title>piechart</title>
	<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>
<body>

<div id="container" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
<script>
  $(document).ready(function() {

            $.ajax({
            dataType: "json",
            url: "managebrowser.php",
            data: "",
            success: browse
          });
        });
function browse(data)
{
	var chartData=new Array();
	console.log(chartData);
	for(i=0;i<data.length;i++)
	{
chartData.push({"name":data[i].name,"y":parseInt(data[i].status)});
	}
	// console.log(chartData);
Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Browser market shares. January, 2018'
    },
    subtitle: {
        text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: false,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [
        {
            name: 'name',
            colorByPoint: true,
            data: chartData,
        }
    ]
          
});
}

 </script>
</body>
</html>