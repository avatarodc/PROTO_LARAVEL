<?php

namespace App\Domain\Actions;

use App\Domain\DTOs\UserDTO;
use App\Services\UserService;

class CreateUserAction
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function execute(UserDTO $dto)
    {
        return $this->userService->create($dto);
    }
}
