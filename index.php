<?php
define('PROJECT_NAME', 'Severy form');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo PROJECT_NAME; ?></title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/bootstrap-datetimepicker.min.js"></script>
    </head>
    <body>
        <div class="container mainbody">
            <div class="page-header">
                <h1><?php echo PROJECT_NAME; ?></h1>
            </div>
            <div class="clearfix"></div>
            <div class="container" style="padding-left: 0px; padding-right: 15px;">
                <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Severy have 3 steps!</h3>
                </div>
                <div class="panel-body">
                    <form name="basicform" id="basicform" method="post" action="yourpage.html">
                    <?php
                        include 'step1.php';
                        include 'step2.php';
                        include 'step3.php';
                    ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/step.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>