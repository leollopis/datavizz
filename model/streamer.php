<?php
$id = $_GET['id'];

$query = $dbh->prepare("SELECT name from streamers WHERE id LIKE '$id'");
$query->execute();
$cities = $query->fetchAll();

$query2 = $dbh->prepare("SELECT * from `streamers-stats` WHERE id LIKE '$id'");
$query2->execute();
$stats = $query2->fetchAll();

sort($cities);

// encode array to json
$json = json_encode($cities);
$json2 = json_encode($stats);
$bytes = file_put_contents("streamer_name.json", $json); 
$bytes2 = file_put_contents("streamer_stats.json", $json2); 