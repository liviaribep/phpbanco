<?php
    include "conecta.php";
    $sql ="SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    echo "<br>";
    echo "<b>-- Todos os registros</b>";
    echo "<br>";
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){ //caso exista algum registro (numero de linhas existentes)
        while($registro = mysqli_fetch_assoc($resultado)){
            echo "Id: " .  $registro["id"]. " - Nome: " . $registro["nome"].
            " " . $registro["senha"]. " - Email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }

    echo "<br>";
    echo "<b>-- Nomes que começam com a letra 'a'</b>";
    echo "<br>";
    $sql ="SELECT id, nome, senha, email FROM usuario WHERE nome LIKE 'a%'";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while($registro = mysqli_fetch_assoc($resultado)){
            echo "Id: " .  $registro["id"]. " - Nome: " . $registro["nome"].
            " " . $registro["senha"]. " - Email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }

    echo "<br>";
    echo "<b>-- Ordenar registros por email em ordem alfabética</b>";
    echo "<br>";
    $sql ="SELECT id, nome, senha, email FROM usuario ORDER BY email";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while($registro = mysqli_fetch_assoc($resultado)){
            echo "Id: " .  $registro["id"]. " - Nome: " . $registro["nome"].
            " " . $registro["senha"]. " - Email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }

    echo "<br>";
    echo "<b>-- Verificar se existe usuário = 'Livia' com senha = '3012' e mostrar seu email</b>";
    echo "<br>";
    $sql ="SELECT id, nome, senha, email FROM usuario WHERE nome = 'Livia' and senha = '3012'";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while($registro = mysqli_fetch_assoc($resultado)){
             echo " - Nome: " . $registro["nome"].
            " " . $registro["senha"]. " - Email: " . $registro["email"]. "</p>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }
?>
