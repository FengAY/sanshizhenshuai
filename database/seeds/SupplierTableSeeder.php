<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier=new \App\Supplier(['address'=>'aaa111','name'=>'Google','emailaddress'=>'jade@gmail.com','phone'=>'0123456']);
        $supplier->save();
        $supplier=new \App\Supplier(['address'=>'aaa222','name'=>'IBM','emailaddress'=>'jade@ibm.com','phone'=>'1123456']);
        $supplier->save();
        $supplier=new \App\Supplier(['address'=>'aaa333','name'=>'Microsoft','emailaddress'=>'jade@micro.com','phone'=>'2123456']);
        $supplier->save();
    }
}
