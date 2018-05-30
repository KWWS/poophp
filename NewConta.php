<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewConta
 *
 * @author kelvio
 */
class NewConta {
    //put your code here
    private $numero;
    private $agencia;
    private $saldo;
    
    public function __construct($numero, $agencia){
        $this->numero=$numero;
        $this->agencia=$agencia;
}

     public function __destruct(){
        echo "fim";
     }        

    public function NewConta( ){
       
}

 
public function setNumero($numero){
    $this->$numero=$numero;
}
public function getNumero(){
    return $this-> numero;
}
public function setAgencia($agencia){
    $this->$agencia= $agencia;
}
public function getAgencia(){
    return $this-> numero;
}
public function setSaldo($numero){
    $this->$numero=$numero;
}
public function getSaldo(){
    return $this-> numero;
}

}
