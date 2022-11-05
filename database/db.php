<?php
try {
 $host = 'localhost';
 $name = 'elpit0u_cont'; 
 $user = 'root';
 $pass = '';
 $dbh = new PDO("mysql:host=$host;dbname=$name", $user,
$pass);
} catch (PDOException $e) {
 print "Erreur !: " . $e->getMessage() . "<br/>";
 die();}
?>