<?php
/**
 * Created by PhpStorm.
 * User: SYUS
 * Date: 7/18/2015
 * Time: 4:11 PM
 */
interface IDb {
    public function createUser($user);
    public function readUser($userName);
    public function readUsers();
    public function updateUser($user);
    public function deleteUser($userName);
}