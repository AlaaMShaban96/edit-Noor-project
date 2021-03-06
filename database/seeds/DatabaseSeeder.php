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
        $this->call(AdminTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(AdminRoleTableSeeder::class);
        $this->call(FooterTableSeeder::class);
        $this->call(EmailTypeTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
    }
}
