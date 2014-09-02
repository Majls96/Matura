
<?php
require 'View.php';

require '../database/model.php';


$model = new Model();
$result = $model->vypisKurzu();
$view = new View();

echo $view->render('../templates/ukazKurzy.php', array("result" => $result));
?>

