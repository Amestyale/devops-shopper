<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LegalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('legals')->delete();
        
        \DB::table('legals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Refund policy',
                'slug' => 'refund-policy',
                'content' => NULL,
                'is_enabled' => 1,
                'created_at' => '2022-11-29 18:03:13',
                'updated_at' => '2022-11-29 18:03:13',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Privacy policy',
                'slug' => 'privacy-policy',
                'content' => NULL,
                'is_enabled' => 1,
                'created_at' => '2022-11-29 18:03:13',
                'updated_at' => '2022-11-29 18:03:13',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Terms of use',
                'slug' => 'terms-of-use',
                'content' => NULL,
                'is_enabled' => 1,
                'created_at' => '2022-11-29 18:03:13',
                'updated_at' => '2022-11-29 18:03:13',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Shipping policy',
                'slug' => 'shipping-policy',
                'content' => NULL,
                'is_enabled' => 1,
                'created_at' => '2022-11-29 18:03:13',
                'updated_at' => '2022-11-29 18:03:13',
            ),
        ));
        
        
    }
}