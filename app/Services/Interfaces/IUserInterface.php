<?php

namespace App\Services\Interfaces;

interface IUserInterface {
    /**
     * @return array User
     */
    function getUsers();

    /**
     * @param int $id
     * @return User
     */
    function getUserById(int $id);

    /**
     * @param array $user
     * @return void
     */
    function addUser(array $user);

    /**
     * @param array $user
     * @param array $id
     * @return void
     */
    function updateUser(array $user, int $id);

    /**
     * @param int $id
     * @return boolean
     */
    function deleteUser(int $id);

    /**
     * @param int $id
     * @return boolean
     */
    function restoreUser(int $id);
}
