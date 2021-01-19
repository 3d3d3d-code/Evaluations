<?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On établit la connexion
            $connect = mysqli_connect($localhost, $root, $root);
            
            //On vérifie la connexion
            if(!$connect){
                die('Erreur : ' .mysqli_connect_error());
            }
            echo 'Connexion réussie';
        ?>


