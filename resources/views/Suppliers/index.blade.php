@extends('shared._layout')
@section('title', 'Suppliers Index')
@section('content')
    <h2>Index</h2>
    <p>
        <a href="{{url('Suppliers/Create')}}">Create New</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Address
            </th>
            <th>
                Email Address
            </th>
            <th>
                Phone
            </th>
        </tr>
        </thead>
        <tbody>
        {{--Here we need a model to view data in the database--}}
        @foreach($suppliers as $supplier)
            <tr>
                <td>
                    {{$supplier->name}}
                </td>
                <td>
                    {{$supplier->address}}
                </td>
                <td>
                    {{$supplier->emailaddress}}
                </td>
                <td>
                    {{$supplier->phone}}
                </td>
            </tr>
            @foreach($supplier->souvenirs as $souvenir)
                <tr style="color: red;">
                    <td>
                        Souvenir Name:{{$souvenir->name}}
                    </td>
                    <td>
                        Souvenir Price:{{$souvenir->price}}
                    </td>
                </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
@endsection
