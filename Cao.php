<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cao
 *
 * @author kelvio
 */
include("SerVivoi.php");
class Cao {
    private $nome;
    //put your code here
    public static function getNome(){
        return self::$nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
     public static function latir(){
        echo "Está latindo";
    }
}
