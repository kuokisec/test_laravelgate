<?php

use Illuminate\Database\Seeder;

class TblMsxxxxMemberRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_msxxxx_member_roles')->delete();
        
        \DB::table('tbl_msxxxx_member_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'msxxxx_role_code' => 'systemadmin',
                'msxxxx_member_id' => '000000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'msxxxx_role_code' => 'supplesiteadmin',
                'msxxxx_member_id' => '000001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'msxxxx_role_code' => 'supplesitestaff',
                'msxxxx_member_id' => '000002',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'msxxxx_role_code' => 'otebijuchustaff',
                'msxxxx_member_id' => '000010',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}