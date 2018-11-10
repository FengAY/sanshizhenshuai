

{{--if user is administrator, cannot process an order--}}

@if (Auth::guest() || Auth::user()-> role <9)

    <form action="{{route('carts.store')}}" method="POST">

        {!! csrf_field() !!}

        <input type="hidden" name="id" value="{{ $souvenir->id }}">

        <input type="hidden" name="name" value="{{ $souvenir->name }}">

        <input type="hidden" name="price" value="{{ $souvenir->price }}">

        <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">

    </form>



@endif