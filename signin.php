<html>
    
    <head>
        <title>Cadastrando...</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>
    <body>       
<?php include("db-vongola.php") ?>
<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$estado=$_POST['estado'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$query= "INSERT INTO usuarios(nome, sobrenome,estado, email, senha) VALUES ('{$nome}', '{$sobrenome}', '{$estado}', '{$email}', '{$senha}')";
    if(mysqli_query($conexao, $query)){ ?>
        
        <script>
            alert("obrigado pelo seu cadastro.");
            window.open("vongola.php");
            
        </script>
        
<?php} else { ?>
        <script>
        </script>

            
<?php }     
mysqli_close($conexao);
?>
</body>
</html>