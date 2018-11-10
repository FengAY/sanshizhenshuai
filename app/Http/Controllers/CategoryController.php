<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();//变量suppliers 是所有的Supplier
        //返回到view的supplier的indexview 并用compact 传参数(suppliers 上面的所有的suppliers)到view
        //compact(原意 压缩,紧密) 返回输出的数组 包含添加的所有变量
        return view('Categories.index',compact('categories'));
    }

    public function Create()
    {
        return view('Categories.Create');//返回到Suppliers下的Create view页面
    }

    public function CreatePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'max:100',
            'name' => 'required|max:50',
        ]);
        if ($validator->fails()) {
            return redirect('Suppliers/Create')
                ->withErrors($validator)
                ->withInput();
        }

        $category=new Category(//实例化一个新的Supplier
            [

                'name'=>$_POST['name'],
                'description'=>$_POST['description']
            ]
        );
        $category->save();//保存他
        return redirect('Categories');//重定向给Suppliers这个view页面
    }
}
