<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller {
    
    public function index() {
        $pizzas = [
            ['type' => 'Cheese' , 'base' => 'Cheesy Pizza'],
            ['type' => 'Volcano' , 'base' => 'garlic crust'],
            ['type' => 'Veg Supreme' , 'base' => 'thin and crispy']
        ];
    
        return view('pizzas', [
                'pizzas'  => $pizzas,
                'name'    => request('name'),
                'age'     => request('age')
            ]
        );
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
