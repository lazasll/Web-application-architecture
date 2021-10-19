<?php

function dell (array $array, $el)
{
    foreach($array as $key => $value) {
        if ($value == $el) {
            unset($array[$key]);
        }
    }
    return $array;
}