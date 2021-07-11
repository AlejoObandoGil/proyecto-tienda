<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function create()
    {
        $role = Role::create(['name' => 'admin']);

        return $role;
    }

    public function assign()
    {
        $role = Role::findByName('admin');
        $user = User::find(1);
        $user->assignRole($role);

        return $role;
    }

    public function remove()
    {
        $user = User::find(1);
        $user->removeRole('admin');

        return $user;
    }
}
