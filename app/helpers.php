<?php

function thumbnail($image, $type)
{
    $ext    = pathinfo($image, PATHINFO_EXTENSION);
    $name   = rtrim($image, '.' . $ext);

     return $name . '-' . $type . '.' . $ext;

}


