<?php 
include_once("header.php");

if(isset($_GET['view']))
    include_once('view/'.$_GET['view'].'.php');
else if(isset($_GET['controller']))
    include_once('controller/'.$_GET['controller'].'.php');

include_once("footer.php");
?>