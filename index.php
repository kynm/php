<?php
define('PROJECT_NAME', 'Severy form');
?>
<?php
if (($_POST)) {
    $input = mbTrimRecursive($_POST);
    $fileProjects = $_FILES;
    $dataSevery = checkValueArray($input);
	$input['technology'] = isset($input['technology']) ? $input['technology'] : [];
    $dataSevery['education'] = checkValueArray($input['education']);
    $dataSevery['technology'] = checkValueTechlology($input['technology']);
    $dataSevery['projects'] = checkValueProject($input['projects'], $fileProjects);
    file_put_contents("uploadFiles/". time(). ".json", json_encode($dataSevery));
}

function mbTrimRecursive($input)
{
    foreach ($input as $key => $value) {
        if (is_array($input[$key])) {
            $input[$key] = mbTrimRecursive($input[$key]);
        } else {
            $input[$key] = preg_replace('/^[\pZ\pC]+|[\pZ\pC]+$/u', '', $input[$key]);
        }
    }
    return $input;
}

function checkValueArray($input)
{
    foreach ($input as $key => $value) {
        if (!$value) {
            unset($input[$key]);
        }
    }
    return $input;
}

function checkValueProject($projects, $fileProjects)
{
    $dataProject = [];
    $i = 0;
    foreach ($projects as $key => $project) {
        if($project['name']) {
            $dataProject[$i] = $project;
            if ($_FILES['projects']['name'][$key]) {
                $dataProject[$i]['file'] = uploadFile($key);
            }
            $i++;
        }
    }
    return $dataProject;
}

function checkValueTechlology($technologies)
{
    $dataTechnology = [];
    $i = 0;
    foreach ($technologies as $technology) {
        if($technology['name']) {
            $dataTechnology[$i]['name'] = $technology['name'];
            $dataTechnology[$i]['value'] = $technology['value'];
            if (isset($technology['skill'])) {
                foreach ($technology['skill'] as $skill) {
                    if ($skill['name']) {
                        $dataTechnology[$i]['skill'][] = $skill;
                    }
                }
            }
            $i++;
        }
    }
    return $dataTechnology;
}

function uploadFile($key)
{
    $tmpFilePath = $_FILES['projects']['tmp_name'][$key]['file'];
    if ($tmpFilePath != ""){
        $newFilePath = "uploadFiles/" . time() . $_FILES['projects']['name'][$key]['file'];
        move_uploaded_file($tmpFilePath, $newFilePath);
        return $newFilePath;
    }
    return null;
}
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
	    <?php if (($_POST)) { ?>
		<h1 class="btn-success"><?php echo "Severy is complete" ?></h1>
	    <?php }?>
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
                    <form name="basicform" id="basicform" method="post" action="index.php" enctype="multipart/form-data">
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
