<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servivo=null;
if($_GET["tipo"]===1){
    include ("Cao.php");
    $servivo = new Cao();
}else if($_GET["tipo"]===2){
    include ("Pessoa.php");
    $servivo = new Pessoa();
 
}

if($servivo instanceof Cao){
    $servivo->latir();
}else if($servivo instanceof Pessoa){
    $servivo->falar();
}
