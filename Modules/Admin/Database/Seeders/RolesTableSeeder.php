<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Model::unguard();

        DB::table('roles')->insert([
            'name' => 'Root',
            'slug' => 'root',
            'created_at' => Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => 'Administrator',
            'slug' => 'administrator',
            'created_at' => Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => 'User',
            'slug' => 'user',
            'created_at' => Carbon::now()
        ]);

    }
}
