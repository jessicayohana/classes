<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/08/17
 * Time: 13:11
 */

require "classes/Conta.php";

$minhaConta = new Conta();

$minhaConta->dono = "Jessica";
$minhaConta->numeroConta="145826";

$minhaConta->deposita(500);

$minhaConta->saca(200);

$minhaMae = new Conta();

$minhaMae->dono = "Lilian";

$minhaConta -> transferePara($minhaMae,300);

print "O cliente {$minhaConta->dono} tem {$minhaConta->getSaldo()} de saldo";
