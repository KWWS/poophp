<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("ContaCorrente.php");
/*
$conta = new ContaCorrente();
$conta->conta=1000;
$conta->digito=1;
 $conta->depositar(100);
 $conta->verSaldo();
 $conta->sacar(200);
 $conta->depositar(2000);
 $conta->sacar(800);
 $conta->verSaldo();
 */
$cc = new ContaCorrente;
$cc->depositar(400);
$cc->juros();