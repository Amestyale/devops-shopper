<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RootUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', '=', 'admin@admin.com')->first();
        if ($user === null) {
            DB::table('users')->insert([
                'first_name' => 'Shopper',
                'last_name' => 'Admin',
                'gender' => 'male',
                'avatar_type' => 'gravatar',
                'email' => 'admin@admin.com',
                'password' => Hash::make('root'),
                'created_at' => '2022-11-29 11:23:35',
                'email_verified_at' => '2022-11-29 11:23:35',
                'updated_at' => '2022-11-29 11:23:35',
            ]);
        }
    }
}
