<?php
$id1 = $_GET['id1'];
$id2 = $_GET['id2']; 

$query = $dbh->prepare("SELECT name from streamers WHERE name LIKE '$id1' OR name LIKE '$id2'");
$query->execute();
$cities = $query->fetchAll();

$test = $dbh->prepare("SELECT id from streamers WHERE name LIKE '$id1' OR name LIKE '$id2'");
$test->execute();
$ids = $test->fetchAll();

$coid=$ids[0]['id'];
$coid2=$ids[1]['id'];
$query2 = $dbh->prepare("SELECT * from `streamers-stats` WHERE id='$coid' OR id='$coid2'");
$query2->execute();
$stats = $query2->fetchAll();

// encode array to json
$json = json_encode($cities);
$json2 = json_encode($stats);
$bytes = file_put_contents("streamer_1.json", $json); 
$bytes2 = file_put_contents("streamer_2.json", $json2); 