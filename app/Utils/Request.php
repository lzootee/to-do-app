<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 1/22/19
 * Time: 10:18 PM
 */

namespace Todo\Utils;


class Request
{
    protected $data;
    public function __construct()
    {
        $data = (object)[];

        foreach ($_POST as $key => $value){
            $data->$key = $value;
        }

        $this->data = $data;
    }

    public function get($attr){
        return trim($this->data->$attr);
    }
}