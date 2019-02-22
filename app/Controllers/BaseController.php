<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 1/21/19
 * Time: 9:13 PM
 */

namespace Todo\Controllers;


class BaseController
{
    function render($file, $data = array())
    {
        $view_file = __ROOT__.'/resources/views/' . $file . '.php';

        if (is_file($view_file)) {
            extract($data);
            ob_start();
            require_once($view_file);
            $content = ob_get_clean();
            include(__ROOT__.'/resources/views/layouts/app.php');
        } else {
            echo "ERROR";
        }
    }
}