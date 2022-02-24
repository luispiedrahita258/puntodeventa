<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'name'=>'Admin',
            'slug'=>'admin',
            'special'=>'all-access',
        ]);

        $user = User::create([
            'name'=>'Luis',
            'email'=>'lepiedrahita5@misena.edu.co',
            'password'=>'$2y$10$KFM4WygJWAxj5A/l/0gCiuZzKRLU0Xl9Pj.TChxEspBd.IwItuXhS',
        ]);
        $user->roles()->sync(1);
    }
}
