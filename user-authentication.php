<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error());
mysqli_select_db($banco) or die (mysqli_error());
?>

<html>
    <head>
    
        <meta charset="utf-8">
        <title>Checando o login</title>
        <script type="text/javascript">
        
            function loginsuccessfully() {
                setTimeout("windows.location='pagina.php'", 5000);
                
            }
        
            function loginfailed() {
                setTimeout("windows.location='vongola.php'", 5000)
            }
        </script>
    
    </head>
<?php
$email= $_POST('email');
$senha= $_POST('senha');
$sql= mysql_query("SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'") or die (mysql_error());
$row= mysql_num_rows($sql);
if ($row < 0) {
    session_start();
    $_SESSION['email']=$_POST['email'];
    $_SESSION['senha']=$_POST['senha'];

} else {

}
?>
</html>