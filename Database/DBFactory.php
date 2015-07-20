<?php
/**
 * Created by PhpStorm.
 * User: SYUS
 * Date: 7/18/2015
 * Time: 4:28 PM
 */

require_once 'Database/InMemoryDB.php';
require_once 'Database/InMemoryDB2.php';

class DBFactory {
    public static function getUserDB($dataBaseType) {
        switch($dataBaseType){
            case 'MEMORY':
                //return new InMemoryDB();
                return new InMemoryDB2();
                break;
            case 'SQL':
                throw new Exception("not yet implemented");
                break;
            default:
                throw new Exception("unknown database type");
                break;
        }
    }
}