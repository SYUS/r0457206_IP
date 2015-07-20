<?php
/**
 * Created by PhpStorm.
 * User: SYUS
 * Date: 7/18/2015
 * Time: 4:56 PM
 */

require_once 'Service/UserService.php';
//require_once 'View/index.php';
//require_once 'View/CreateUser.php';
//require_once 'View/EditUser.php';

class Controller {
    private $_userService;
    private $_users;
    private $_messages;
    private $_selectedUser;

    public function __construct() {
        session_start();
        if(isset($_SESSION['userservice'])) {
            $this->_userService = $_SESSION['userservice'];
        } else {
            $this->_userService = new UserService('MEMORY');
            $_SESSION['userservice'] = $this->_userService;
        }

        if(isset($_SESSION['messages'])) {
            $this->setMessages($_SESSION['messages']);
        } else {
            $this->setMessages(array());
            $_SESSION['messages'] = $this->getMessages();
        }
    }

    /**
     * @return mixed
     */
    public function getMessages()
    {
        return $this->_messages;
    }

    /**
     * @param mixed $messages
     */
    public function setMessages($messages)
    {
        $this->_messages = $messages;
    }

    /**
     * @return UserService
     */
    public function getUserService()
    {
        return $this->_userService;
    }

    /**
     * @param UserService $userService
     */
    public function setUserService($userService)
    {
        $this->_userService = $userService;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        $this->setUsers($this->getUserService()->readUsers());
        return $this->_users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users)
    {
        $this->_users = $users;
    }

    /**
     * @return mixed
     */
    public function getSelectedUser()
    {
        return $this->_selectedUser;
    }

    /**
     * @param mixed $selectedUser
     */
    public function setSelectedUser($selectedUser)
    {
        $this->_selectedUser = $selectedUser;
    }



    public function processRequest() {
        $destination = 'index.php';

        if(isset($_GET['action'])) {
            $action = $_GET['action'];
        }

        switch($action) {
            case 'ShowOverview':
                $destination = $this->navigateToOverview();
                break;
            case 'CreateUser':
                $destination = 'CreateUser.php';
                break;
            case 'Create':
                $destination = $this->createUser($_POST['username'],$_POST['userteam']);
                break;
            case 'UpdateUser':
                $destination = $this->navigateToEdit($_GET['username']);
                break;
            case 'Update':
                $destination = $this->updateUser($_POST['username'],$_POST['userteam'],$_POST['userscore']);
                break;
            case 'DeleteUser':
                $this->deleteUser($_GET['username']);
                $destination = $this->navigateToOverview();
                break;
            default:
                $destination = 'index.php';
        }
        require_once('View/'.$destination);
    }

    private function navigateToEdit($userName) {
        $this->setSelectedUser($this->getUserService()->readUser($userName));
        return 'EditUser.php';
        //return $this->navigateToOverview();
    }

    private function createUser($userName,$userTeam) {

        foreach (array_values($this->getUsers()) as $user) {
            if ($user->getUserName() == $userName) {
                $this->addMessage('Could not add user, username taken.');
                return $this->navigateToOverview();
            }
        }
        $this->addMessage('User added.');
        $this->_userService->createUser($userName,$userTeam);
        return $this->navigateToOverview();
    }

    private function updateUser($userName,$userTeam,$userScore) {
        $this->_userService->updateUser($userName,$userTeam,$userScore);
        $this->addMessage('User updated.');
        return $this->navigateToOverview();
    }

    private function deleteUser($userName) {
        $this->_userService->deleteUser($userName);
    }

    public function navigateToOverview() {
        $this->_users = $this->_userService->readUsers();
        return 'index.php';
    }

    private function addMessage($message) {
        array_push($this->_messages,$message);
    }
}