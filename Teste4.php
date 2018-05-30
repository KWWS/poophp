<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
include  ("Writer.php");
$writer = new Writer();
$writer->writeNow(" Hello" );
  
 */
include("NewConta.php");
$conta = new NewConta(120,45);
echo $conta->getNumero();