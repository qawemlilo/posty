@extends('layouts.app')


@section('content')
  
Recent Products

<ul>
  @foreach ($products as $product)
      <li>{{ $product->product_name }} = R {{ $product->price }} </li> <br>
  @endforeach
</ul>
<div class="d-flex justify-content-center">
  {!! $products->links() !!}
</div>

@endsection
