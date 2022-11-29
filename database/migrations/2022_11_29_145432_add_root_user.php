<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = User::where('email', '=', 'admin@admin.com')->first();
        if ($user === null) {
            DB::table('users')->insert([
                'id' => 1,
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
