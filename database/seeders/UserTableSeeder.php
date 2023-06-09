<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create user
        $userCreate = User::create([
            'name' => 'Arnold',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);

        //assign permission to role
        // $role = Role::find(1);
        // $permissions = Permission::all();

        // $role->syncPermissions($permissions);

        //assign role with permission to user
        // $user = User::find(1);
        // $user->assigntoRole($role->name);
    }
}
