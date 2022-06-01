<?php
require __DIR__ . './vendor/autoload.php';
require __DIR__ . './controllers/bootstrap.php';
function render($path){
    $page = './src/pages/' . $path . '.php';
    if(file_exists($page)){
        require $page;
    } else {
        echo $page.' not found';
    }
}
include './src/router/main.php';