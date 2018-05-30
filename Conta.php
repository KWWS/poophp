<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conta
 *
 * @author kelvio
 */
abstract class Conta {
    //put your code here
    protected $agencia;
    protected $numero;
    protected $saldo;
    
    public function depositar($valor){
        $this->saldo+=$valor;
    }
    public function verSaldo( ){
         echo $this->saldo;
    }
    public function sacar($valor){
        $this->saldo-=$valor;
    }
    public function juros( ){
        $this->saldo+=1;
    }
}
