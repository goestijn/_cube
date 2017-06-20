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
            'email' => 'stijn@goethals-degraeve.net',
            'password' => bcrypt('Stijn123!'),
            'firstname' => 'Stijn',
            'lastname' => 'Goethals',
            'date_of_birth' => '1992-01-22',
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'email' => 'mieke@goethals-degraeve.net',
            'password' => bcrypt('Mieke123!'),
            'firstname' => 'Mieke',
            'lastname' => 'Degraeve',
            'date_of_birth' => '1990-09-17',
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'email' => 'dallas@goethals-degraeve.net',
            'password' => bcrypt('Dallas123!'),
            'firstname' => 'Dallas',
            'lastname' => 'Korolus',
            'date_of_birth' => '2013-06-13',
            'created_at' => Carbon::now()
        ]);

    }
}
