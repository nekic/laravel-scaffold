<?php

namespace App\Repositories;

use App\Models\Game;
use App\Repositories\BaseRepository;

class GameRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'slug',
        'description',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Game::class;
    }
}
