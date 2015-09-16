<?php

function debug($data, $dump = false)
{
    echo "<pre>";
    if ($dump) { var_dump($data); }
    else { print_r($data); }
    echo "</pre>";
}