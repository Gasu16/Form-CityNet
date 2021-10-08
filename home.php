<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link href="index.css" rel="stylesheet">
    </head>
    <body>
        
                <?php

            $emailLogin = $_POST['email_login'];
            $passwordLogin = $_POST['pwdlogin'];
            setcookie("emailLogin", $emailLogin);
            setcookie("passwordLogin", $passwordLogin);
            // $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // $hashlog = password_hash($_POST['pwdlogin'], PASSWORD_DEFAULT);
            // setcookie("hash", $hash);
            // print_r($_COOKIE);


            if((strcmp($_COOKIE['password'], $passwordLogin)) || (strcmp($_COOKIE['email'], $emailLogin))!== 0){
                $loginErr = "Credenziali errate";
                echo "Credenziali errate";
                die();
            }

        
        
            /*
             * Patch da implementare in una versione successiva (SECURITY UPDATE)
            if(isset($hash)){
                echo "password settata!";
                if(password_verify($passwordLogin, $hash)){
                    echo "password corretta!";
                } else {
                    echo "password NON corretta";
                }
            } else {
                    echo "hash NON settato";
            }*/
        ?>
        
        <div class="container">
            <div class="py-5 text-center">
                <h2>HOME PAGE</h2>
                <p class="lead">
                    Benvenuto nella tua home page
                    <br>
                    
                </p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </body>
</html>