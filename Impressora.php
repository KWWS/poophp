<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Impressora
 *
 * @author kelvio
 */
include("Iucb.php");
 class Impressora implements Iucb{
    //put your code here
    function connect(){
        return "Conectar";
    }
    
    function desconnect(){
        return "Desconectar";
    }
    
    function verVersion(){
        return self::versao;
    }
    
}
