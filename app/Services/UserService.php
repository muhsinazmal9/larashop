<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserService
{
    public function __construct()
    {
        //
    }

    public function create(array $data)// : User
    {
        $data['password'] = bcrypt($data['password']);

        return User::create($data);
    }


    public function getDataList (array $data): JsonResponse
    {
        return success('User data list returned successfully', User::latest()->get());
    }
}
