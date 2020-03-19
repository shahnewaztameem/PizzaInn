@extends('layouts.layout')

@section('content')
    
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            View All Pizza Items 
        </div>
        @foreach ($pizzas as $pizza)
        <div>
             {{$loop -> index}} {{ $pizza['type'] }} &mdash; {{ $pizza['base'] }}
        </div>    
        @endforeach
    </div>
    
</div>
@endsection