<?php

namespace App\Http\Controllers;

use App\Souvenir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SouvenirController extends Controller
{
    public function index()
    {
        $souvenirs=Souvenir::all();//变量suppliers 是所有的Supplier
        //返回到view的supplier的indexview 并用compact 传参数(suppliers 上面的所有的suppliers)到view
        //compact(原意 压缩,紧密) 返回输出的数组 包含添加的所有变量
        return view('Souvenirs.index',compact('souvenirs'));
    }

    public function Create()
    {
        return view('Souvenirs.Create');//返回到Suppliers下的Create view页面
    }

    public function CreatePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'max:100',
            'name' => 'required|max:50',
            'price'=>'integer',
        ]);
        if ($validator->fails()) {
            return redirect('Suppliers/Create')
                ->withErrors($validator)
                ->withInput();
        }

        // Handle File Upload
        if($request->hasFile('image')){

            $fileNameToStore = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('image/souvenirs'),
                $fileNameToStore);
        } else {
            $fileNameToStore='default.jpg';
        }
        /*else
        {

        }*/
        $souvenir=new Souvenir(//实例化一个新的Supplier
            [
                'price'=>$request->price,
                'description'=>$_POST['description'],
                'name'=>$_POST['name'],
                'category_id'=>$_POST['category_id'],
                'supplier_id'=>$_POST['supplier_id'],
                'pathoffile'=>$fileNameToStore
            ]
        );
        $souvenir->save();//保存他
        return redirect('Souvenirs');//重定向给Suppliers这个view页面
    }
}
