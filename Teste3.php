<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Errado deste jeito, estático só faz uma instância.  
include("Cao.php");
$bob = new Cao();
$bob->setNome("Bob");
echo $bob::getNome();
echo "<br/>";
echo $bob::latir();
echo "<br/>";
echo "<br/>";
$pipoca = new Cao();
$pipoca->setNome("Pipoca");
echo $pipoca::getNome();
echo "<br/>";
echo $pipoca::latir();