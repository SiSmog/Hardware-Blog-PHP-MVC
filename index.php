<?php 
session_start();
foreach (glob("Controllers/*") as $filename) {
    require $filename;
  }
$route=new Route();
if(isset($_GET["url"])){
    $route->contentToRender();
}else{

}
?>