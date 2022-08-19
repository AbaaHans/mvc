<?php

namespace Controllers;

class Controller{

    public function views(string $path, array $params = null)
    {
        ob_start();

        $path = str_replace('.', DIRECTORY_SEPARATOR, $path); 
        require VIEWS . $path . '.php';
        if ($params) {
            $params = extract($params);
        }

        $content =  ob_get_clean();

        require VIEWS . 'layout.php';
    }
}