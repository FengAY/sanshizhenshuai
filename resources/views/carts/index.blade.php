@extends('layouts.app')



@section('content')

    <div class="container">
        <h1>Your Cart</h1>
        <hr>
        @if (session()->has('success_message'))

            <div class="alert alert-success">

                {{ session()->get('success_message') }}

            </div>

        @endif
        @if (session()->has('error_message'))

            <div class="alert alert-danger">

                {{ session()->get('error_message') }}

            </div>

        @endif

        @if (sizeof(Cart::content()) > 0)

            <table class="table">

                <thead>

                <tr>

                    <th>Name</th>

                    <th>Price</th>

                    <th>Quantity</th>

                    <th>Total</th>

                    <th class="column-spacer"></th>

                    <th></th>

                </tr>

                </thead>



                <tbody>

                @foreach (Cart::content() as $item)

                    <tr>

                        <td>

                            {{--<a href="{{route('caps.show', $item->id)}}">--}}

                                {{--{{$item->name}}--}}

                            {{--</a>--}}



                        </td>

                        <td>

                            {{$item->price}}

                        </td>



                        <td>



                            <ul class=" list-inline">

                                <li class="list-inline-item">

                                    <form action="{{url('carts-update')}}" method="POST" class="side-by-side">

                                        {!! csrf_field() !!}

                                        <input type="hidden" name="rowId" value="{{$item->rowId}}">

                                        <input type="hidden" name="increment" value="-1">

                                        <input type="submit" class="btn btn-primary btn-sm" value="-">

                                    </form>



                                </li>



                                <li class="list-inline-item">

                                    {{$item->qty}}



                                </li>



                                <li class="list-inline-item">

                                    <form action="{{url('carts-update')}}" method="POST" class="side-by-side">

                                        {!! csrf_field() !!}

                                        <input type="hidden" name="rowId" value="{{$item->rowId}}">

                                        <input type="hidden" name="increment" value="1">

                                        <input type="submit" class="btn btn-primary btn-sm" value="+">

                                    </form>



                                </li>





                            </ul>


                        </td>

                        <td>${{ $item->subtotal }}</td>

                        <td class=""></td>

                        <td>

                            <form action="{{route('carts.destroy',  $item->rowId)}}" method="POST" class="side-by-side">

                                {!! csrf_field() !!}

                                <input type="hidden" name="_method" value="DELETE">

                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">

                            </form>


                        </td>

                    </tr>



                @endforeach

                <tr>

                    <td class="table-image"></td>

                    <td></td>

                    <td class="small-caps table-bg" style="text-align: right">Subtotal</td>

                    <td>${{ Cart::instance('default')->subtotal() }}</td>

                    <td></td>

                    <td></td>

                </tr>

                <tr>

                    <td class="table-image"></td>

                    <td></td>

                    <td class="small-caps table-bg" style="text-align: right">GST 15%</td>

                    <td>${{ Cart::instance('default')->subtotal() *0.15 }}</td>

                    <td></td>

                    <td></td>

                </tr>



                <tr class="border-bottom">

                    <td class="table-image"></td>

                    <td style="padding: 40px;"></td>

                    <td class="small-caps table-bg" style="text-align: right">Your Total</td>

                    <td class="table-bg">${{ Cart::instance('default')->subtotal() *1.15 }}</td>

                    <td class="column-spacer"></td>

                    <td></td>

                </tr>



                </tbody>

            </table>



{{--            <a href="{{ route('Souvenirs.Index') }}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;--}}


            {{--<a--}}

                    {{--href="{{route('orders.create')}}"--}}

                    {{--class="btn btn-success btn-lg">--}}

                {{--Process to checkout--}}

            {{--</a>--}}



            <div style="float:right">

                <form action="{{ url('carts-empty') }}" method="POST">

                    {!! csrf_field() !!}

                    <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">

                </form>

            </div>



            <div id="order_form" style="display: none">



                <form

                        action="{{url('process-order')}}" method="POST">

                    {{ csrf_field() }}



                    <div   class="form-group">

                        <label>Name</label>



                        <input class="form-control"

                               type="text"

                               name="receiver_name"



                        >

                    </div>



                    <div class="form-group">



                        <label>Address</label>





                        <input class="form-control"

                               type="text"

                               name ="address"



                        >

                    </div>



                    <div class="form-group">

                        <input

                                type="submit"

                                class="btn btn-primary"

                                value="Process"

                        >

                    </div>



                </form>



            </div>

        @else



            <h3>You have no items in your shopping cart</h3>

{{--            <a href="{{ route('Souvenirs.Index') }}" class="btn btn-primary btn-lg">Continue Shopping</a>--}}



        @endif



        <div class="spacer"></div>



    </div> <!-- end container -->



    <script>



        function toggle() {

            var x = document.getElementById("order_form");

            if (x.style.display === "none") {

                x.style.display = "block";

            } else {

                x.style.display = "none";

            }

        }



    </script>









@endsection