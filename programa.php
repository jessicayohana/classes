<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/08/17
 * Time: 13:11
 */

require "classes/Conta.php";

$minhaConta = new Conta();

$minhaConta ->dono = "Jessica";
$minhaConta ->numeroConta="145826";
$minhaConta ->saldo = "508.80";

$minhaConta ->deposita(900);

$conseguiSacar = $minhaConta ->saca(400);

if($conseguiSacar){
    echo "Consegui sacar\n";
}else{
    echo "Saldo insuficiente para sacar\n";
}

echo "O cliente {$minhaConta ->dono} possui o saldo de {$minhaConta ->saldo}";