<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();

        foreach(range(1,30) as $f) {
            DB::table('users')->insert([
               'name' => $fake->name,
               'email' => $fake->email,
               'password' => bcrypt('Pa$$w0rd')
            ]);
        }

    }
}
