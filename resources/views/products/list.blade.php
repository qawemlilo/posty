@extends('layouts.app')


@section('content')
  
Recent Products

<ul>
  @foreach ($products as $product)
      <li>{{ $product->product_name }} = R {{ $product->price }} </li>
  @endforeach
</ul>
@endsection
