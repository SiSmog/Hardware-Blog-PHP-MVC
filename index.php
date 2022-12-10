<?php 
session_start();
require("Controllers/route.php");
require("Controllers/HomeController.php");
require("Controllers/ExploreController.php");
require("Controllers/SearchController.php");
require("Controllers/ContactController.php");
require("Controllers/ArticleController.php");
require("Controllers/SigninController.php");
require("Controllers/SignupController.php");

$route=new Route();
if(isset($_GET["url"])){
    $route->contentToRender();
}else{

}
?>