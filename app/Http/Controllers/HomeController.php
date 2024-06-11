<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\PermissionRegistrar;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $permissions = app(PermissionRegistrar::class)->getPermissions();

        $groupedPermissions = $permissions
            ->groupBy('group_name')
            ->mapWithKeys(function ($group, $groupName) {
                return [$groupName => $group->pluck('name')->toArray()];
            })
            ->toArray();

        dd($groupedPermissions);



        return view('welcome');
    }
}
