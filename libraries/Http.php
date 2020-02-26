<?php


class Http{
    // redirection vers index.php

    public static function redirect(string $url):void{
        header("Location: $url");
        exit();
        
    }
}