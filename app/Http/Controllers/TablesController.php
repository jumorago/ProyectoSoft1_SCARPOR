<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tables as Tables;
use App\Models\States as States;

class TablesController extends Controller
{
	public function show(Request $request)
	{
		$tables = Tables::where('numtable','like','%'.$request->numtable.'%')->get();
		return \View::make('tables/list', compact('tables'));
	}
	public function update($id, Request $request)
	{
		$tables = Tables::find($id);
		$tables->numtable = $request->numtable;
		$tables->id_states = $request->id_states;
		$tables->save();
		return redirect('tables');
	}
	public function edit($id)
    {
    	$tables = Tables::find($id);
    	$states = States::all();
    	return \View::make('tables/update', compact('tables','states'));
    }
	public function index(Request $request)
    {
    	$tables = Tables::all();
    	return \View::make('tables/list', compact('tables'));
    }
	public function create(Request $request)
    {
    	$states = States::all();
    	return \View::make('tables/new', compact('states'));
    }
    public function store(Request $request)
    {
    	$tables = new Tables;
    	$tables->numtable = $request->numtable;
    	$tables->id_states = 1;
    	$tables->save();
    	return redirect('tables');
    }
    public function destroy($id)
    {
        $tables = Tables::find($id);
        $tables->id_states = 2;
        $tables->save();
        return redirect()->back();
    } 
}
