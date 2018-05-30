<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author kelvio
 */
interface Iucb {
    //put your code here
    const  versao='7.0'; 
    
    function connect(); 
    function desconnect(); 
    function verVersion();
}
