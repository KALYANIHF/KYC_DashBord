<?php
 
$totalVisitors = 883000;
 
$newVsReturningVisitorsDataPoints = array(
  array("y"=> 329960, "name"=> "New Visitors", "color"=> "#E7823A"),
  array("y"=> 183040, "name"=> "Returning Visitors", "color"=> "#546BC1"),
  array("y"=> 153060, "name"=> "Sudo Visitors", "color"=> "#f00"),
  array("y"=> 103040, "name"=> "Gama Visitors", "color"=> "#0f0"),
  array("y"=> 113900, "name"=> "Demo Visitors", "color"=> "#015"),
);
 
$newVisitorsDataPoints = array(
  array("x"=> 1420050600000 , "y"=> 33000),
  array("x"=> 1422729000000 , "y"=> 35960),
  array("x"=> 1425148200000 , "y"=> 42160),
  array("x"=> 1427826600000 , "y"=> 42240),
  array("x"=> 1430418600000 , "y"=> 43200),
  array("x"=> 1433097000000 , "y"=> 40600),
  array("x"=> 1435689000000 , "y"=> 42560),
  array("x"=> 1438367400000 , "y"=> 44280),
  array("x"=> 1441045800000 , "y"=> 44800),
  array("x"=> 1443637800000 , "y"=> 48720),
  array("x"=> 1446316200000 , "y"=> 50840),
  array("x"=> 1448908200000 , "y"=> 51600)
);
 
$returningVisitorsDataPoints = array(
  array("x"=> 1420050600000 , "y"=> 22000),
  array("x"=> 1422729000000 , "y"=> 26040),
  array("x"=> 1425148200000 , "y"=> 25840),
  array("x"=> 1427826600000 , "y"=> 2360),
  array("x"=> 1430418600000 , "y"=> 28800),
  array("x"=> 1433097000000 , "y"=> 29400),
  array("x"=> 1435689000000 , "y"=> 33440),
  array("x"=> 1438367400000 , "y"=> 37720),
  array("x"=> 1441045800000 , "y"=> 35200),
  array("x"=> 1443637800000 , "y"=> 35280),
  array("x"=> 1446316200000 , "y"=> 31160),
  array("x"=> 1448908200000 , "y"=> 34400)
);

