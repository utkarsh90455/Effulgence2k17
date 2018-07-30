<?php
$uid =$_GET["kick"];
session_start();
    if(!isset($_SESSION["admin"])) {
        header("Location: adminlogin.php");
    }
include 'includes/connect.php';
$sth1 = mysqli_query($conn, "SELECT level, ts FROM submissions WHERE ts != '0000-00-00 00:00:00' AND fbid = '$uid'")or die('error8');
$sth2 = mysqli_query($conn, "SELECT level, submissions FROM submissions WHERE ts != '0000-00-00 00:00:00' AND fbid = '$uid'")or die('error9');
$table1 = array();
$table2 = array();
$table1['cols'] = array(
    array('label' => 'Time', 'type' => 'datetime'),
    array('label' => 'Level', 'type' => 'number')
    //array('label' => 'Submissions', 'type' => 'number'),
);

$table2['cols'] = array(
    //array('label' => 'Time', 'type' => 'datetime'),
    array('label' => 'Level', 'type' => 'number'),
    array('label' => 'Submissions', 'type' => 'number')
);

$rows1 = array();
while($r1 = mysqli_fetch_assoc($sth1)) {
    $temp1 = array();
    $temp1[] = array('v' => 'Date(' . date('Y,n,d,H,i,s', strtotime($r1['ts'])).')');
    $temp1[] = array('v' => (int) $r1['level']);
    //$temp[] = array('v' => (int) $r['submit']);
    $rows1[] = array('c' => $temp1);
}

$table1['rows'] = $rows1;
$jsonTable1 = json_encode($table1);
$rows2 = array();
while($r2 = mysqli_fetch_assoc($sth2)) {
    $temp2 = array();
    //$temp[] = array('v' => 'Date(' . date('Y,n,d,H,i,s', strtotime($r['ts'])).')');
    $temp2[] = array('v' => (int) $r2['level']);
    $temp2[] = array('v' => (int) $r2['submissions']);
    $rows2[] = array('c' => $temp2);
}
$table2['rows'] = $rows2;   
$jsonTable2 = json_encode($table2);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <title>Da Vinci Code</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="question.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data1 = new google.visualization.DataTable(<?=$jsonTable1?>);
      var data2 = new google.visualization.DataTable(<?=$jsonTable2?>);
      var options1 = {
          width: 1400,
          height: 600,
          lineWidth: 1, 
          pointSize: 5, 
          pointWidth: 3,
          hAxis: {
              viewWindow: {
                min: new Date(2016, 2, 19, 18),
                max: new Date(2016, 2, 28, 1)
              },
            gridlines: {
            count: -1,
            units: {
              days: {format: ["dd"]},
              hours: {format: ["HH:mm", "ha"]}
            }
          }
          }
        };
        var options2 = {
          width: 1400,
          height: 600,
          bar: {groupWidth: "90%"},
          hAxis: {maxValue: 30,
              gridlines: {count: 6}
        }
      };
      var chart1 = new google.visualization.LineChart(document.getElementById('chart_div1'));
      var chart2 = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
      chart1.draw(data1, options1);
      chart2.draw(data2, options2);
    }
    </script>
  </head>
  <body>
  <?php include 'adminnav.php'; ?>
  <div class="text-center">
  <h1>User Id: <?php echo($_GET["kick"]);?></h1>
  </div>
    <div id="chart_div1"></div>
    <div id="chart_div2"></div>
  </body>
</html>