<?php

// Function to dump and die
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();

}