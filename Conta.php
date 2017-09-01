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
  private $saldo = 0;


  public function getSaldo():float
    {
        return $this->saldo;
    }

  public function deposita(float $valor){
      $this -> saldo +=  $valor;
  }

  public function saca(float $valor){

      if ($valor <= $this -> saldo) {
          $this->saldo -= $valor;
          return true;
      }else{
          return false;
      }
  }

   public function transferePara(Conta $contaDestino, float $valor){

      //sacar dinheiro da minha conta
      $deuCerto =  $this -> saca($valor);

      if($deuCerto);{

           //depositar o dinheiro na conta destino
          $contaDestino -> deposita($valor);
       }

   }

}
