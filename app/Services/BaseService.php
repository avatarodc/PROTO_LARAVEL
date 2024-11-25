<?php

namespace App\Services;

use App\Contracts\Repositories\BaseRepositoryInterface;
use App\Domain\DTOs\BaseDTO;
use Illuminate\Support\Facades\DB;

abstract class BaseService
{
    protected $repository;

    public function __construct(BaseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(BaseDTO $dto)
    {
        return DB::transaction(function () use ($dto) {
            return $this->repository->create($dto->toArray());
        });
    }
}
