@extends('layouts.app')

@section('content')
    
<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="post">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="" name="name">
        <label for="type">Choose pizza type</label>
        <select name="type" id="type">
            <option value="cheese">Cheese</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volcano">volcano</option>
        </select>

        <label for="base">Choose pizza base</label>
        <select name="base" id="base">
            <option value="cheese">Cheese</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volcano">volcano</option>
        </select>
        <fieldset>
            <label for="">Extra toppings</label>
            <input type="checkbox" name="toppings[]" id="" value="extra mashrooms"> Extra Cheese <br>
            <input type="checkbox" name="toppings[]" id="" value="peppers"> Peppers <br>
            <input type="checkbox" name="toppings[]" id="" value="Garlic"> Garlic <br>
            <input type="checkbox" name="toppings[]" id="" value="chilli"> Chilli <br>
            
        </fieldset>
        <input type="submit" value="Order pizza">
    </form>
</div>
@endsection