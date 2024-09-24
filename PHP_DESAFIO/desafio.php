<?php
require_once 'salavirtual.php';
require_once 'pessoa.php';



new Pessoa('João', 24, 'Aluno');
new Pessoa('Orlando', 38, 'Professor');
new Pessoa('Kauê', 18, 'Aluno');
new Pessoa('Laura', 14, 'Aluno');
new Pessoa('Pedro', 28, 'Aluno');




$sv1 = new SalaVirtual(2, 20, 'Exclusivo');
$sv2 = new SalaVirtual(1, 80, 'Aberto');





var_dump($alunos);

?>