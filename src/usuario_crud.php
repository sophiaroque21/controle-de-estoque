<?php 
//usuario_crud.php

// Função para buscar todos os usuários do banco de dados
//PDO $conexao - Objeto de conexão com o banco de dados
function buscarUsuario(PDO $conexão)
{

// Define uma string contendo o comando SQL que será enviado ao banco de dados.
// Seleciona as colunas id, nome e email da tabela 'usuarios' ordenando pela coluna 'nomes' 
$sql = "SELECT id,nome,email FROM usuarios ORDER BY nome";
//$stmt
//$queery

// O método prepare() organiza o SQL para ser enviado com segurança, 
 // criando um objeto de declaração (statement) na variável $consulta.
$consulta = $conexão->prepare($sql);

// O método execute() efetivamente envia o comando preparado para o servidor 
// de banco de dados para ser processado.
$consulta->execute();


// Retorna o resultado da consulta para quem chamou a função.
// fetch() captura apenas UMA linha (o primeiro registro encontrado).
// PDO::FETCH_ASSOC organiza os dados em um array associativo, 
// onde os índices são os nomes das colunas (ex: $usuario['nome']).
return $consulta->fetchAll(PDO:: FETCH_ASSOC);
}


?>