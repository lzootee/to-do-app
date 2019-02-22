<?php
    namespace Todo\Models;

    class Work extends Base
    {
        public function __construct() {
            self::$tableName = "Works";
        }
    }