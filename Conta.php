<?php

/**
 * Created by PhpStorm.                           (poo: php orientado objeto)
 * User: aluno
 * Date: 29/08/17
 * Time: 13:01
 */
class Conta
{
  public $numeroConta;
  public $dono;
  public $saldo;

  public function deposita($valor){
      $this -> saldo = $this -> saldo + $valor;
  }

  public function saca(float $valor){

      if ($valor <= $this -> saldo) {
          $this->saldo -= $valor;
          return true;
      }else{
          return false;
      }
  }
}