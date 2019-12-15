<?php
/**
 * Created by Radon
 * Date: 12/14/2019
 * Time: 4:15 PM
 */

?>



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


<h1 style="display: block; margin: 20px 10px 10px 60px; font-size: 24px; text-align: center">
    2019 yilda Navoiy viloyati bo`yicha dehqon bozorlaridagi ayrim tovarlarning o`rtacha narxlari* (1 kg. so'mda)
</h1>

<div class="row" id="rowCharts" style="text-align: center">
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

    var dataBugdoyToshkent = [];
    var dataGushtToshkent = [];
    var dataGuruchToshkent = [];
    var dataLavlagiToshkent = [];

    var labels = ['yanvar','fevral','mart','aprel','may','iyun','iyul','avgust','sentabr','oktabr'];

    $.get("/lib/getNavoiy.php", function(data, status){ //Navoiy
        var objData = JSON.parse(data);
        for (i in objData){
            if (objData[i].id==1){ //bugdoy
                GG = true;
                for (k in objData[i]){
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
                    if (k != 'G4' && GG){
                        continue;
                    }
                    GG = false;
                    dataLavlagi.push(parseInt(objData[i][k]));
                }
            }
        }
        $.get("/lib/getToshkent.php", function(datax, status){ //Toshkent
            var objDataToshkent = JSON.parse(datax);
            for (i in objDataToshkent){
                if (objDataToshkent[i].id==2){ //bugdoy Toshkent
                    GG = true;
                    for (k in objDataToshkent[i]){
                        if (k != 'G4' && GG){
                            continue;
                        }
                        GG = false;
                        dataBugdoyToshkent.push(parseInt(objDataToshkent[i][k]));
                    }
                }
                if (objDataToshkent[i].id==10){ //guruch Toshkent
                    GG = true;
                    for (k in objDataToshkent[i]){
                        if (k != 'G4' && GG){
                            continue;
                        }
                        GG = false;
                        dataGuruchToshkent.push(parseInt(objDataToshkent[i][k]));
                    }
                }
                if (objDataToshkent[i].id==50){ //gusht Toshkent
                    GG = true;
                    for (k in objDataToshkent[i]){
                        if (k != 'G4' && GG){
                            continue;
                        }
                        GG = false;
                        dataGushtToshkent.push(parseInt(objDataToshkent[i][k]));
                    }
                }
                if (objDataToshkent[i].id==21){ //lavlagi Toshkent
                    GG = true;
                    for (k in objDataToshkent[i]){
                        if (k != 'G4' && GG){
                            continue;
                        }
                        GG = false;
                        dataLavlagiToshkent.push(parseInt(objDataToshkent[i][k]));
                    }
                }
            }
            createChart("line", ctxBugdoy,  labels, {0:"Navoiy",1:"Toshkent"} , {0:dataBugdoy, 1:dataBugdoyToshkent});
            createChart("line", ctxGuruch,  labels, {0:"Navoiy",1:"Toshkent"} , {0:dataGuruch, 1:dataGuruchToshkent});
            createChart("line", ctxGusht,   labels, {0:"Navoiy",1:"Toshkent"} , {0:dataGusht,  1:dataGushtToshkent});
            createChart("line", ctxLavlagi, labels, {0:"Navoiy",1:"Toshkent"} , {0:dataLavlagi,1:dataLavlagiToshkent});
        });
    });

    function createChart(type, ctx, labels, label, data) {
         new Chart(ctx, {
            type: type,
            data: {
                labels: labels,
                datasets: [{
                    label: label[0],
                    data: data[0],
                    fill: false,
                    borderColor: '#0d78f2',
                    borderWidth: 2
                },{
                    label: label[1],
                    data: data[1],
                    fill: false,
                    hidden: true,
                    borderColor: '#f24652',
                    borderWidth: 2
                }]
            },
            options: {
                legend: {
                    labels: {
                        fontColor: '#323232'
                    }
                },
                tooltips: {
                    mode: 'nearest'
                }
            }
        });
        ctx.style.backgroundColor = 'rgba(255, 255, 255, 0.88)';
    }

</script>

<!--hide-show charts-->
<script>

</script>