<?php
 // ~/php/tp1/model/cities.php
 
$query = $dbh->prepare('SELECT name,id from streamers');
$query->execute();
$cities = $query->fetchAll();

$query2 = $dbh->prepare('SELECT * from `streamers-stats`');
$query2->execute();
$stats = $query2->fetchAll();

// encode array to json
$json = json_encode($cities);
$json2 = json_encode($stats);
$bytes = file_put_contents("myfile.json", $json); 
$bytes2 = file_put_contents("stats.json", $json2); 