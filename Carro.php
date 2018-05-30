<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carro
 *
 * @author kelvio
 */
class Carro {
    //put your code here
    public $cor;
    public $ligado=false;
    private $marcha=0;
    public $velocidade=0;
    
    public function ligar(){
        if($this->ligado==false){
            $this->ligado=true;
            echo "Carro ligado";
        }else{
            echo "Você não pode ligar o carro!";
        }
    }
    
    public function trocarMarcha($marcha){
        if(($this->$marcha==0) && ($marcha==1)){
            $this->$marcha=1;
        }else if(($this->$marcha==1) && ($marcha==2)){
            $this->$marcha=2;
        }else if(($this->$marcha==2) && ($marcha==3)){
            $this->$marcha=3;
        }else if(($this->$marcha==3) && ($marcha==4)){
            $this->$marcha=4;
        }else if(($this->$marcha==4) && ($marcha==5)){
            $this->$marcha=5;
        }
    }
    
    public function desligar(){
        if($this->ligado==true){
            $this->ligado=false;
            echo "Carro desligado";
        }else{
            echo "Erro ao desligar o carro";
        }
    }
    public function acelerar($acelerar){
        if($this->ligado==true){
            if($this->marcha===1){
                if($acelerar<=20){
            
        $this->velocidade=$acelerar;
        echo "Você está: ".$this->velocidade."KM/H";
                }
            } else if($this->marcha===2){
                if($acelerar<=40){
            
        $this->velocidade=$acelerar;
        echo "Você está: ".$this->velocidade."KM/H";
            }   
            } else if($this->marcha===3){
                if($acelerar<=70){
            
        $this->velocidade=$acelerar;
        echo "Você está: ".$this->velocidade."KM/H";
            }   
        } else if($this->marcha===4){
                if($acelerar<=100){
            
        $this->velocidade=$acelerar;
        echo "Você está: ".$this->velocidade."KM/H";
            }   
        } else if($this->marcha===5){
                if($acelerar<=190){
            
        $this->velocidade=$acelerar;
        echo "Você está: ".$this->velocidade."KM/H";
            }   
        }
    }
    
    }
}
 