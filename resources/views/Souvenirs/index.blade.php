@extends('shared._layout')
@section('title', 'Souvenirs Index')
@section('content')
    <h2>Index</h2>
    <p>
        <a href="{{url('Souvenirs/Create')}}">Create New</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
                Image
            </th>
            <th>
                Name
            </th>
            <th>
                Price
            </th>
            <th>
                Description
            </th>
        </tr>
        </thead>
        <tbody>
        {{--Here we need a model to view data in the database--}}
        @foreach($souvenirs as $souvenir)
            <tr>
                <td>
                    <img class="Souvenirs" src="{{asset('image/souvenirs/'.$souvenir->pathoffile)}}"/>
                </td>
                <td>
                    {{$souvenir->name}}
                </td>
                <td>
                    {{$souvenir->price}}
                </td>
                <td>
                    {{$souvenir->description}} @include("carts.add")
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
@endsection
