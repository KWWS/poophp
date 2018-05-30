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
interface IDB {
    //put your code here
    function connect(); 
    function desconnect(); 
 
    function query($query); 
}
