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
        $this->call(TblMsxxxxDomainMembersTableSeeder::class);
        $this->call(TblMsxxxxDomainsTableSeeder::class);
        $this->call(TblMsxxxxMemberRolesTableSeeder::class);
        $this->call(TblMsxxxxRolesTableSeeder::class);
        $this->call(TblMsxxxxUsersTableSeeder::class);
    }
}
