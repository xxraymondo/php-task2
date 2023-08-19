<?php
require_once UTILS . 'Router.php';
require_once ROOT. 'config/app.config.php';
require_once CONTROLLERS. 'HomeController.php';
require_once CONTROLLERS. 'AboutController.php';
$HomeController=new HomeController();
$AboutController=new AboutController();
Router::get("/",function () use ($HomeController){
    $HomeController->index();
});
Router::get("/about",function () use ($AboutController){
    $AboutController->about();
});
Router::get("/profile",function () use ($HomeController){
    $HomeController->profile();
});
Router::get("/add",function () use ($HomeController){
    $HomeController->add();
});
Router::get("/my-friends",function () use ($HomeController){
    $HomeController->myFriends();
});
?>