<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*vider les tables*/
        User::truncate();
        DB::table('role_user')->truncate();

        /*creer mon user admin*/
        $admin = User::create(array(
        	"name" => "Vasco",
        	"email" => "vasco@gmail.com",
        	"password" => Hash::make('123456789')       
        ));

        /*recuperer le role de l'admin*/
        $adminRole = Role::where('name', 'admin')->first();

        /*attacher a chaque utilisateur son role*/
        $admin->roles()->attach($adminRole);
    }
}
