<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    *{
        margin: 0;
    }
    ul{
        display: flex;
        list-style: none;
        background-color: lightcoral;
    }
    li{
        padding: 10px;
    }
    a{
        text-decoration: none;
    }
    a:hover{
        background-color: red;
        color: black;
        padding: 10px;
        transition: 250ms;
    }   
    main{
        display: flex;
    }

    img{
        width: "40px";
    }
    #dados{
        font-size: 20px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        background-color: lightblue;
    }
</style>    

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href=""> Home </a> </li>
                <li><a href=""> Contato </a> </li>
                <li><a href=""> Sobre </a> </li>
                <li><a href=""> Login </a></li>
            </ul>
        </nav>    
    <main>
        <div id="imagem">
            <img src="banco.jpg">
        </div>

        <div id="dados">
            <span> ID: </span>
            <span> NOME: </span>
            <p>
            <?php 
            include "conecta.php";
            $sql ="SELECT id, nome, senha, email FROM usuario";
            $resultado = mysqli_query($conexao, $sql);
            echo "<br>";
            if (mysqli_num_rows($resultado) > 0){
                while($registro = mysqli_fetch_assoc($resultado)){
                   echo "<span> ID: </span>". $registro["id"]; "<br>";
                   echo "<span> NOME: </span>". $registro["nome"]; "<br>";
                   echo "<span> EMAIL: </span>". $registro["email"]; "<br>";
                   echo "<br>";
                }
            }
            ?>
            </p>
        </div>

    </main>
    </header>
</body>
</html>