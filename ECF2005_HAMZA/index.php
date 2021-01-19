<?php
$user='root';
$password='';
         
       

$bdd=new PDO('mysql:host=localhost;dbname =search',$user,$password );

$reponse=$bdd->query('SELECT * FROM search');
while ($donnes=$reponse->fetch())
{


echo '<p>' . $donnes['City'] . '<p>';
}
?>