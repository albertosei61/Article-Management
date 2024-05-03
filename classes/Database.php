<?php
/**
 * Database
 * 
 * A connection to the database
 */

Class Database
{
     /**
     * Get the database connection
     * 
     * @return PDO Object connection to the database
     */

    public function getConn()
    {
        $db_host = "localhost";
        $db_name = "oseial75";
        $db_user = "oseial75";
        $db_pass = "1Blackotter!";

        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

        try{
            $db = new PDO($dsn, $db_user, $db_pass);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
            
        }catch (PDOException $e){
            echo $e->getMessage();
            exit;

        }

    }
}