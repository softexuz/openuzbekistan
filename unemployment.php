<?php
/**
 * Created by Radon
 * Date: 12/14/2019
 * Time: 4:15 PM
 */

//todo ishsizlar viloyatlarda

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
    <script src="add/vendor.min.js"></script>
    <script src="add/main.js"></script>
    <link href="add/main.css" rel="stylesheet">
</head>
<body>
<div id="wrapper" class="transition">
    <div id="main" class="transition">
        <div id="mapWrap" class="transition">
            <!-- Information -->
            <br><br><br><br><br>

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
        <div id="introChoice">Statistik ma'lumot 2019</div>
        <div id="indicWrap">
            <ul>
                <li id="unemployment" class="indicBtn" data-link="unemployment" onclick="alert('Клик!')">
                    <div class="indicImg transition">
                        <img src="img/indicator/unemployment.png">
                    </div>
                    <div class="indicName"><span>Unemployment</span></div>
                </li>
                <li id="inflation" class="indicBtn" data-link="inflation">
                    <div class="indicImg transition">
                        <img src="img/indicator/inflation.png">
                    </div>
                    <div class="indicName"><span>Inflation</span></div>
                </li>
                <li id="production" class="indicBtn" data-link="production">
                    <div class="indicImg transition">
                        <img src="img/indicator/production.png">
                    </div>
                    <div class="indicName"><span>Industrial production</span></div>
                </li>
                <li id="deficit" class="indicBtn" data-link="deficit">
                    <div class="indicImg transition">
                        <img src="img/indicator/deficit.png">
                    </div>
                    <div class="indicName"><span>Government deficit/surplus</span></div>
                </li>
                <li id="debt" class="indicBtn" data-link="debt">
                    <div class="indicImg transition">
                        <img src="img/indicator/debt.png">
                    </div>
                    <div class="indicName"><span>Government debt</span></div>
                </li>
                <li id="labour" class="indicBtn" data-link="labour">
                    <div class="indicImg transition">
                        <img src="img/indicator/labour.png">
                    </div>
                    <div class="indicName"><span>Labour cost</span></div>
                </li>
                <li id="gdp" class="indicBtn" data-link="gdp">
                    <div class="indicImg transition">
                        <img src="img/indicator/gdp.png">
                    </div>
                    <div class="indicName"><span>GDP</span></div>
                </li>
                <li id="gdphab" class="indicBtn" data-link="gdphab">
                    <div class="indicImg transition">
                        <img src="img/indicator/gdphab.png">
                    </div>
                    <div class="indicName"><span>GDP per inhabitant</span></div>
                </li>
            </ul>
        </div>
        <div id="logo" class="transition">
            <a href="index.html" title="" style="background: url(&quot;img/logoDesktop.png&quot;) left top / 190px 55px no-repeat;"></a>
        </div>
    </div>
</div>
</body>
</html>
