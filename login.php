<!DOCTYPE html>
<html lang="pt">

<?php include("head.html"); ?>

    <body>
        <center> <img src="imagem/seadUfrb.png" width="700" height="300"> </center>
        <div>
            <form action="validadorLogin.php" method="POST">
                <center>
                    <div>
                        <label>Login</label>
                        <input type="text" name="login" id="login">
                    </div>
                    <div>
                        <label>Senha</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <div>
                        <input type="submit" value="Login">
                    </div>
                </center>
            </form>
        </div>
    </body>
    
</html>