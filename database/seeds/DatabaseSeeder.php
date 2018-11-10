<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SouvenirTableSeeder::class);
        $this->call(SupplierTableSeeder::class);
        $this->call(CategoryTableSeeder::class);

        $user=new App\User(['name'=>'admin','email'=>'admin@email.com','password'=>bcrypt('P@ssw0rd'),'type'=>'admin','is_activated'=>'1']);
        $user->save();
    }
}
