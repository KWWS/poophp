<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Exemplo Banco</h1>
        <form method="POST" action="operacao.php">
            Tipo de Conta: 
            <select name="cbTipo">
                <option value="1">Conta Corrente</option> 
                <option value="2">Conta Poupanca</option> 
                <option value="3">Conta Salario</option> 
            </select>
            </br>
            Valor:<input type= "text" name="txtValor"/>
            </br>
            <input type="submit" value="OK"/>
        </form>    
        
    </body>
</html>

 