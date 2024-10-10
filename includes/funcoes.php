<?php
function limparDados(string $dado) : string
{
    //Tags que são permitidas
    $tags = '<p><strong><i><ul><ol><li><h1><h2><h3>';

    //Remove tags não permitidas e converte caracteres especiais
    $retorno = htmlentities (strip_tags($dado, $tags));

    return $retorno;
}
?>