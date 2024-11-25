<?php

namespace App\Services;

use App\Contracts\Repositories\UserRepositoryInterface;

class UserService extends BaseService
{
    public function __construct(UserRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
