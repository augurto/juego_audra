<?php

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ahorcado</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            @media  all and  (max-width: 800px){
            .div_general{
                background-color: black;
            }
        }
        </style>
    </head>
    <body>
         <div id="hangman-div" class="div_general" >
            <form action="controller.php" method="POST">
               <input type="hidden" name="action" value="1" />
               <!-- <img class="logo" src="images/logo.png" id="logo" /> -->
                <span style="color: white;" id="credits" class="creditos">Desarrollado por: <a href="https://audra.tech" target="_blank">Audra.tech</a></span>
                <div class="center">
                    <div id="levels-div">
                        <span id="level">
                            <input type="radio" name="level" checked="checked" id="level_0" value="0">
                                <label style="color: white;" for="level_0">Juego facil como tu ex: puedes fallar 10 veces.</label><br>
                            <input type="radio" name="level" id="level_1" value="1">
                                <label style="color: white;" for="level_1">Juego medio : puedes fallar 5 veces.</label><br>
                            <input type="radio" name="level" id="level_2" value="2">
                                <label style="color: white;" for="level_2">Dificil como tu crush: puedes fallar 3 veces.</label>
                         </span>
                    </div>
                    <div class="boton_jugar">
                        <input type="submit" style="background-color: blueviolet; border: radius 12px;" value="Jugar" id="submit-button" />
                    </div>
                </div>
            </form>
        </div>      
    </body>
</html>
