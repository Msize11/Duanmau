<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
<?php 
$tongdm=count($listthongke);
$i=1;
foreach ($listthongke as $thongke){
    extract($thongke);
    if($i==$tongdm) $dauphay=""; else $dauphay=",";
    echo "['".$thongke['tendm']."'],['".$thongke['countsp']."]".$dauphay;
    $i+=1;
}
?>
  ['Contry', 'Mhl'],
  ['Italy',54.8],
  ['France',48.6],
  ['Spain',44.4],
  ['USA',23.9],
  ['Argentina',14.5]
]);

var options = {
  title:'World Wide Wine Production'
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>