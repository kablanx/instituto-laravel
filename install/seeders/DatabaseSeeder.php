<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table("users")->insert([
            "name"=>Str::random(10),
            "usuario"=>Str::random(10),
            "email"=>Str::random(10)."@gmail.com",
            "password"=>Hash::make("password"),
            "remember_token"=>NULL,
            "created_at"=>currentTimeMillis(),
            "updated_at"=>currentTimeMillis(),
            "rol"=>"usuario",
            "rol"=>"imagen",
            "email_verified_at"=>Str::random(10),
        ]);
    }
}
