<?php
/**
 * Created by PhpStorm.
 * User: SYUS
 * Date: 7/18/2015
 * Time: 3:55 PM
 */

/**
 * Class User
 * ! Assumes unique username to index database !
 * @property $userName
 * @property $userScore
 * @property $userTeam
 *
 */
class User {
    private $_userName;
    private $_userScore;
    private $_userTeam;

    public function __construct($userName, $userTeam) {
        $this->setUserName($userName);
        $this->setUserTeam($userTeam);
        $this->setUserScore(0);
    }

    /**
     * @return String $userName
     */
    public function getUserName()
    {
        return $this->_userName;
    }

    /**
     * @param String $userName
     */
    public function setUserName($userName)
    {
        $this->_userName = $userName;
    }

    /**
     * @return int $userScore
     */
    public function getUserScore()
    {
        return $this->_userScore;
    }

    /**
     * @param int $userScore
     */
    public function setUserScore($userScore)
    {
        $this->_userScore = $userScore;
    }

    /**
     * @return String $userTeam
     */
    public function getUserTeam()
    {
        return $this->_userTeam;
    }

    /**
     * @param String $userTeam
     */
    public function setUserTeam($userTeam)
    {
        $this->_userTeam = $userTeam;
    }
}