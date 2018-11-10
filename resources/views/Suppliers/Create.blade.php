@extends('Shared._layout')
@section('title', 'Supplier Create')
@section('content')
    <h2>Create</h2>
    <h4>Supplier</h4>
    <hr />
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="{{url('Suppliers/Create')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label  class="control-label">Name</label>
                    <input name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Address</label>
                    <input name="address" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Email Address</label>
                    <input name="emailaddress" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Phone</label>
                    <input name="phone" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-default" />
                </div>
            </form>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <a href="{{url('Suppliers/')}}">Back to List</a>
    </div>
@endsection
