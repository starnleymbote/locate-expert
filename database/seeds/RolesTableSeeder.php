<?php

use App\Roles;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $roles = ['nutritionist', 'client', 'pharmacist', 'doctor'];
    
            foreach ($roles as $role => $value) {
                Role::create([
                    'name' => $value
                ]);
            }

    }
}
