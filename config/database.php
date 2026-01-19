<?php
    namespace Config;

    class Database {
        public static function db() {
            return [
                'host' => 'localhost',
                'dbname' => 'minerva',
                'user' => 'root',
                'password' => '',
                'port' => 3333,
                'charset' => 'utf8mb4'
            ];
        }
    }