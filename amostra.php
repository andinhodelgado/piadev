<?php

require('./dao/AmostraDAO.class.php');

$amostraDAO = new AmostraDAO();

//cria o array associativo
$dados = array("dados"=>$amostraDAO->dados());

//converte o conteúdo do array associativo para uma string JSON
$json_str = json_encode($dados);

//imprime a string JSON
echo $json_str;
