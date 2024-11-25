<?php

namespace App\Domain\DTOs;

abstract class BaseDTO
{
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
