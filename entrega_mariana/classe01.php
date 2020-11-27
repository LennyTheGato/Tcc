<?php

require_once 'conexao.php';

class Cliente{
    
    private $idCliente;
    private $nome;
    private $email;
    private $telefone;
    private $mensagem;

    
    function __construct($idCliente, $nome, $email, $telefone, $mensagem) {
        $this->idCliente = $idCliente;
        $this->nome = $nome;
        $this->email  = $email;
        $this->telefone = $telefone;
        $this->mensagem  = $mensagem;
    }
    
    public function selectAll(){
        $conexao = new conexao();
        return ($conexao->select(""));
        
    }
    
    public function delete( $id ) {
        $conexao = new conexao();
        return ($conexao->delete($id));
    }
    
    
    public function insert() {
        $conexao = new conexao();
        return ($conexao->insert($this->idCliente, $this->nome, $this->email, $this->telefone, $this->mensagem));
    }
    public function update() {
        $conexao = new conexao();
        return ($conexao->updade($this->idCliente, $this->nome, $this->email, $this->telefone, $this->mensagem));
    }
   
    public function save(){
        $conexao = new conexao();
        $conexao->insert( );
    }

    public function getIdCliente(){
        return $this->idCliente;
    }

    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }
    
    public function getMensagem(){
        return $this->mensagem;
    }

    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
        return $this;
    }    

}

?>