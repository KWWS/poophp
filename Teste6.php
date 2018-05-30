<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function __autoload($class_name){
    include $class_name.'.php';
}
//include("IDB.php");
/*
$tipo = $_GET["tipo"];
$DB=null;
if($tipo==="m"){
    include("MySQL.php");
    $DB=new MySQL();
}else if($tipo==="o"){
    include("Oracle.php");
    $DB=new Oracle();
 * 
 */
 $c = new ContaCorrente;
 $p = new Pessoa();