<?php

function text($string='')
{
    return GoogleTranslate::trans( $string,\App::getLocale()) ;
}

function getAmount($amount, $length = 0)
{
    if(0 < $length){
        $amount = round($amount, $length);
    }else{
        $amount = round($amount,2);
    }
    return $amount + 0 .'.00';
}
