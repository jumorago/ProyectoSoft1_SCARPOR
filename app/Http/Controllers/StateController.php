<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State as State;
use App\Models\Statetype as Statetype;



class StateController extends Controller
{
    public function show(Request $request)
    {
        $states = State::where('name','like','%'.$request->name.'%')->get();
        return\View::make('states/list', compact('states'));
    }

    public function update($id, Request $request)
    {
        $state = State::find($id);
        $state->name = $request->name;
        $state->statetype_id = $request->statetype_id;
        $state->save();
        return redirect('state');
    }

    public function edit($id)
    {
        $state = State::find($id);
        $statetypes = Statetype::select('id','name')->get();
        return \View::make('states/update', compact('state', 'statetypes'));
    }

    public function index()
    {
        $states = State::all();
        $statetypes = Statetype::all();
        return \View::make('states/list', compact('states', 'statetypes'));
    }

	public function create()
    {
        $states = State::all();
        $statetypes = Statetype::select('id','name')->get();
        return \View::make('states/new', compact('states', 'statetypes'));
    }

    public function store(Request $request)
    {
    	$state = new State;
    	$state->name = $request->name;
    	$state->statetype_id = $request->statetype_id;
    	$state->save();
    	return redirect('state');
    }

    public function destroy($id)
    {
        $state = State::find($id);
        $state->delete();
        return redirect()->back();
    }
}
