<?php

namespace App\Http\Controllers;

use Database\Seeders\PermissionSeeder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        dd(app()[PermissionSeeder::class]->permissions()['manage permissions']);
        app()[PermissionSeeder::class];
        return view('welcome');
    }

}
