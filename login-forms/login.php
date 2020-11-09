  
<?php 

    if(isset($_POST['login-submit'])) {
        require 'db-vongola.php';      
        $username = $_POST['user'];
        $password = $_POST['pass'];        
    } 
?>