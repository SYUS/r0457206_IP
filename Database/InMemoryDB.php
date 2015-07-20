<?php
/**
 * Created by PhpStorm.
 * User: SYUS
 * Date: 7/18/2015
 * Time: 4:14 PM
 */

require_once 'Database/IDb.php';
require_once 'Domain/User.php';

class InMemoryDB implements IDb {
    private $userDB = array();

    public function __construct(){
        $this->initDB();
    }

    private function initDB() {
        //Create testing users
        $admin = new User('admin','Admin');
        $admin->setUserScore(9000);

        $user1 = new User('One','Alpha');
        $user1->setUserScore(10);

        $user2 = new User('Two','Alpha');
        $user2->setUserScore(20);

        $user3 = new User('Three','Alpha');
        $user3->setUserScore(30);

        $user4 = new User('Four','Beta');
        $user4->setUserScore(40);

        $user5 = new User('Five','Beta');
        $user5->setUserScore(50);

        $user6 = new User('Six','Beta');
        $user6->setUserScore(60);

        //Populate DB
        $this->createUser($admin);
        $this->createUser($user1);
        $this->createUser($user2);
        $this->createUser($user3);
        $this->createUser($user4);
        $this->createUser($user5);
        $this->createUser($user6);
    }

    public function createUser($user)
    {
        $this->userDB[$user->getUserName()] = $user;
    }

    public function readUser($userName)
    {
        foreach (array_values($this->userDB) as $user) {
            if ($user->getUserName() == $userName) {
                return $user;
            }
        }
    }

    public function readUsers()
    {
        usort($this->userDB,array($this,"cmp"));
        return array_values($this->userDB);
    }

    public function updateUser($user)
    {
        $this->userDB[$user->getUserName()] = $user;
    }

    public function deleteUser($userName)
    {
        unset($this->userDB[$userName]);
    }

    private function cmp($a, $b) {
        if($a->getUserScore() == $b->getUserScore()) {
            return 0;
        }
        return ($a->getUserScore() < $b->getUserScore()) ? -1 : 1;
    }

}