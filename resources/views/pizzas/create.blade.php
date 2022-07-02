@extends('layouts.app')
@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="{{ route('pizzas.store') }}" method="post">
            @csrf
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name" />
            <label for="type">Choose pizza type:</label>
            <select name="type" id="type">
                <option value="margerita">Margerita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>
            <label for="">Extra toppings</label>
            <input type="checkbox" name="toppings[]" id="toppings" value="mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" id="toppings" value="peppers">Peppers<br>
            <input type="checkbox" name="toppings[]" id="toppings" value="garlic">Garlic<br>
            <input type="checkbox" name="toppings[]" id="toppings" value="olives">Olives<br>
            <input type="submit" value="Order Pizza" />
        </form>
    </div>
@endsection
