<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'administrator',
                'guard_name' => 'web',
                'display_name' => 'Administrator',
                'description' => 'Site administrator with access to shop admin panel and developer tools.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'manager',
                'guard_name' => 'web',
                'display_name' => 'Manager',
                'description' => 'Site manager with access to shop admin panel and publishing menus.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user',
                'guard_name' => 'web',
                'display_name' => 'User',
                'description' => 'Site customer role with access on front site.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
        ));
        
        
    }
}