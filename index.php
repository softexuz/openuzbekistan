<?php
/**
 * Created by Radon
 * Date: 12/14/2019
 * Time: 12:15 PM
 */

include_once("config.php");

$db = new PDO("mysql:host=".DB_['host'].";dbname=".DB_['db'], DB_['user'], DB_['pass']);

?>
<!DOCTYPE html>
<html lang="ru">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>OPEN UZBEKISTAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="style.min.css">
    <!-- For map -->
    <script src="lib/js/jquery.js.download"></script>
    <script src="lib/js/vendor.min.js"></script>
    <script src="lib/js/main.js"></script>
    <link href="lib/css/main.css" rel="stylesheet">
    <!--    resources-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha256-TQq84xX6vkwR0Qs1qH5ADkP+MvH0W+9E7TdHJsoIQiM=" crossorigin="anonymous"></script>

</head>
<body>
<div id="wrapper" class="transition">
    <div id="main" class="transition">
        <div id="mapWrap" class="transition">
            <!-- Information -->
            <br><br><br><br><br>
            <center>
                <div>

                    <div class="uzb_map">
                        <div class="tab_wrapper">
                            <ul class="tabs">
                                <li class="tab current" data-tab="pathXorazm"></li>
                                <li class="tab" data-tab="pathNavoiy"></li>
                                <li class="tab" data-tab="pathBuxoro"></li>
                                <li class="tab" data-tab="pathQashqadaryo"></li>
                                <li class="tab" data-tab="pathSurxondaryo"></li>
                                <li class="tab" data-tab="pathSamarqand"></li>
                                <li class="tab" data-tab="pathJizzax"></li>
                                <li class="tab" data-tab="pathGuliston"></li>
                                <li class="tab" data-tab="pathToshkent"></li>
                                <li class="tab" data-tab="pathToshkentsh"></li>
                                <li class="tab" data-tab="pathNamangan"></li>
                                <li class="tab" data-tab="pathAndijon"></li>
                                <li class="tab" data-tab="pathFargona"></li>
                                <li class="tab" data-tab="pathQaraqalpaqstan"></li>
                                <li class="tab" data-tab="pathEcology"></li>
                            </ul>
                        </div>
                        <figure style="text-align: center;margin: 0 auto;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="500px" viewBox="0 0 854.058 556.606">
                                <g id="Uzbekistan_provinces_numbered" transform="translate(-3.417 -3.423)">
                                    <g id="layerHarita" transform="translate(106.031 -324.813)">
                                        <path data-tab="pathXorazm" class="tooltip tooltipstered" d="M162.839,620.355l-3.2,4.8-8.528-6.4H121.264l-5.864-2.132L100.476,605.43,99.41,601.7l6.4-7.462-3.731-7.995-1.6-4.265,2.132-2.665,7.995,1.6-7.462-9.594-9.061-1.6.533-3.731h3.2v-5.863l2.665-5.33-9.061-9.6h3.731l15.99,14.392-1.066,4.264,3.2,4.264,6.4,1.6v4.8l3.2,6.929,10.66,11.727,9.061,6.929,8,8.528h4.8Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathNavoiy" class="tooltip tooltipstered" d="M203.344,613.869l-18.656-27.188-3.719-8,12.25-7.468,1.062-2.657-4.25-13.343-1.062-17.032,4.25-6.406,7.469-7.469,6.406-12.781L218.813,501.4l6.375-8-1.594-2.125-8-2.156-9.063-6.907-6.906-9.062,28.242-4.8,29.316-4.264,57.033,5.863,22.919-12.793,14.925,18.656,13.858,8.528,13.859,27.717,14.924-7.995-1.6,36.778-2.132,3.731,2.132,25.052,22.387-.533,3.731,16.523,9.061,36.779,5.33,1.6,1.066,5.33-5.33,2.132-.533,5.863,5.33,17.057,1.066,3.731-7.462,1.066-1.066,6.929-2.665,3.2h-3.2l-.533-4.8-3.731-1.6-5.33,5.863h-3.2l-1.6-6.4h-4.265l-3.2,6.929-.533,13.325-3.731,8,4.264,4.8-4.8,4.8-3.2-1.066-3.2,1.6-7.462-3.731-2.665,4.264-10.661-6.4-3.2,5.33,1.066,5.33-.533,4.264-4.8.533-4.264-2.665L354.192,713h-4.8l-3.2,1.066,1.6,3.732,4.8,2.665,1.066,4.264-2.132,10.127-9.594-2.132,3.731-4.264v-3.731l-6.4-1.066-5.863,1.6-3.2-2.665-9.061-13.859L323.277,705l6.929-2.132,3.731-10.127-1.6-3.2,3.2-3.731-1.066-6.93,3.731-3.2,6.93,4.8,4.8-5.33,4.264-.533,1.066-4.8,6.929-5.33,1.066-5.33-4.264-.533-3.731-2.132h-2.665l-7.995,4.8h-4.8l-4.264-2.665-8.528-11.194V637.311l-2.132-4.8-3.2,1.066-2.132,4.264-9.061,1.066-3.2.533V648.5l-1.6,2.133-14.391,1.6-2.132-2.666,2.665-4.264-1.6-4.8-4.8.533-8,7.462-.533,4.265,4.264,6.4-2.132,2.132h-5.331l-3.731-3.2.533-7.462-27.184-16.524-3.731,6.929-4.264.533-1.6-5.33v-6.4l-3.2-3.2-3.731-5.33-1.066-8.529-2.132-5.863Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathBuxoro" class="tooltip tooltipstered" d="M223.594,606.938l-20.25,6.937v.094l10.125,18.656-20.781,7.438,3.187,13.343,4.281,12.782,11.719,8.531,2.656,22.937,2.688,4.25,26.094,22.907,26.125,16,9.062,13.875,24,15.437,9.594-1.062,5.844-6.938,5.343-1.594,6.407.532,4.25-1.594.531-9.063,7.469-5.843,6.937-4.282,2.656-4.25v-1.187l-9.593-2.125,3.718-4.25v-3.75l-6.375-1.063-5.875,1.594-3.187-2.656-9.063-13.844,2.125-3.75,6.938-2.125,3.719-10.125-1.594-3.219,3.187-3.718-1.062-6.938,3.719-3.187,6.937,4.812,4.813-5.344,4.25-.531,1.062-4.812,6.938-5.313,1.062-5.344-4.25-.531-3.75-2.125h-2.656l-8,4.781h-4.781l-4.282-2.656L327,647.438V637.313l-2.125-4.813-3.187,1.094-2.157,4.25-9.031,1.062-3.219.532V648.5l-1.593,2.125-14.407,1.625-2.125-2.687,2.688-4.25-1.625-4.813-4.781.531-8,7.469-.532,4.281,4.25,6.375-2.125,2.125h-5.312l-3.75-3.187.531-7.469-27.187-16.5-3.719,6.906-4.25.532-1.625-5.313v-6.406l-3.188-3.188-3.718-5.343-1.063-8.532Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathQashqadaryo" class="tooltip tooltipstered" d="M427.215,824.486l7.456-2.64h7.464l3.731-4.358,1.6-6.4,2.689-4.284,3.728-.53,4.784-7.448-1.609-4.275,1.066-4.787,10.153-1.084,1.585-7.46-.012-4.775,2.668-.556,4.266,2.139,4.283-2.143,1.049-3.2-4.25-4.235,3.721-5.891-2.139-9.579-14.392-2.667.536-5.869L453.878,739.1l-7.478,7.462-6.916-6.913-10.142-3.717-3.74,3.182-4.252,7.452-4.8-1.058L412.3,740.7l2.127.554-6.384,5.86-3.739-2.672-.526-5.844-3.73,2.65-5.874,4.256-4.785-.528-4.819-10.664-4.8-2.646-3.718,3.717-24.52-.54,0,1.175-2.665,4.264-6.929,4.264-7.463,5.864-.533,9.061-4.264,1.6-6.4-.533-5.33,1.6-5.863,6.929,13.325,14.392,20.255,10.127,29.316,21.321,8.528,1.066,4.8-3.2,8.528,2.132,7.463,5.33,11.726,6.4,12.792,2.665Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathSurxondaryo" class="tooltip tooltipstered" d="M428.814,829.3l-1.6-4.811,7.456-2.64h7.464l3.731-4.358,1.6-6.4,2.689-4.284,3.728-.53,4.784-7.448-1.609-4.275,1.066-4.787,10.153-1.084,1.585-7.46-.012-4.775,2.668-.556,4.266,2.139,4.283-2.143,1.049-3.2-4.25-4.235,3.721-5.891.534-.952,6.4,2.132,13.326-2.132L507.7,771.2l-6.4,4.8v15.458l4.8,6.929,2.132,6.929,8.528,4.8,2.665,5.863L514.1,829.83l-7.462,1.6-.533,4.8-4.264,10.661-8.529,12.259-1.6,7.462,2.132,9.6-2.665,5.863-2.132-2.132-6.4-2.665-3.2,3.2-4.264-4.8-3.731,5.863-8,2.132-2.665-5.33-5.33-2.132v-3.732L448,869.806l-14.925,5.331-7.995-3.732,2.665-5.33-3.731-2.665,1.066-19.721,7.462-8.529Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathSamarqand" class="tooltip tooltipstered" d="M465.594,744.438l-11.719-5.344-7.469,7.469-6.937-6.907-10.125-3.718-3.75,3.187-4.25,7.438-4.781-1.063-3.032-3.406-5.5,5.031-3.718-2.687-.532-5.844-3.75,2.656-5.875,4.25-4.781-.531-4.812-10.656-4.782-2.657-3.718,3.719-24.532-.531,2.125-10.125-1.062-4.25-4.813-2.688-1.593-3.718L349.406,713h4.782l1.062-5.344,4.281,2.688,4.782-.531.531-4.282-1.063-5.312,3.188-5.344,10.687,6.406L380.313,697l7.468,3.75,3.188-1.594,3.187,1.063,4.813-4.813-4.281-4.781,3.75-8,.531-13.344,3.187-6.906h4.282l1.593,6.375h3.188l5.344-5.844,3.718,1.594.532,4.781h3.218l2.657-3.187,1.062-6.938,7.469-1.062-.542-.961-.533,7.462,1.066,5.33,3.2,1.6,2.132,3.731-3.731,3.731v5.864l2.665,3.2,6.929.533,3.2,6.4h3.2l1.6,3.2-1.6,4.8,3.731,3.731H459.2l5.33-2.132,10.128,4.264v3.2l-3.731,2.132-2.665,4.8,3.2,9.594-3.2,2.665Zm-52.063-2.344.907-.844-2.157-.562Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathJizzax" class="tooltip tooltipstered" d="M471.469,728.563l-3.219-9.594,2.688-4.813,3.718-2.125v-3.187l-10.125-4.281-5.343,2.156h-2.657l-3.718-3.75,1.593-4.781-1.593-3.219h-3.219l-3.188-6.375-6.937-.531-2.656-3.219V679l3.718-3.75-2.125-3.719-3.187-1.593-1.063-5.344.469-6.406.594-.094-1.063-3.719-5.343-17.062.531-5.875,5.344-2.125L433.625,624l.519-.447h0l14.392,2.132,30.382-5.863,4.8,2.132,3.731-2.132,4.8,9.061,5.33-1.6-2.132,12.259-2.132,2.665v2.665L507.7,653.4v10.66L497.04,675.788l1.066,6.93,6.93.533,12.792-3.732,3.731,3.732-2.665,3.731.533,4.8,4.8,1.6,2.132,2.665-6.929,3.2,4.264,4.8,2.665,1.6,1.066,12.793-5.33,6.929h-5.863l-34.646-2.665h-3.731Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathGuliston" class="tooltip tooltipstered" d="M534.365,690.185l2.644,1.6,8.018-2.681-2.145-3.724-15.457,2.143-2.663-4.281L545,680.068l2.672-7.043,2.13,3.719,3.212.54,1.07-3.18-5.344-5.778.533-5.33-2.132-6.929-20.255-19.189-.533-5.33-6.4,3.731,1.066,13.325h2.665v7.463l-3.731-.533-4.264,1.6L507.7,653.4v10.66L497.04,675.788l1.066,6.93,6.93.533,12.792-3.732,3.731,3.732-2.665,3.731.533,4.8,4.8,1.6,2.132,2.665-6.929,3.2,4.264,4.8,2.665,1.6,6.4,1.066-2.133-9.594,5.331,5.33,4.264-.533-7.462-10.66Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathToshkent" class="tooltip tooltipstered" d="M554.087,674.1l-5.344-5.778.533-5.33-2.132-6.929-20.255-19.189-.533-5.33,2.132-6.929,13.859-8,.533-13.325,14.924-5.863,5.863-9.594,8.529-5.864,14.391-3.731,3.2-2.132,10.128-13.858.533-5.863,8.528-4.265,7.995,4.8,4.264-10.128,10.128-6.929,3.731-3.2,10.66,5.33v4.8L627.1,555.327v9.061H619.1l-7.462,11.726-5.33,4.264-10.127,6.4v4.8l12.259.533,2.132,4.8-2.132,7.995,6.4,9.594,2.132,7.463-2.132,3.2-3.2-3.731-2.132,2.132-.533,7.462-8.528,6.929-16.524,6.4-3.2,5.33-5.863.533-10.66-10.66-5.331,3.731-.533,4.264V655l-5.863,3.731,4.264,5.863,1.6,5.33h0Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathNamangan" class="tooltip tooltipstered" d="M610.573,596.9l-2.132,7.995,6.4,9.594,2.132,7.463-.533-1.6,3.2.533,2.132,4.264-2.132,3.2,9.6,12.792,9.594-2.132,10.127.533,4.8,3.2,6.4.533,6.4-6.4,5.863-9.594L682,625.152l10.128.533,5.33-3.731,1.6-5.331L695.323,601.7l-4.265,4.8-8.528-5.33-.533-3.2-4.8-6.929h-4.8l-1.6-8.529h-2.665l-.533,5.331.533,5.33-2.132,7.995-5.33-2.665-1.067,2.132.533,13.325-4.264-3.731-1.066,3.2-5.33-4.264v5.33l-1.6.533-9.061-6.4-11.194-1.066V600.1l-4.264-7.462Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathAndijon" class="tooltip tooltipstered" d="M666.54,636.878l5.863-9.594L682,625.152l10.128.533,5.33-3.731,1.6-5.331,5.863-1.066.533-4.8,8.528,4.264,1.066,3.731,5.863,2.133,25.052,1.066,3.731,3.2-18.655,10.127-1.066,7.462h-3.731l-.533,3.731H721.44l-8.528-5.33-2.665,2.132,5.33,9.062-2.665,3.731-5.863-2.665v-4.265l-7.462-6.4-15.991-5.33Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathFargona" class="tooltip tooltipstered" d="M629.219,641.156,638.813,639l10.125.531,4.812,3.219,6.406.531,6.375-6.406,17.063.531,16,5.344,7.469,6.375v4.281l-8.009,0v5.33l-6.4,3.2v3.2l-6.93,3.731-2.132,4.264-4.264,3.2-4.264-9.061-1.6,3.2-4.8,1.066-9.062-5.33L628.7,675.788h-3.2l-4.8-9.594h-5.33l-5.33-3.2,1.066-3.2,9.594-6.929,5.863-5.864Zm17.6,51.689,4.8,1.066h5.863l-.533-5.33v-6.4h-6.4l-4.8-5.331-2.132,3.2,1.6,4.265-1.6,2.132,4.8,2.132Zm33.047-3.2h3.2l3.731-1.066-1.066-4.264Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <path data-tab="pathQaraqalpaqstan" class="tooltip tooltipstered" d="M42.906,329.313l-122.063,28.25-22.375,239.344,50.625,8.531,8.531-5.875-5.312-3.187-3.219-6.937-1.062-12.781,1.063-12.812,19.719-15.969,4.281-1.062,10.125,2.656,11.187-.531v-3.219l3.188-1.594,1.062-6.906v-4.812l1.094-2.656,6.375-2.687,5.344,4.813,8,8L20,543.594h8l-8.531-13.844L17.843,526l-6.375-4.25v-2.656l8-2.156,9.594,2.688,4.25-9.062L48.25,527.626l10.656,2.125,5.313,13.844,15.031-.531,12.156,2.125h3.75l15.969,14.406-1.062,4.25,3.219,4.281,6.375,1.594V574.5l3.219,6.938,10.656,11.719,9.063,6.938,8,8.531h4.781l7.469,11.719,3.188-3.719,4.281-.531,6.906,2.125,8.531,6.938,5.875,8.531,1.063,6.375,20.781-7.437-10.125-18.656-18.656-27.187-3.719-8,12.25-7.469,1.063-2.656-4.25-13.344-1.062-17.031,4.25-6.406,7.469-7.469,6.406-12.781L218.812,501.5l6.375-8-1.594-2.125-8-2.156-9.062-6.906-6.906-9.062-40.531-48.5-3.187-8v-5.875l-10.656-7.125-1.687-1.219-4.36-3.786-10.569-1.61-11.1-6.237-6.837-5.326-9.834-9.834-40.293-33.1-10.037-7.765Z" fill="#2980b9" stroke="#f2f3f7" stroke-width="2"></path>
                                        <ellipse data-tab="pathToshkentsh" class="tooltip tooltipstered" stroke="#f2f3f7" ry="6" rx="5.5" id="svg_23" cy="600" cx="575" stroke-width="2" fill="#2980b9"></ellipse>
                                    </g>
                                </g>
                            </svg>
                        </figure>
                    </div>



                </div>
            </center>

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