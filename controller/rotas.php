<?php 

if(isset($_GET['view']))
    include_once($_GET['view'].'.php');

if(isset($_GET['controller']))
    include_once('../controller/'.$_GET['controller'].'.php');
?>