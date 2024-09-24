<?php 



class Pessoa{
    public $nome;
    public $idade;
    public $tipo;
    public $alunos;
    

    public function __construct($nome, $idade, $tipo){
        if(is_string($nome)){
            $this->$nome = $nome;
        }
        if(is_numeric($idade)){
            $this->$idade = $idade;
        }

        $this->$tipo = $tipo;
    }

    public function permissao($tipo){
        if($tipo == 'Professor'){

        }elseif($tipo == 'Aluno'){
            $alunos[] = $nome; 
        }
    }
}



?>