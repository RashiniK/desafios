<?php

class SalaVirtual{
    public $numero;
    public $qtde;
    public $tipoAcesso;
    public $alunos;
    
    $alunos = array();

    public function __construct($numero, $qtde, $tipoAcesso){

        if(is_numeric($numero)){
            $this->$numero = $numero;
        }

        if(is_numeric($qtde)){
            $this->$qtde = $qtde;
        }

        $this->$tipoAcesso = $tipoAcesso;
    }

    public function acesso(){

    }

}

?>