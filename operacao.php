<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $valor=$_POST["txtValor"];
 $conta=null;
 if($_POST["cb_Tipo"===1]){
     include("ContaCorrente.php");
     $conta=new ContaCorrente();
 }else if($_POST["cb_Tipo"===2]){
     include("ContaPoupanca.php");
     $conta = new ContaPoupoanca();
 }else if($_POST ["cb_Tipo"===3 ]){
     include("ContaSalario.php");
     $conta = new ContaSalario();
 }
   
 $conta->depositar($valor);
 echo $conta->verSaldo();
?>

