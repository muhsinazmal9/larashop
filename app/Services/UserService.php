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
        return response()->json([
            'success' => true,
            'data' => User::latest()->get(),
            'message' => 'User data list returned successfully',
            'code' => 200
        ]);
    }
}
