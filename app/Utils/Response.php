<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 1/23/19
 * Time: 9:09 PM
 */

namespace Todo\Utils;


class Response
{
    public static function setContentType($contType)
    {
        header($contType);
    }

    public static function setStatusCode($int)
    {
        http_response_code($int);
    }

    public static function setJson()
    {
        self::setContentType(Constants::CONTENT_TYPE_JSON);
        self::setStatusCode(200);
    }
}