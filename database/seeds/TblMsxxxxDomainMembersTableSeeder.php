<?php

use Illuminate\Database\Seeder;

class TblMsxxxxDomainMembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_msxxxx_domain_members')->delete();
        
        \DB::table('tbl_msxxxx_domain_members')->insert(array (
            0 => 
            array (
                'id' => 1,
                'msxxxx_domain_code' => 'systemadmin',
                'msxxxx_member_id' => '000000',
                'msxxxx_login_name' => 'oga90001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'msxxxx_domain_code' => 'supplesiteadmin',
                'msxxxx_member_id' => '000001',
                'msxxxx_login_name' => 'oga90002',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'msxxxx_domain_code' => 'supplesitestaff',
                'msxxxx_member_id' => '000002',
                'msxxxx_login_name' => 'oga90003',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'msxxxx_domain_code' => 'otebijuchustaff',
                'msxxxx_member_id' => '000010',
                'msxxxx_login_name' => 'oga90003',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}