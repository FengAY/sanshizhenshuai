@extends('shared._layout')
@section('title', 'Categories Index')
@section('content')
    <h2>Index</h2>
    <p>
        <a href="{{url('Categories/Create')}}">Create New</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
                Name
            </th>

            <th>
                Description
            </th>
        </tr>
        </thead>
        <tbody>
        {{--Here we need a model to view data in the database--}}
        @foreach($categories as $category)
            <tr>
                <td>
                    {{$category->name}}
                </td>
                <td>
                    {{$category->description}}
                </td>

            </tr>
            @foreach($category->souvenirs as $souvenir)
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
