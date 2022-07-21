<?php
    class Usuario {    
        private $idUsuario;
        private $nomeUsuario;
        private $usuario;
        private $senha;
        
    public function Usuario() {
        
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }
   
    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }
   
    public function getUsuario() {
        return $this->usuario;
    }
   
    public function getSenha() {
        return $this->senha;
    }
   
    public function getIdPerfil() {
        return $this->idPerfil;
    }
   
    public function setIdUsuario($idUsuario): void {
        $this->idUsuario = $idUsuario;
    
    }

    public function setNomeUsuario($nomeUsuario): void {
        $this->nomeUsuario = $nomeUsuario;
    }
   
    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }
   
    public function setSenha($senha): void {
        $this->senha = $senha;
    }
   
    public function setIdPerfil($idPerfil): void {
        $this->idPerfil = $idPerfil;
    }   

    public function __toString()
    {
        $user = "Usuário: <br/>"
                . " - Nome Usuário: " . $this->getNomeUsuario() . "<br/>"
                . " - Usuário: " . $this->getUsuario() . "<br/>";
        return;
    }
}
?>