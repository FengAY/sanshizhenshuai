<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use Gloudemans\Shoppingcart\Facades\Cart as Cart;
//use Cart;


class CartsController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        //

        return view('carts.index');

//        return view('categories.index');



    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {



        $id =$request->id;

        $name = $request->name;

        $price = $request->price;

        $count =1;

        //

//        Cart::associate('Cap','App')->add($request->id, $request->name, 1, $request->price);



        Cart::add($id, $name,  $count, $price)->associate('App\Models\Cap');

        return redirect()->route('carts.index')->withSuccessMessage('Item was added to your carts!');

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        //

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request



     * @return \Illuminate\Http\Response

     */

    public function update(Request $request)

    {

        //



        $rowId = $request->get('rowId');

        $increment = $request->get('increment');

        if ($rowId !== null){



            $cart = Cart::get($rowId);

            $qty= $increment + $cart->qty;



            Cart::update ($rowId, $qty);



        }





        return redirect()->route('carts.index')->withSuccessMessage('Item has been removed!');



    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        //

        Cart::remove($id);

        return redirect()->route('carts.index')->withSuccessMessage('Item has been removed!');

    }





    /**

     * Remove the specified resource from storage.

     *

     * @return \Illuminate\Http\Response

     */

    public function empty_carts(){

        Cart::destroy();

        return redirect()->route('carts.index')->withSuccessMessage('Cart has been emptied!');

    }





}