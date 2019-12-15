<?php
/**
 * Created by Radon
 * Date: 12/15/2019
 * Time: 12:48 PM
 */



?>
<!DOCTYPE html>
<html lang="ru">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Navoiy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- For map -->
    <script src="add/jquery.js.download"></script>
    <!--    <script src="add/vendor.min.js"></script>-->
    <script src="add/main.js"></script>
    <!--    resources-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha256-TQq84xX6vkwR0Qs1qH5ADkP+MvH0W+9E7TdHJsoIQiM=" crossorigin="anonymous"></script>
    <!--    bootstrap-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="add/main.css" rel="stylesheet">
    <link rel="stylesheet" href="style.min.css">

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

            <?php
                switch ($_GET["viloyat"]){
                    case "Navoiy":
                        include_once("viloyat/Navoiy.php");
                        break;
                    default:
                        echo "Ooops! no data =(";
                        break;
                }
            ?>


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
