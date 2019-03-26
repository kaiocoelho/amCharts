<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="//www.amcharts.com/lib/4/core.js"></script>
        <script src="//www.amcharts.com/lib/4/charts.js"></script>
        <script src="//www.amcharts.com/lib/4/maps.js"></script>
        <script src="//www.amcharts.com/lib/4/themes/animated.js"></script>
        <script src="//www.amcharts.com/lib/4/themes/material.js"></script>
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <title>amCharts</title>
    </head>
    <body>
        <div id="geral">
            <div id="botoes">
                <?php require 'modal/xy.php';?>
                <?php require 'modal/pie.php';?>
                <?php require 'modal/radar.php';?>
                <?php require 'modal/sliced.php';?>
            </div> 
            <div id="conteudo">
                <div id="sup">
                    <div id="Q1"></div>
                    <div id="Q2"></div>
                </div>
                <div id="inf">
                    <div id="Q3"></div>
                    <div id="Q4"></div>
                </div>
            </div>
            <div id="rodape">

            </div>
        </div>

        <script src="js/graficos.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
