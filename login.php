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
        
        // Leggiamo i valori in input dal form di registrazione
            $ragioneSociale = $_POST['ragione'];
            $codiceFiscale = $_POST['codiceFiscale'];
            $partitaIva = $_POST['partitaIva'];
            $tipoAzienda = $_POST['tipoAzienda'];
            $naturaGiuridica = $_POST['naturaGiuridica'];
            $sitoWeb = $_POST['sitoWeb'];
            $settoreAttivita = $_POST['settoreAttivita'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sede = $_POST['sede'];
            $provincia = $_POST['provincia'];
            $sedeEstera = $_POST['sedeEstera'];
            
            
            // Cookie
            setcookie("ragioneSociale", $ragioneSociale);
            setcookie("codiceFiscale", $codiceFiscale);
            setcookie("partitaIva", $partitaIva);
            setcookie("tipoAzienda", $tipoAzienda);
            setcookie("naturaGiuridica", $naturaGiuridica);
            setcookie("sitoWeb", $sitoWeb);
            setcookie("settoreAttivita", $settoreAttivita);
            setcookie("email", $email);
            setcookie("password", $password); // Non è sicuro salvare la password nei cookie
            setcookie("sede", $sede);
            setcookie("provincia", $provincia);
            setcookie("sedeEstera", $sedeEstera);
            
            /* echo "HOME\n";
            $passwordLogin = $_POST['pwdlogin'];        
            setcookie("passwordLogin", $passwordLogin);
            echo "password login: $passwordLogin";
            print_r($_COOKIE);

            if(isset($passwordLogin)){
                echo "password settata!";
                if(password_verify($passwordLogin, $hash)){
                    echo "password corretta!";
                } else {
                    echo "password NON corretta";
                  }
            } else {
                echo "password NON settata";
              }*/
        ?>
        
        
        <div class="container">
            <div class="py-5 text-center">
                <h2>PAGINA DI LOGIN</h2>
                <p class="lead">
                    Inserisci correttamente tutti i dati richiesti
                    <br>
                </p>
            </div>
            <div class="row g-5">
                <div class="text-center">
                    <h4 class="text-center">CREDENZIALI</h4>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <div class="row">
            
                <form method="post" action="home.php">
                    <div class="form-group">
                      <label for="emailLogin">EMAIL</label>
                      <input type="text" name="email_login" class="form-control" id="emailLog" placeholder="Email">
                    </div>
                    
                    <br>
                    
                    <div class="form-group">
                      <label for="passwordLog">PASSWORD</label>
                      <input type="password" name="pwdlogin" class="form-control" id="passwordLog" placeholder="Password">
                    </div>

                    <br>
                    
                    
                    <input type="submit" value="LOGIN" class="btn btn-primary" id="login"
                           onClick="document.location.href='home.php'" />
                    
                    <!-- onClick="document.location.href='index.php'"  -->
                    <!-- <button type="submit" class="btn btn-primary">REGISTRATI</button> -->
                    
                </form>
                
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </body>
</html>