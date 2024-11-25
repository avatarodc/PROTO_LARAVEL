<?php

namespace App\Domain\DTOs;

class UserDTO extends BaseDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    ) {}
}
