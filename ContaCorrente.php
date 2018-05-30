<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaCorrente
 *
 * @author kelvio
 */
include("Conta.php");

class ContaCorrente extends Conta{
    //put your code here
 
          public function sacar($valor){
        if($valor>$this->saldo){
            echo "<p>Saldo insuficiente";
        }else{
        $this-> saldo -= $valor;
        echo "</br>Foi sacado ".$valor." da conta" ;
        }
    }
    
    public function juros(){
        echo $this->saldo-1;
    }
   
}
