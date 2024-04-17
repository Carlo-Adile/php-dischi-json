<?php

/* read dischi.json content and decode */
$json_string = file_get_contents('dischi.json');
/* $albumsData = json_decode($json_string, true); */

/* use header to communicate with frontend */
header('Content-Type: application/json');

/* convert to json and send to frontend */
/* echo json_encode($albumsData); */

echo $json_string;

