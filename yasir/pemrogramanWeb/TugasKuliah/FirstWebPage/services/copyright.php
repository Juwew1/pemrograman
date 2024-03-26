<?php

function copryright($name)
{
    $code = base64_encode($name);
    $codey = "eWFzaXI=";
    $codea = "YXJ5YQ==";
    var_dump($code);
    if ($code == $codey || $code == $codea) {
        return true;
    } else {
        return false;
    }
}
