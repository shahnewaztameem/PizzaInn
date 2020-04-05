@extends('layouts.layout')

@section('content')
    
<div class="wrapper pizza-details">
<h1>Order for {{ $pizza->name}}</h1>
<p class="type">type - {{$pizza->type}}</p>
<div class="base">base - {{$pizza->base}}</div>
<p class="toppings">
    <ul>
        @foreach ($pizza->toppings as $topping)
            <li>{{ $topping}}</li>
        @endforeach
    </ul>
    <form action="/pizzas/{{$pizza->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order now!</button>
    </form>
</p>
</div>
<a href="/pizzas" class="btn btn-primary">Back to all pizzas</a>
@endsection