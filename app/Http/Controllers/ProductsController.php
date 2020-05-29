<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Products as Products;
use App\Models\States as States;

class ProductsController extends Controller
{
    public function show(Request $request)
	{
		$products = Products::where('name','like','%'.$request->name.'%')->get();
		return \View::make('products/list', compact('products'));
	}
	public function update($id, Request $request)
	{
		$products = Products::find($id);
		$products->name = $request->name;
        $products->codproduct = $request->codproduct;
        $products->valor = $request->valor;
		$products->id_states = $request->id_states;
		$products->save();
		return redirect('products');
	}
	public function edit($id)
    {
    	$products = Products::find($id);
    	$states = States::all();
    	return \View::make('products/update', compact('products','states'));
    }
	public function index(Request $request)
    {
    	$products = Products::all();
    	return \View::make('products/list', compact('products'));
    }
    public function cart(Request $request)
    {
        return \View::make('products/cart');
    }
    public function addtocart($id)
    {
        $products = Products::find($id);
        $cart = session()->get("cart");



        if(!$cart){
             $cart = [

                    $id => [
                        "name" => $products->name,
                        "codproduct" => $products->codproduct,
                        "quantity" => 1,
                        "valor" => $products->valor
                    ]

            ];

            session()->put('cart', $cart);

            return \View::make('products/new', compact('products'));


        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Producto agregado correctamente');
        }

        $cart[$id] = [
            "name" => $products->name,
            "codproduct" => $products->codproduct,
            "quantity" => 1,
            "valor" => $products->valor
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Producto agregado correctamente');

    }
	public function create(Request $request)
    {
    	$states = States::all();
    	return \View::make('products/new', compact('states'));
    }
    public function store(Request $request)
    {
    	$products = new Products;
    	$products->name = $request->name;
    	$products->codproduct = $request->codproduct;
    	$products->valor = $request->valor;
    	$products->id_states = 1;
    	$products->save();
    	return redirect('products');
    }
    public function destroy($id)
    {
        $products = Products::find($id);
        $products->id_states = 2;
        $products->save();
        return redirect()->back();
    }
}
