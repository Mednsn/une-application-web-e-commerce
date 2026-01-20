<?php

namespace App\Service;

use App\Models\Entity\User;
use App\Repository\UserRepository;


class UserService
{
    private UserRepository $user_repository;

    public function __construct()
    {
        $this->user_repository = new UserRepository();
    }

    public function create(User $user)
    {
        return $this->user_repository->create($user);
    }
    public function selectAll()
    {
        return $this->user_repository->selectAll();
    }
    public function selectUserByEmail(string $email)
    {
        return $this->user_repository->selectUserByEmail($email);
    }
    public function delete(int $id)
    {
        return $this->user_repository->delete($id);
    }
    public function update(int $id, string $role)
    {
        return $this->user_repository->update($id, $role);
    }
}
