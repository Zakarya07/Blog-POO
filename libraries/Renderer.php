<?php

class Renderer{
    
    public static function renderPage(string $path, array $variables=[]) {

        extract($variables);
        ob_start();
        require('templates/'.$path.'.html.php');
        $pageContent = ob_get_clean();
        
        require('templates/layout.html.php');
        
        }
}