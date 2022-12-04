<?php

$raw = file_get_contents('data.txt');
$data = str_replace("\n\n"," ",$raw);
$data = explode(" ", $data);