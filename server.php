<?php
$database = file_get_contents(__DIR__ . '/discs.json');
$discs = json_decode($database);

$result = $discs;

//chiamata in lettura con GET
if(isset($_GET['index']) && $_GET['index'] !== ''){
    $index = $_GET['index'];
    $result = $discs[$index];
};

header('Content-Type: application/json');
echo json_encode($result);
