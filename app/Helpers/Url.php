<?php

class Url{
    public static function redirecionar($url){
        header("Location:".URL.DIRECTORY_SEPARATOR.$url);
    }
    public static function redirecionar2($url,$id){
        header("Location:".URL.DIRECTORY_SEPARATOR.$url.$id);
    }
}