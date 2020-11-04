<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin_email= 'admin@proedge.com';
        $super_admin_password=  bcrypt('123456');
        $allData = \App\Model\Admin\Admin::get();

        if(count($allData)<1)
        {
            $admin = new App\Model\Admin\Admin([
                'name'     => 'admin',
                'email'    => $super_admin_email,
                'password' => $super_admin_password,
                'status'     => '1',
                'user_role'     => '0',
                'updated_at'     => '',
                'created_at'     => '',
            ]);
            $admin->save();
        }
    }
}
