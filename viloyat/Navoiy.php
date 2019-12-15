<?php
/**
 * Created by Radon
 * Date: 12/14/2019
 * Time: 4:15 PM
 */

?>

<h1 style="display: block; margin: 20px 10px 10px 60px; font-size: 24px; text-align: center"> Navoiy viloyati</h1>

<!--<table class="table table-striped table-dark" style="-->
<!--        width: 1000px;-->
<!--        text-align: center;-->
<!--        margin: 30px auto;">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th scope="col">#</th>-->
<!--        <th scope="col">value</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    <tr>-->
<!--        <th scope="row">Aholi soni</th>-->
<!--        <td>2500000</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <th scope="row">Bizneslar</th>-->
<!--        <td>6546841</td>-->
<!--    </tr>-->
<!--    </tbody>-->
<!--</table>-->

<div class="row" style="text-align: center">
    <div class="col-3">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Bug`doy</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Go`sht</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Guruch</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Lavlagi</a>
        </div>
    </div>
    <div class="col-7">
        <div class="tab-content" id="nav-tabContent" style="display: block">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <div class="chart-container" style="position: relative; border-radius: 14px; overflow: hidden; margin: auto;">
                    <canvas id="bugdoyChart"></canvas>
                </div>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="chart-container" style="position: relative; border-radius: 14px; overflow: hidden; margin: auto;">
                    <canvas id="gushtChart"></canvas>
                </div>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <div class="chart-container" style="position: relative; border-radius: 14px; overflow: hidden; margin: auto;">
                    <canvas id="guruchChart"></canvas>
                </div>
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <div class="chart-container" style="position: relative; border-radius: 14px; overflow: hidden; margin: auto;">
                    <canvas id="lavlagiChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    var ctxBugdoy = document.getElementById('bugdoyChart');
    var ctxGusht = document.getElementById('gushtChart');
    var ctxGuruch = document.getElementById('guruchChart');
    var ctxLavlagi = document.getElementById('lavlagiChart');

    var dataBugdoy = [];
    var dataGusht = [];
    var dataGuruch = [];
    var dataLavlagi = [];

    var labels = ['yanvar','fevral','mart','aprel','may','iyun','iyul','avgust','sentabr','oktabr'];

    $.get("/lib/getNavoiy.php", function(data, status){
        var objData = JSON.parse(data);
        console.log(objData);
        for (i in objData){
            if (objData[i].id==1){ //bugdoy
                GG = true;
                for (k in objData[i]){
                    console.log(objData[i][k]);
                    if (k != 'G4' && GG){
                        continue;
                    }
                    GG = false;
                    dataBugdoy.push(parseInt(objData[i][k]));
                }
            }
            if (objData[i].id==9){ //guruch
                GG = true;
                for (k in objData[i]){
                    console.log(objData[i][k]);
                    if (k != 'G4' && GG){
                        continue;
                    }
                    GG = false;
                    dataGuruch.push(parseInt(objData[i][k]));
                }
            }
            if (objData[i].id==49){ //gusht
                GG = true;
                for (k in objData[i]){
                    console.log(objData[i][k]);
                    if (k != 'G4' && GG){
                        continue;
                    }
                    GG = false;
                    dataGusht.push(parseInt(objData[i][k]));
                }
            }
            if (objData[i].id==20){ //lavlagi
                GG = true;
                for (k in objData[i]){
                    console.log(objData[i][k]);
                    if (k != 'G4' && GG){
                        continue;
                    }
                    GG = false;
                    dataLavlagi.push(parseInt(objData[i][k]));
                }
            }

        }
        console.log(dataBugdoy);
        createChart("line", ctxBugdoy,  labels, "Navoiy" , dataBugdoy , 'rgba(36, 243, 133, 0.74)');
        createChart("line", ctxGuruch,  labels, "Navoiy" , dataGuruch , 'rgba(36, 243, 133, 0.74)');
        createChart("line", ctxGusht,   labels, "Navoiy" , dataGusht , 'rgba(36, 243, 133, 0.74)');
        createChart("line", ctxLavlagi, labels, "Navoiy" , dataLavlagi , 'rgba(36, 243, 133, 0.74)');
    });

    function createChart(type, ctx, labels, label, data, color) {
         new Chart(ctx, {
            type: type,
            data: {
                labels: labels,
                datasets: [{
                    label: label,
                    data: data,
                    borderColor: 'rgba(36, 243, 133, 0.74)',
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    labels: {
                        fontColor: '#323232'
                    }
                }

            }
        });
        ctx.style.backgroundColor = 'rgba(255, 255, 255, 0.88)';
    }




    function createChartx() {
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
                    label: 'Navoiy',
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