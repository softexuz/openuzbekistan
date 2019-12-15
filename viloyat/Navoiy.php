<?php
/**
 * Created by Radon
 * Date: 12/14/2019
 * Time: 4:15 PM
 */

?>

<!DOCTYPE html>
<html lang="ru">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ishsizlik viloyatlar kesimida</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="style.min.css">
    <!-- For map -->
    <script src="add/jquery.js.download"></script>
    <!--    <script src="add/vendor.min.js"></script>-->
    <script src="add/main.js"></script>
    <link href="add/main.css" rel="stylesheet">
    <!--    resources-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha256-TQq84xX6vkwR0Qs1qH5ADkP+MvH0W+9E7TdHJsoIQiM=" crossorigin="anonymous"></script>
</head>
<body>
<div id="wrapper" class="transition">
    <div id="main" class="transition">
        <div id="mapWrap" class="transition">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <!-- Information -->
            <div class="chart-container" style="position: relative; height:400px; width:800px; border-radius: 14px; overflow: hidden; margin: auto;">
                <canvas id="myChart"></canvas>
            </div>
            <script>
                var datax = [];
                var labelsx = [];
                $(document).ready(function() {
                    $.get("/lib/getData.php", function(data, status){
                        var objData = JSON.parse(data);
                        console.log(objData);
                        for (i in objData){
                            if (objData[i].id==1){
                                for (k in objData[i]){
                                    console.log(objData[i][k]);
                                    labelsx[k] = objData[i][k];
                                }
                            }
                            if (objData[i].id==2){
                                for (k in objData[i]){
                                    console.log(objData[i][k]);
                                    datax[k] = objData[i][k];
                                }
                            }

                        }
                        createChart();
                    });
                });

                function createChart() {
                    console.log(datax);
                    console.log(labelsx);
                    var ctx = document.getElementById('myChart');

                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                                labelsx['G4'],
                                labelsx['G5'],
                                labelsx['G6'],
                                labelsx['G7'],
                                labelsx['G8'],
                                labelsx['G9'],
                                labelsx['G10'],
                                labelsx['G11'],
                                labelsx['G12'],
                                labelsx['G13'],
                                labelsx['G14'],
                                labelsx['G15']
                            ],
                            datasets: [{
                                label: 'Ishsizlik darajasi O`zbekiston Respublikasi (foizlarda)',
                                data: [
                                    datax['G4'],
                                    datax['G5'],
                                    datax['G6'],
                                    datax['G7'],
                                    datax['G8'],
                                    datax['G9'],
                                    datax['G10'],
                                    datax['G11'],
                                    datax['G12'],
                                    datax['G13'],
                                    datax['G14'],
                                    datax['G15']
                                ],
                                backgroundColor: 'rgba(36, 243, 133, 0.74)',
                                borderColor: 'rgba(1, 125, 59, 0.74)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            },
                            legend: {
                                labels: {
                                    fontColor: '#323232'
                                }
                            }

                        }
                    });
                    ctx.style.backgroundColor = 'rgba(255, 255, 255, 0.88)';
                }

            </script>
            <!-- End information -->
        </div>
        <div id="content" class="transition">
            <h1 class="transition">Open Uzbekistan</h1>
            <p class="transition">Ochiq Ma'lumotlar 2019</p>
            <div id="graphWrap" style="width: 555px; left: -60px;">
                <svg id="graphSvg"></svg>
            </div>

            <div id="countryClose"></div>
        </div>

        <!--        Bottom menu-->
        <?php include_once ("lib/bottomMenu.php");?>
        <?php include_once ("lib/logo.php");?>

    </div>
</div>
</body>
</html>
