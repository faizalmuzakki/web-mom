<?php

namespace App\Repositories;

class UserRepository extends BaseRepository {
    public function __construct()
    {
        $this->model = app(User::class);
    }
}