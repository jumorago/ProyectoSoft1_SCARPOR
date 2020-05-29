<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device as Device;

class DeviceController extends Controller
{

	public function show(Request $request)
	{
		$devices = Device::where('name','like','%'.$request->name.'%')->get();
		return \View::make('devices/list', compact('devices'));
	}

	public function update($id, Request $request)
	{
		$device = Device::find($id);
		$device->ip = $request->ip;
		$device->name = $request->name;
		$device->type_device = $request->type_device;
		$device->codeqr = $request->codeqr;
		$device->id_state = $request->id_state;
		$device->id_red = $request->id_red;
		$device->save();
		return redirect('device');
	}

	public function edit($id)
	{
		$device = Device::find($id);
		return \View::make('devices/update', compact('device'));
	}

	public function index()
	{
		$devices = Device::all();
		return \View::make('devices/list', compact('devices'));
	}

	public function create()
	{
		return \View::make('devices/new');
	}

    public function store(Request $request)
    {
    	$device = new Device;
    	$device->create($request->all());
    	return redirect('device');
    }

    public function destroy($id)
	{
		$device = Device::find($id);
		$device->delete();
		return redirect()->back();
	}
}
