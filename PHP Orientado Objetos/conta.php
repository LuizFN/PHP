<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {
        $this->$status = false;
        $this->$saldo = 0;
    }

    public function setNumConta($nc) {
        $this->$numConta = $nc;
    }
    public function getNumConta() {
        return $this->$numConta;
    }
    public function setDono($dono) {
        $this->$dono = $dono;
    }
    public function getDono() {
        return $this->$dono;
    }
    public function setTipo($tipo) {
        $this->$tipo = $tipo;
    }
    public function getTipo() {
        return $this->$tipo;
    }
    public function setSaldo($saldo) {
        $this->$saldo = $saldo;
    }
    public function getSaldo() {
        return $this->$saldo;
    }
    function setStatus($status) {
        $this->$status = $status;
    }
    public function getStatus() {
        return $this->$status;
    }

    public function abrirConta($t) {
        setTipo($t)
        setStatus(true)
        if($t == "CC") {
            setSaldo(50.00)
        } else if($t == "CP") {
            setSaldo(150.00)
        }
    }

    public function fecharConta() {

    }

    public function depopsitar() {

    }

    public function sacar() {

    }

    public function pagarMensal() {

    }
}


?>