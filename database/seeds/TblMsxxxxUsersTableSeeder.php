<?php

use Illuminate\Database\Seeder;

class TblMsxxxxUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_msxxxx_users')->delete();
        
        \DB::table('tbl_msxxxx_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'システム管理者',
                'login_name' => 'oga90001',
                'email' => 'systemadmin@ogaland.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0ia8qvqwpWoJHJ0uocWaPOARruco3nauQMt8kgCPxgOrbnggXxXP6',
                'role' => 'systemadmin',
                'remember_token' => 'wWqZjw12jkXeTZzdjaskmKmh8xy6NFx05S1TbHaqbH77O5mateHF2hR904hr',
                'created_at' => '2019-01-11 04:01:28',
                'updated_at' => '2019-01-11 04:01:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'サプリサイト管理者',
                'login_name' => 'oga90002',
                'email' => 'siteadmin@ogaland.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vnRgqKmL9wq86/UlXXhgtOc2ZrbnBQvwp9K7nMaVFgFXWysTvwO/O',
                'role' => 'supplesiteadmin',
                'remember_token' => 'GIwtMBPr2iSnvw7j4eFa4QVHo1GMVqhS9KcskCb6Mnf4K7stCC6poWqO4v7B',
                'created_at' => '2019-01-11 07:59:16',
                'updated_at' => '2019-01-11 07:59:16',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'サプリ一般スタッフ',
                'login_name' => 'oga90003',
                'email' => 'ippan.user@ogaland.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jSuCgZriUGDJ10Um71d3cunDijRC05gf37aPTYL89QT6zeUXMs/CS',
                'role' => 'supplesitestaff',
                'remember_token' => 'GSJrCDPv9st1QqJMSrJpKkEEAYY5pTYejh2bQycaeFEPpAAsVFrN52dsFrZw',
                'created_at' => '2019-01-11 07:59:54',
                'updated_at' => '2019-01-11 07:59:54',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '権利無しユーザー',
                'login_name' => 'oga90004',
                'email' => 'kenrinasi@ogaland.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9koKL0QxjACW.qVEbqN.xOcbAW59xwv2n6L8tKNEGjiTvMh/TqT0G',
                'role' => '0',
                'remember_token' => 'z25sA8rCmILvkE9szCozkVA1ma3pWGYr0yI1eb7VmbXQxj8blOVJaKoFADc7',
                'created_at' => '2019-01-22 08:20:06',
                'updated_at' => '2019-01-22 08:20:06',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'mosan',
                'login_name' => 'oga90001',
                'email' => 'mosan@mosan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vdQ5ygDcI51MsA0LClfIDuPj5hMXLnrQhvdJ3X0/fh7NkLkewDOOi',
                'role' => 'systemadmin',
                'remember_token' => 'QQoZ7L0iotkkPZc1BpmMb30eZlYzJjdTH2kbMSzyZVSrLZB7X42XjHuSDMpw',
                'created_at' => '2019-01-23 07:15:52',
                'updated_at' => '2019-01-23 07:15:52',
            ),
        ));
        
        
    }
}