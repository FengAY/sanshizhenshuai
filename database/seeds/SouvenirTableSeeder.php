<?php

use Illuminate\Database\Seeder;

class SouvenirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $souvenir=new \App\Souvenir(['name'=>'Jade01','price'=>255,'description'=>'great jade01','supplier_id'=>'1','category_id'=>'1010','pathoffile'=>'jade01.jpg']);
        $souvenir->save();
        $souvenir=new \App\Souvenir(['name'=>'Jade02','price'=>355,'description'=>'great jade02','supplier_id'=>'2','category_id'=>'1010','pathoffile'=>'jade02.jpg']);
        $souvenir->save();
        $souvenir=new \App\Souvenir(['name'=>'Jade03','price'=>455,'description'=>'great jade03','supplier_id'=>'3','category_id'=>'1010','pathoffile'=>'jade03.jpg']);
        $souvenir->save();
        $souvenir=new \App\Souvenir(['name'=>'Jade04','price'=>555,'description'=>'great jade04','supplier_id'=>'1','category_id'=>'1010','pathoffile'=>'jade04.jpg']);
        $souvenir->save();
        $souvenir=new \App\Souvenir(['name'=>'Jade05','price'=>655,'description'=>'great jade05','supplier_id'=>'2','category_id'=>'1010','pathoffile'=>'jade05.jpg']);
        $souvenir->save();
    }
}
