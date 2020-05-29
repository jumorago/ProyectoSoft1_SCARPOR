<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statetype as Statetype;

class StatetypeController extends Controller
{
    public function show(Request $request)
    {
        $statetypes = Statetype::where('name','like','%'.$request->name.'%')->get();
        return\View::make('statetypes/list', compact('statetypes'));
    }

    public function update($id, Request $request)
    {
        $statetype = Statetype::find($id);
        $statetype->name = $request->name;
        $statetype->save();
        return redirect('statetype');
    }

    public function edit($id)
    {
        $statetype = Statetype::find($id);
        return \View::make('statetypes/update', compact('statetype'));
    }

    public function index()
    {
        $statetypes = Statetype::all();
        return \View::make('statetypes/list', compact('statetypes'));
    }

	public function create()
    {
    	return \View::make('statetypes/new');
    }

    public function store(Request $request)
    {
    	$statetype = new Statetype;
    	$statetype->name = $request->name;
    	$statetype->save();
    	return redirect('statetype');
    }

    public function destroy($id)
    {
        $statetype = Statetype::find($id);
        $statetype->delete();
        return redirect()->back();
    }
}
