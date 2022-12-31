<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@lightbp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'utype' => 'ADM',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Default Student',
            'email' => 'student@orange.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'utype' => 'STD',
            'updated_at' => now()
        ],
        [
            'name' => 'Default Lecturer',
            'email' => 'lecturer@orange.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'utype' => 'LEC',
            'updated_at' => now()
        ],
        );
    }
}
