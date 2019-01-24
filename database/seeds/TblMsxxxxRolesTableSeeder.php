<?php

use Illuminate\Database\Seeder;

class TblMsxxxxRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_msxxxx_roles')->delete();
        
        \DB::table('tbl_msxxxx_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'msxxxx_role_code' => 'systemadmin',
                'msxxxx_role_rank' => 999999,
                'msxxxx_policy_code' => 'CommonAuthPolicy',
                'msxxxx_permission_code' => 'CRUD',
                'msxxxx_available_falg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'msxxxx_role_code' => 'supplesiteadmin',
                'msxxxx_role_rank' => 50,
                'msxxxx_policy_code' => 'SuppleAuthPolicy',
                'msxxxx_permission_code' => 'CRUD',
                'msxxxx_available_falg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'msxxxx_role_code' => 'supplesitestaff',
                'msxxxx_role_rank' => 100,
                'msxxxx_policy_code' => 'SuppleAuthPolicy',
                'msxxxx_permission_code' => 'CRU',
                'msxxxx_available_falg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'msxxxx_role_code' => 'otebijuchustaff',
                'msxxxx_role_rank' => 10,
                'msxxxx_policy_code' => 'OtebiAuthStaffPolicy',
                'msxxxx_permission_code' => 'RU',
                'msxxxx_available_falg' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}