<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <!-- JS -->       
        <script src="assets/js/custom.js"></script>
    </head>
    <body>
        <?php
        // put your code here
        
        //header('Location:db.php?flag=2') ;
        //header('Location:http://www.google.de') ;
        ?>
        <div class="wrapper" id="wrapper">
            <div class="moveBox">
                <div class="startView">
                    <h3>Anmeldung</h3>
                    <label for="username">Username<br>
                        <input type="text" id="username" name="username">
                    </label><br>
                    <label for="password">Passwort<br>
                        <input type="pass" id="password" name="password">
                    </label><br><br>
                    <button id="btnRegister" type="submit">Anmelden</button>
                </div>
                <div class="playView">Spielfeld
                    <div class="field"></div>
                </div>                    
            </div>
                <div class="menuBox">                    
                        <button class="mBtn" data-nr="0">Anmeldung</button>
                        <button class="mBtn" data-nr="1">Spielfeld</button>                                                        
                </div>
            
        </div>  
    </div>
    </body>
</html>
