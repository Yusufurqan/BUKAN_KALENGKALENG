<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administratorRole=new Role();
        $administratorRole->name="administrator";
        $administratorRole->display_name="Administrator";
        $administratorRole->description="All permission";
        $administratorRole->save();


        $adminRole=new Role();
        $adminRole->name="admin";
        $adminRole->display_name="Admin";
        $adminRole->description="admin permission";
        $adminRole->save();
        
        $ClientRole=new Role();
        $ClientRole->name="client";
        $ClientRole->display_name="Client";
        $ClientRole->description="client permission";
        $ClientRole->save();

        $administrator=new User();
        $administrator->name="udin";
        $administrator->email="udin@gmail.com";
        $administrator->password=bcrypt('12345');
        $administrator->save();
        $administrator->attachRole($administratorRole);

        $admin=new User();
        $admin->name="ujang";
        $admin->email="ujang@gmail.com";
        $admin->password=bcrypt('12345');
        $admin->save();
        $admin->attachRole($adminRole);

        $Client=new User();
        $Client->name="jamal";
        $Client->email="jamal@gmail.com";
        $Client->password=bcrypt('12345');
        $Client->save();
        $Client->attachRole($ClientRole);
    }
}
