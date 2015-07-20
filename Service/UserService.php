<?php
/**
 * Created by PhpStorm.
 * User: SYUS
 * Date: 7/18/2015
 * Time: 4:38 PM
 */

require_once 'Database/DBFactory.php';
//require_once '../Database/IDb.php';

class UserService {
    private $_userDB;

    public function __construct($dataBaseType) {
        $this->setUserDB(DBFactory::getUserDB($dataBaseType));
    }

    private function setUserDB($userDB) {
        $this->_userDB = $userDB;
    }

    public function createUser($userName, $userTeam) {
        $newUser = new User($userName,$userTeam);
        $this->_userDB->createUser($newUser);
    }

    public function readUser($userName) {
        return $this->_userDB->readUser($userName);
    }

    public function readUsers() {
        return $this->_userDB->readUsers();
    }

    public function updateUser($userName,$userTeam,$userScore) {
        $updateUser = new User($userName,$userTeam);
        $updateUser->setUserScore($userScore);
        $this->_userDB->updateUser($updateUser);
    }

    public function deleteUser($userName) {
        $this->_userDB->deleteUser($userName);
    }
}