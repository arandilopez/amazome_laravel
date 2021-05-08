<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        // \DB::table('users')
        //     ->select('name', 'email')
        //     ->where()
        //     ->where()
        //     ->toSql();

        // User::where()->where()->chunk(500, function ($users) {
        //     foreach($users as $user) {

        //     }
        // });
    }
}
