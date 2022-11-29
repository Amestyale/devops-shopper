<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'access_dashboard',
                'guard_name' => 'web',
                'group_name' => 'system',
                'display_name' => 'Access Dashboard',
                'description' => 'This permission allow user to access to the dashboard.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'access_setting',
                'guard_name' => 'web',
                'group_name' => 'system',
                'display_name' => 'Access Setting',
                'description' => 'This permission allow user to view the setting page.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'view_users',
                'guard_name' => 'web',
                'group_name' => 'system',
                'display_name' => 'Views Users',
                'description' => 'This permission allow user to access to the administrator area.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'manage_mail',
                'guard_name' => 'web',
                'group_name' => 'system',
                'display_name' => 'Manage mail setting',
                'description' => 'This permission allow user to manage the mail configuration with template.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'impersonate',
                'guard_name' => 'web',
                'group_name' => 'system',
                'display_name' => 'Impersonate User',
                'description' => 'This permission allow user to logged with the account of another user.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'view_analytics',
                'guard_name' => 'web',
                'group_name' => 'system',
                'display_name' => 'Views & Reports analytics',
                'description' => 'This permission allow user to view, analyze and make reports statistics for shop.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'setting_analytics',
                'guard_name' => 'web',
                'group_name' => 'system',
                'display_name' => 'Manage Analytics setting',
                'description' => 'This permission allow user to add, update, and remove analytics settings such as Google Analytics, Facebook Pixel and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'browse_brands',
                'guard_name' => 'web',
                'group_name' => 'brands',
                'display_name' => 'Browse Brands',
                'description' => 'This permission allow you to browse all the brands, with actions as search, filters and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'read_brands',
                'guard_name' => 'web',
                'group_name' => 'brands',
                'display_name' => 'Read Brands',
                'description' => 'This permission allow you to read the content of a record of brands.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'edit_brands',
                'guard_name' => 'web',
                'group_name' => 'brands',
                'display_name' => 'Edit Brands',
                'description' => 'This permission allow you to edit the content of a record of brands.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'add_brands',
                'guard_name' => 'web',
                'group_name' => 'brands',
                'display_name' => 'Add Brands',
                'description' => 'This permission allow you to add a new record of brands.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'delete_brands',
                'guard_name' => 'web',
                'group_name' => 'brands',
                'display_name' => 'Delete Brands',
                'description' => 'This permission allow you to removed a record of brands.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'browse_categories',
                'guard_name' => 'web',
                'group_name' => 'categories',
                'display_name' => 'Browse Categories',
                'description' => 'This permission allow you to browse all the categories, with actions as search, filters and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'read_categories',
                'guard_name' => 'web',
                'group_name' => 'categories',
                'display_name' => 'Read Categories',
                'description' => 'This permission allow you to read the content of a record of categories.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'edit_categories',
                'guard_name' => 'web',
                'group_name' => 'categories',
                'display_name' => 'Edit Categories',
                'description' => 'This permission allow you to edit the content of a record of categories.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'add_categories',
                'guard_name' => 'web',
                'group_name' => 'categories',
                'display_name' => 'Add Categories',
                'description' => 'This permission allow you to add a new record of categories.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'delete_categories',
                'guard_name' => 'web',
                'group_name' => 'categories',
                'display_name' => 'Delete Categories',
                'description' => 'This permission allow you to removed a record of categories.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'browse_collections',
                'guard_name' => 'web',
                'group_name' => 'collections',
                'display_name' => 'Browse Collections',
                'description' => 'This permission allow you to browse all the collections, with actions as search, filters and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'read_collections',
                'guard_name' => 'web',
                'group_name' => 'collections',
                'display_name' => 'Read Collections',
                'description' => 'This permission allow you to read the content of a record of collections.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'edit_collections',
                'guard_name' => 'web',
                'group_name' => 'collections',
                'display_name' => 'Edit Collections',
                'description' => 'This permission allow you to edit the content of a record of collections.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'add_collections',
                'guard_name' => 'web',
                'group_name' => 'collections',
                'display_name' => 'Add Collections',
                'description' => 'This permission allow you to add a new record of collections.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'delete_collections',
                'guard_name' => 'web',
                'group_name' => 'collections',
                'display_name' => 'Delete Collections',
                'description' => 'This permission allow you to removed a record of collections.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'browse_products',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Browse Products',
                'description' => 'This permission allow you to browse all the products, with actions as search, filters and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'read_products',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Read Products',
                'description' => 'This permission allow you to read the content of a record of products.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'edit_products',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Edit Products',
                'description' => 'This permission allow you to edit the content of a record of products.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'add_products',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Add Products',
                'description' => 'This permission allow you to add a new record of products.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'delete_products',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Delete Products',
                'description' => 'This permission allow you to removed a record of products.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'browse_customers',
                'guard_name' => 'web',
                'group_name' => 'customers',
                'display_name' => 'Browse Customers',
                'description' => 'This permission allow you to browse all the customers, with actions as search, filters and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'read_customers',
                'guard_name' => 'web',
                'group_name' => 'customers',
                'display_name' => 'Read Customers',
                'description' => 'This permission allow you to read the content of a record of customers.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'edit_customers',
                'guard_name' => 'web',
                'group_name' => 'customers',
                'display_name' => 'Edit Customers',
                'description' => 'This permission allow you to edit the content of a record of customers.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'add_customers',
                'guard_name' => 'web',
                'group_name' => 'customers',
                'display_name' => 'Add Customers',
                'description' => 'This permission allow you to add a new record of customers.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'delete_customers',
                'guard_name' => 'web',
                'group_name' => 'customers',
                'display_name' => 'Delete Customers',
                'description' => 'This permission allow you to removed a record of customers.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'browse_orders',
                'guard_name' => 'web',
                'group_name' => 'orders',
                'display_name' => 'Browse Orders',
                'description' => 'This permission allow you to browse all the orders, with actions as search, filters and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'read_orders',
                'guard_name' => 'web',
                'group_name' => 'orders',
                'display_name' => 'Read Orders',
                'description' => 'This permission allow you to read the content of a record of orders.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'edit_orders',
                'guard_name' => 'web',
                'group_name' => 'orders',
                'display_name' => 'Edit Orders',
                'description' => 'This permission allow you to edit the content of a record of orders.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'add_orders',
                'guard_name' => 'web',
                'group_name' => 'orders',
                'display_name' => 'Add Orders',
                'description' => 'This permission allow you to add a new record of orders.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'delete_orders',
                'guard_name' => 'web',
                'group_name' => 'orders',
                'display_name' => 'Delete Orders',
                'description' => 'This permission allow you to removed a record of orders.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'browse_discounts',
                'guard_name' => 'web',
                'group_name' => 'discounts',
                'display_name' => 'Browse Discounts',
                'description' => 'This permission allow you to browse all the discounts, with actions as search, filters and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'read_discounts',
                'guard_name' => 'web',
                'group_name' => 'discounts',
                'display_name' => 'Read Discounts',
                'description' => 'This permission allow you to read the content of a record of discounts.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'edit_discounts',
                'guard_name' => 'web',
                'group_name' => 'discounts',
                'display_name' => 'Edit Discounts',
                'description' => 'This permission allow you to edit the content of a record of discounts.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'add_discounts',
                'guard_name' => 'web',
                'group_name' => 'discounts',
                'display_name' => 'Add Discounts',
                'description' => 'This permission allow you to add a new record of discounts.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'delete_discounts',
                'guard_name' => 'web',
                'group_name' => 'discounts',
                'display_name' => 'Delete Discounts',
                'description' => 'This permission allow you to removed a record of discounts.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'browse_inventories',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Browse Inventories',
                'description' => 'This permission allow you to browse all the inventories, with actions as search, filters and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:11',
                'updated_at' => '2022-11-29 18:03:11',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'read_inventories',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Read Inventories',
                'description' => 'This permission allow you to read the content of a record of inventories.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:12',
                'updated_at' => '2022-11-29 18:03:12',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'edit_inventories',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Edit Inventories',
                'description' => 'This permission allow you to edit the content of a record of inventories.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:12',
                'updated_at' => '2022-11-29 18:03:12',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'add_inventories',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Add Inventories',
                'description' => 'This permission allow you to add a new record of inventories.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:12',
                'updated_at' => '2022-11-29 18:03:12',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'delete_inventories',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Delete Inventories',
                'description' => 'This permission allow you to removed a record of inventories.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:12',
                'updated_at' => '2022-11-29 18:03:12',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'browse_attributes',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Browse Attributes',
                'description' => 'This permission allow you to browse all the attributes, with actions as search, filters and more.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:12',
                'updated_at' => '2022-11-29 18:03:12',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'read_attributes',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Read Attributes',
                'description' => 'This permission allow you to read the content of a record of attributes.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:12',
                'updated_at' => '2022-11-29 18:03:12',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'edit_attributes',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Edit Attributes',
                'description' => 'This permission allow you to edit the content of a record of attributes.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:12',
                'updated_at' => '2022-11-29 18:03:12',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'add_attributes',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Add Attributes',
                'description' => 'This permission allow you to add a new record of attributes.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:12',
                'updated_at' => '2022-11-29 18:03:12',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'delete_attributes',
                'guard_name' => 'web',
                'group_name' => 'products',
                'display_name' => 'Delete Attributes',
                'description' => 'This permission allow you to removed a record of attributes.',
                'can_be_removed' => 0,
                'created_at' => '2022-11-29 18:03:12',
                'updated_at' => '2022-11-29 18:03:12',
            ),
        ));
        
        
    }
}