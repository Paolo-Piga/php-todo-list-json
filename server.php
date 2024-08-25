<?php

// trasformo in stringa il json e conseguentemente la stringa in php
$string = file_get_contents('to-do-list.json');

$list = json_decode($string);


// questo servirà a far interpretare l'header come file json
header('Content-type: application/json');
// stampo la $list
echo json_encode($list);
?>