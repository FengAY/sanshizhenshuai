<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')- CarSupplier</title>
    <link rel="stylesheet" href="{{url('lib/bootstrap/dist/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('site.js')}}" type="text/css"/>
</head>
<body>
<div style="font-size:15px" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="col-xs-12 col-md-9 col-lg-9    collapse navbar-collapse">
        <div class="col-xs-6 col-md-3 col-lg-3  navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                @if(Auth::user()!=null &&  Auth::user()->type=='admin')
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('Suppliers/') }}">Supplier</a></li>
                    <li><a href="{{ url('About/') }}">About</a></li>
                    <li><a href="{{ url('Contact/') }}">Contact us</a></li>
                    <li><a href="{{ url('Souvenirs/') }}">Souvenirs</a></li>
                    <li><a href="{{ url('Categories/') }}">Categories</a></li>
                @else
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('Suppliers/indexCustomer') }}">Supplier</a></li>
                    <li><a href="{{ url('About/') }}">About</a></li>
                    <li><a href="{{ url('Contact/') }}">Contact us</a></li>
                    <li><a href="{{ url('Souvenirs/') }}">Souvenirs</a></li>
                    <li><a href="{{ url('Categories/indexCustomer') }}">Categories</a></li>

                @endif

            </ul>
        </div>
    </div>
</div>
<div class="container body-content">
    @yield('content')
    <hr />
    <div class="container">
        <footer class="footer">
            <div class="row">
                <div class="col-md-3 col-xs-6">

                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{url('lib/jquery/dist/jquery.js')}}"></script>
<script src="{{url('lib/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{url('js/site.js')}}"></script>
</body>
</html>
