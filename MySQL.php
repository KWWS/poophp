<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MySQL implements IDB{
    function connect(){
        echo "conectando ao Mysql...";
    }
    
    function desconnect(){
         echo "desconectando o Mysql...";
    }
 
    function query($SQL){ 
        echo "Executando o comando no MySQl".$SQL;
    }
    
}