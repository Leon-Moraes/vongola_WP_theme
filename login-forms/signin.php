  
<?php 

    if(isset($_POST['signin-submit'])) {
        require 'db-vongola.php';      
        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $passRepeat = $_POST['pass-repeat'];        
    } 
?>