<?php include("header.php") ?>
<link href="cadastro.css" rel="stylesheet">
</head>
    <body class="main-body">
        <main>
            <div class="display">
                <form name="signup" method="post" action="cadastrando.php">
                    <div class="cadastro">

                        <p><input class="input" type="text" placeholder="nome" name="nome"/> <br/><br/></p>
                        <p><input class="input" type="text" placeholder="sobrenome" name="sobrenome"/> <br/><br/></p>
                        <p><input class="input" type="text" placeholder="estado" name="estado"/> <br/><br/></p>
                        <p><input class="input" type="text" placeholder="email" name="email"/> <br/><br/></p>
                        <p><input class="input" type="text"  placeholder="usuario" name="Usuario"/><br/><br/></p>
                        <p><input class="input" type="password" placeholder="senha" name="senha"/> <br/><br/></p>
                        <p><input class="button" type="submit" value="SignIn"/></p>

                    </div>
                </form>
                <form method="post" action="user-authentication.php">
                    <div class="entrar">
                        
                        <input class="input" type="text" placeholder="email" name="e-mail"/> <br/> 
                        <input class="input" type="password" placeholder="senha" name="senha"/> <br/> 
                        <input class="buttom" type="submit" value="login"/>
                    </div>
                </form>
            </div>    
<?php include("footer.php") ?>