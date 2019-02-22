<?php

    /**
     * User: Phuc
     * Date: 1/21/19
     * Time: 8:23 PM
     */

    /**
     * Load config
     * */
    require_once '../config.php';

    class DB
    {
        protected $db;

        protected static $instance;
        public static $PDO;

        /**
         * Construct database
         */
        public function __construct()
        {
            try {
                $this->db = new PDO(
                    "mysql:host=".DB_HOST.";dbname=".DB_NAME,
                    DB_USER, DB_PASS
                );

            } catch(\Exception $e) {
                echo "DB Connection error";
                die();
            }
        }

        public static function getInstance(){
            if(is_null(self::$instance)){
                $dbStructure = new DB();
                self::$instance = $dbStructure->db;
                self::$PDO = PDO::class;
            }
            return self::$instance;
        }

    }