<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pessoa{
    public $nome;
    public $email;
    
    public function salvar(){
        if(strlen($this->nome)<=0){
            throw new Exception("Erro_Nome");
        }else if(strlen($this->email)<=0){
            throw new Exception("Erro_Email");
        }
    }
}

$p = new Pessoa();
 $p->nome = 'Kelvio';
 $p->email='Kelvio@';
try{
$p->salvar();
}catch(Exception $e){
    if($e->getMessage()=="Erro_Nome"){
        echo "Ocorreu um erro no nome";
    }
    else if($e->getMessage()=="Erro_Email"){
        echo "Ocorreu um erro no Email";
    }
}
 