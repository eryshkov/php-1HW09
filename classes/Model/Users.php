<?php

namespace Model;

class Users
{
    /**
     * @param string $userName
     * @return User|null
     */
    private function getUserWith(string $userName): ?User
    {
        $db = new DB();
        $sql = 'SELECT * FROM users WHERE userName=:userName';
        $users = $db->query($sql, [':userName' => $userName]);

        $user = reset($users);
        if (false !== $user) {
            return new User($user['userName'], $user['password']);
        }

        return null;
    }

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
     * @param string $login
     * @param string $password
     * @return bool
     */
    public function checkPassword(string $login, string $password): bool
    {
        $user = $this->getUserWith($login);

        if (null !== $user) {
            return password_verify($password, $user->getPassword());
        } else {
            return false;
        }
    }

    /**
     * @return User|null
     */
    public function getCurrentUser(): ?User
    {
        if (isset($_SESSION['user'])) {
            return $this->getUserWith($_SESSION['user']);
        }

        return null;
    }
}