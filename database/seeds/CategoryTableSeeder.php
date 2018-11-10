<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=new App\Category(['name'=>'jade','description'=>'jade']);
        $category->save();
        $category=new App\Category(['name'=>'maori-gift','description'=>'maori-gift']);
        $category->save();
        $category=new App\Category(['name'=>'mugs','description'=>'mugs']);
        $category->save();
    }
}
