<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Model::unguard();

        DB::table('users')->insert([
            'role_id' => 1,
            'username' => 'root',
            'password' => bcrypt('Root123!'),
            'fullname' => 'Root',
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'username' => 'stijn.goethals',
            'email' => 'stijn@goethals-degraeve.net',
            'password' => bcrypt('Stijn123!'),
            'fullname' => 'Stijn Goethals',
            'firstname' => 'Stijn',
            'lastname' => 'Goethals',
            'date_of_birth' => '1992-01-22',
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'username' => 'mieke.degraeve',
            'email' => 'mieke@goethals-degraeve.net',
            'password' => bcrypt('Mieke123!'),
            'fullname' => 'Mieke Degraeve',
            'firstname' => 'Mieke',
            'lastname' => 'Degraeve',
            'date_of_birth' => '1990-09-17',
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'role_id' => 3,
            'username' => 'dallas.korolus',
            'email' => 'dallas@goethals-degraeve.net',
            'password' => bcrypt('Dallas123!'),
            'fullname' => 'Dallas Korolus',
            'firstname' => 'Dallas',
            'lastname' => 'Korolus',
            'date_of_birth' => '2013-06-13',
            'created_at' => Carbon::now()
        ]);

    }
}
