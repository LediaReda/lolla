<?php

include_once("../../App/Config.php");
include_once(MAIN_PATH . "App/Database.php");
include_once(MAIN_PATH . "App/Session.php");
include_once(MAIN_PATH . "App/Validation.php");


if (isset($_GET['id'])) {
$id =$_GET['id'];
$database=new Update.php();
if($database->delete("products",['id'=>$id])){
    Session::set("success","deleted successfully");
}else{
    Session::set("error","faild");  
}

}

header("location:../../Views/products/index.php");