$sudoVisitorsDataPoints = array(
  array("x"=> 1420050600000 , "y"=> 22000),
  array("x"=> 1422729000000 , "y"=> 2640),
  array("x"=> 1425148200000 , "y"=> 25840),
  array("x"=> 1427826600000 , "y"=> 23760),
  array("x"=> 1430418600000 , "y"=> 28800),
  array("x"=> 1433097000000 , "y"=> 2900),
  array("x"=> 1435689000000 , "y"=> 33440),
  array("x"=> 1438367400000 , "y"=> 37720),
  array("x"=> 1441045800000 , "y"=> 3200),
  array("x"=> 1443637800000 , "y"=> 35280),
  array("x"=> 1446316200000 , "y"=> 3160),
  array("x"=> 1448908200000 , "y"=> 34400)
);
 
 $gamaVisitorsDataPoints = array(
  array("x"=> 1420050600000 , "y"=> 22000),
  array("x"=> 1422729000000 , "y"=> 26040),
  array("x"=> 1425148200000 , "y"=> 2540),
  array("x"=> 1427826600000 , "y"=> 2760),
  array("x"=> 1430418600000 , "y"=> 8800),
  array("x"=> 1433097000000 , "y"=> 29400),
  array("x"=> 1435689000000 , "y"=> 3440),
  array("x"=> 1438367400000 , "y"=> 37720),
  array("x"=> 1441045800000 , "y"=> 3500),
  array("x"=> 1443637800000 , "y"=> 3280),
  array("x"=> 1446316200000 , "y"=> 31160),
  array("x"=> 1448908200000 , "y"=> 3400)
);

 $demoVisitorsDataPoints = array(
  array("x"=> 1420050600000 , "y"=> 22000),
  array("x"=> 1422729000000 , "y"=> 26040),
  array("x"=> 1425148200000 , "y"=> 25840),
  array("x"=> 1427826600000 , "y"=> 23760),
  array("x"=> 1430418600000 , "y"=> 28800),
  array("x"=> 1433097000000 , "y"=> 29400),
  array("x"=> 1435689000000 , "y"=> 33440),
  array("x"=> 1438367400000 , "y"=> 37720),
  array("x"=> 1441045800000 , "y"=> 35200),
  array("x"=> 1443637800000 , "y"=> 35280),
  array("x"=> 1446316200000 , "y"=> 31160),
  array("x"=> 1448908200000 , "y"=> 34400)
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo Pie chart</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="assets/main.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
</head>
<body>
<script src="//www.amcharts.com/lib/4/core.js"></script>
<script src="//www.amcharts.com/lib/4/charts.js"></script>
<!-- <script>
  date_default_timezone_set('Asia/Kolkata');
</script> -->
<!-- <script src="https://www.amcharts.com/lib/version/4.0.16/core.js"></script>
<script src="https://www.amcharts.com/lib/version/4.0.16/charts.js"></script> -->
<script src="//www.amcharts.com/lib/4/themes/animated.js"></script>
    <div class="container-fluid">
        <!-- header section -->
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <div class="chart-title">
                    <h5 id="chart-figure" class="display-4" class="figure">Netware KYC DashBord Status</h5>
                    <h3 id="chart-figure-type" class="type">Your Login Date and Time: <script>document.write(new Date().toLocaleString("en-US", {timeZone:
                        "Asia/Kolkata"}))</script></h3>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 justify-content">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <select class="custom-select" id="date_range">
                            <option value="1" selected>YTD</option>
                            <option value="2">Today</option>
                            <option value="3">Last 1 Week</option>
                            <option value="4">Last 1 Month</option>
                            <option value="5">Last 6 Month</option>
                            <option value="6">Last 1 Year</option>
                            <option value="7">Custom Date</option>
                        </select>
                </form>
            </div>
        </div>
        <div class="container mt-5">
            <div class="grid-system">
                <div class="sub_grid bg-dark">
                    <div class="content">
                        <h6 data-aos="fade-down" data-aos-duration="500">TOTAL KYC</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="500">
                            <h5 class="count" data-target="64">0</h5>
                        </div>
                    </div>
                </div>
                <div class="sub_grid bg-info">
                    <div class="content">
                        <h6 data-aos="fade-down" data-aos-duration="600">SELF</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="600">
                            <h5 class="count" data-target="85">0</h5>
                        </div>
                    </div>
                </div>
                <div class="sub_grid bg-success">
                    <div class="content">
                        <h6 data-aos="fade-down" data-aos-duration="700">SHG</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="700">
                            <h5 class="count" data-target="90">0</h5>
                        </div>
                    </div>
                </div>
                <div class="sub_grid bg-primary">
                    <div class="content">
                        <h6 data-aos="fade-down" data-aos-duration="800">MFG</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="800">
                            <h5 class="count" data-target="75">0</h5>
                        </div>
                    </div>
                </div>
                <div class="sub_grid bg-warning">
                    <div class="content">
                        <h6 data-aos="fade-down" data-aos-duration="900">Organization</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="900">
                            <h5 class="count" data-target="110">0</h5>
                        </div>
                    </div>
                </div>
                <div class="sub_grid bg-secondary">
                    <div class="content">
                        <h6 data-aos="fade-down" data-aos-duration="1000">JLG</h6>
                        <div class="counter" data-aos="fade-up" data-aos-duration="1000">
                            <h5 class="count" data-target="98">0</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-sm-6 col-md-6">
                <div class="inside rounded bg-custom">
                    <div class="select_menu mt-5 justify-content">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <select class="custom-select" id="kyc_type">
                                <option selected>Please Select KYC Type</option>
                                <option value="1">TOTAL KYC</option>
                                <option value="2">SELF</option>
                                <option value="4">SHG</option>
                                <option value="5">MFG</option>
                                <option value="6">Organization</option>
                                <option value="7">JLG</option>
                            </select>
                        </form>
                    </div>
                    <div id="chartdiv"></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="inside rounded bg-custom" id="dynamic_chart">
                    <div class="select_menu mt-5 justify-content">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <select class="custom-select" id="filter_type">
                                <option selected>Please Select Filter Value</option>
                                <option value="1">Gender</option>
                                <option value="2">Cust</option>
                                <option value="3">Religion</option>
                                <option value="4">Marrid</option>
                            </select>
                        </form>
                    </div>
                    <canvas id="myChart" width="300px" height="300px"></canvas>
                </div>
            </div>
        </div>
        <div class="row mt-1">
        <div class="col-sm-12 col-md-12">
            <div class="barchart-wrapper">
            <h3 class="cat-header">
                <span id="cat-header-text">Top Reasons</span>
                <span id="cat-header-stats"></span>
            </h3>
            <div id="barchart"></div>
            </div>
        </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="assets/script.js"></script>
<script>
window.onload = function () {
 
var totalVisitors = <?php echo $totalVisitors ?>;
var visitorsData = {
  "New vs Returning Visitors": [{
    click: visitorsChartDrilldownHandler,
    cursor: "pointer",
    explodeOnClick: false,
    innerRadius: "75%",
    legendMarkerType: "square",
    name: "New vs Returning Visitors",
    radius: "100%",
    showInLegend: true,
    startAngle: 90,
    type: "doughnut",
    dataPoints: <?php echo json_encode($newVsReturningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
  }],
  "New Visitors": [{
    color: "#E7823A",
    name: "New Visitors",
    type: "column",
    xValueType: "dateTime",
    dataPoints: <?php echo json_encode($newVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
  }],
  "Returning Visitors": [{
    color: "#546BC1",
    name: "Returning Visitors",
    type: "column",
    xValueType: "dateTime",
    dataPoints: <?php echo json_encode($returningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
  }],
  "Sudo Visitors": [{
    color: "#f00",
    name: "Sudo Visitors",
    type: "column",
    xValueType: "dateTime",
    dataPoints: <?php echo json_encode($sudoVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
  }],
  "Gama Visitors":[{
    color: "#0f0",
    name: "Gama Visitors",
    type: "column",
    xValueType: "dateTime",
    dataPoints: <?php echo json_encode($gamaVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
  }],
  "Demo Visitors":[{
    color: "#015",
    name: "Demo Visitors",
    type: "column",
    xValueType: "dateTime",
    dataPoints: <?php echo json_encode($demoVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
  }]
};
 
var newVSReturningVisitorsOptions = {
  animationEnabled: true,
  theme: "light2",
  subtitles: [{
    backgroundColor: "#2eacd1",
    fontSize: 16,
    fontColor: "white",
    padding: 5
  }],
  legend: {
    fontFamily: "calibri",
    fontSize: 14,
    itemTextFormatter: function (e) {
      return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";  
    }
  },
  data: []
};
 
var visitorsDrilldownedChartOptions = {
  animationEnabled: true,
  theme: "light2",
  axisX: {
    labelFontColor: "#717171",
    lineColor: "#a2a2a2",
    tickColor: "#a2a2a2"
  },
  axisY: {
    gridThickness: 0,
    includeZero: false,
    labelFontColor: "#717171",
    lineColor: "#a2a2a2",
    tickColor: "#a2a2a2",
    lineThickness: 1
  },
  data: []
};
 
var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
chart.options.data = visitorsData["New vs Returning Visitors"];
chart.render();
 
function visitorsChartDrilldownHandler(e) {
  chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
  chart.options.data = visitorsData[e.dataPoint.name];
  chart.options.title = { text: e.dataPoint.name }
  chart.render();
  $("#backButton").toggleClass("invisible");
}
 
$("#backButton").click(function() { 
  $(this).toggleClass("invisible");
  chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
  chart.options.data = visitorsData["New vs Returning Visitors"];
  chart.render();
});
 
}
</script>
<!-- vanilla Js Es6 -->
<script>
    window.addEventListener('load',()=>{
        const countElements = document.querySelectorAll('.count');
        // const speed  = 200;
        const inc = 0;
        countElements.forEach(e=>{
            // define a function to incement the value of the element
            const updateCount = ()=>{
                const target = e.getAttribute('data-target');
                // console.log(target);
                const count =+ e.innerHTML;
                console.log(count);
                // increment the value by devide the target value with the speed value
                const inc =+ 1;
                if (count < target) {
                    // Add inc to count and output in counter
                    e.innerText = count + inc;
                    // Call function every 3ms count delay
                    setTimeout(updateCount, 1.5);
                }else{
                    e.innerHTML = target;
                }
            };
            updateCount();
        });
    })
</script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    document.getElementById('filter_type').addEventListener('change',()=>{
        switch (Number(document.getElementById('filter_type').value)) {
            case 1:
                {
                    var oldcanv = document.getElementById('myChart');
                    document.getElementById('dynamic_chart').removeChild(oldcanv);
                    var canv = document.createElement('canvas');
                    canv.id = 'myChart';
                    document.getElementById('dynamic_chart').appendChild(canv);
                    // document.body.appendChild(canv);
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['Black', 'Blue', 'Green', 'Lime', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'black',
                                    'blue',
                                    'green',
                                    'limegreen',
                                    'purple',
                                    'orange'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
                break;
            case 2:
                {
                    var oldcanv = document.getElementById('myChart');
                    document.getElementById('dynamic_chart').removeChild(oldcanv);
                    var canv = document.createElement('canvas');
                    canv.id = 'myChart';
                    document.getElementById('dynamic_chart').appendChild(canv);
                    // document.body.appendChild(canv);
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['White', 'Blue', 'Green', 'Yellow', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [17, 25, 3, 51, 10, 3],
                                backgroundColor: [
                                    'white',
                                    'blue',
                                    'green',
                                    'yellow',
                                    'purple',
                                    'orange'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
                break;
            case 3:
                {
                    var oldcanv = document.getElementById('myChart');
                    document.getElementById('dynamic_chart').removeChild(oldcanv);
                    var canv = document.createElement('canvas');
                    canv.id = 'myChart';
                    document.getElementById('dynamic_chart').appendChild(canv);
                    // document.body.appendChild(canv);
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['Blue', 'Black', 'Green', 'Lime', 'Royalblue', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'blue',
                                    'black',
                                    'green',
                                    'lime',
                                    'royalblue',
                                    'orange'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
                break;
            case 4:
                {
                    var oldcanv = document.getElementById('myChart');
                    document.getElementById('dynamic_chart').removeChild(oldcanv);
                    var canv = document.createElement('canvas');
                    canv.id = 'myChart';
                    document.getElementById('dynamic_chart').appendChild(canv);
                    // document.body.appendChild(canv);
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['Black', 'Blue', 'Green', 'lime', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'black',
                                    'blue',
                                    'green',
                                    'lime',
                                    'purple',
                                    'orange'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
            default: {
                console.log("please select a valid value");
            }
        }
    })
</script>
</body>
</html>