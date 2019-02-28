<?php

namespace Model;

class Users
{
    /**
     * @return User[]
     */
    public function getUsersList(): array
    {
        $db = new DB();
        $sql = 'SELECT * FROM users ORDER BY id';
        $users = $db->query($sql, []);

        $result = [];
        foreach ($users as $user) {
            $result[] = new User($user['userName'], $user['password']);
        }

        return $result;
    }

    /**
     * @param string $userName
     * @return User|null
     */
    private function getUserWith(string $userName): ?User
    {
        $db = new DB();
        $sql = 'SELECT * FROM users WHERE userName=:userName';
        $user = $db->query($sql, [':userName' => $userName]);

        if (isset($user['userName'])) {
            return new User($user['userName'], $user['password']);
        } else {
            return null;
        }
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
     * @param array $session
     * @return User|null
     */
    public function getCurrentUserFrom(array $session): ?User
    {
        if (isset($session['user'])) {
            $user = $this->getUserWith($session['user']);
            if (null !== $user) {
                return $user;
            }
        } else {
            return null;
        }
    }
}