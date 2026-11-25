<?php

require 'models/database.php';
require 'models/task.php';
require 'controllers/homeController.php';
require 'controllers/aboutController.php';
require 'controllers/taskController.php';
require 'controllers/errorController.php';
$url = trim(substr($_SERVER['REQUEST_URI'], strlen('/MVC/')), '/');
$parts = explode('/', $url);

if($url == '' || $url == 'index.php'){
    $controller = new homeController();
    $controller->index();
}
elseif($url=='about'){
    $controller = new aboutController();
    $controller->about();
}
elseif ($url == 'tasks') {
    $controller = new taskController();
    $controller->index();
}
 elseif ($parts[0] == 'tasks' && count($parts) == 2 && ctype_digit($parts[1])) {
    $controller = new taskController();
    $controller->show((int)$parts[1]);
} 
else{
    $controller = new errorController();
    $controller->error();
}
?>