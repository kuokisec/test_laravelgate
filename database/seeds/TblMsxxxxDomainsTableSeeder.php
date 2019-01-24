<?php

use Illuminate\Database\Seeder;

class TblMsxxxxDomainsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_msxxxx_domains')->delete();
        
        \DB::table('tbl_msxxxx_domains')->insert(array (
            0 => 
            array (
                'id' => 1,
                'msxxxx_domain_code' => 'systemadmin',
                'msxxxx_domain_name' => 'system管理',
                'msxxxx_shop_code' => 999999,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'msxxxx_domain_code' => 'supplesiteadmin',
                'msxxxx_domain_name' => 'サプリサイト管理者',
                'msxxxx_shop_code' => 888888,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'msxxxx_domain_code' => 'supplesitestaff',
                'msxxxx_domain_name' => 'サプリサイトスタッフ',
                'msxxxx_shop_code' => 888888,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'msxxxx_domain_code' => 'otebijuchustaff',
                'msxxxx_domain_name' => 'お手美受注スタッフ',
                'msxxxx_shop_code' => 777777,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}