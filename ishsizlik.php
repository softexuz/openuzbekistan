<?php
/**
 * Created by Radon
 * Date: 12/15/2019
 * Time: 9:10 AM
 */


?>

<!DOCTYPE html>
<html lang="ru">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ishsizlik viloyatlar kesimida</title>
    <!--    resources-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha256-TQq84xX6vkwR0Qs1qH5ADkP+MvH0W+9E7TdHJsoIQiM=" crossorigin="anonymous"></script>
</head>
<body>
            <canvas id="myChart" width="400" height="400"></canvas>
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
                        type: 'line',
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
                                label: 'Ishsizlik darajasi O`zbekiston Respublikasi',
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
                                backgroundColor: 'rgba',
                                borderColor: 'blue',
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
                            }
                        }
                    });
                }

            </script>
</body>
</html>