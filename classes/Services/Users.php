<?php

namespace Services;

class Users
{
    /**
     * @param string $userName
     * @return \Model\User|null
     */
    private function getUserWith(string $userName): ?\Model\User
    {
        $db = new \Model\DB();
        $sql = 'SELECT * FROM users WHERE userName=:userName';
        $users = $db->query($sql, [':userName' => $userName]);

        foreach ($users as $user) {
            return new \Model\User($user['userName'], $user['password']);
        }

        return null;
    }

    /**
     * @return \Model\User[]
     */
    public function getUsersList(): array
    {
        $db = new \Model\DB();
        $sql = 'SELECT * FROM users ORDER BY id';
        $users = $db->query($sql, []);

        $result = [];
        foreach ($users as $user) {
            $result[] = new \Model\User($user['userName'], $user['password']);
        }

        return $result;
    }

    /**
     * @param string $login
     * @return bool
     */
    public function existsUser(string $login): bool
    {
        if (null === $this->getUserWith($login)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * @param $login
     * @param $password
     * @return bool
     */
    public function checkPassword($login, $password): bool
    {
        $user = $this->getUserWith($login);

        if (null !== $user) {
            return password_verify($password, $user->getPassword());
        } else {
            return false;
        }


    }

    /**
     * @return \Model\User|null
     */
    public function getCurrentUser(): ?\Model\User
    {
        if (isset($_SESSION['user'])) {
            return $this->getUserWith($_SESSION['user']);
        }

        return null;
    }
}