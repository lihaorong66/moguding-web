<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepository
{
    public function findById ( int $id ): ?User;

    public function createOrUpdate ( array $attributes, int $id = 0 ): User;
}
