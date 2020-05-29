<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company as Company;


class CompanyController extends Controller
{
    public function show(Request $request)
	{
		$companies = Company::where('name','like','%'.$request->name.'%')->get();
		return \View::make('companies/list', compact('companies'));
	}

	public function update($id, Request $request)
	{
		$company = Company::find($id);
		$company->name = $request->name;
		$company->address = $request->address;
		$company->telephone = $request->telephone;
		$company->save();
		return redirect('company');
	}

	public function edit($id)
	{
		$company = Company::find($id);
		return \View::make('companies/update', compact('company'));
	}

	public function index()
	{
		$companies = Company::all();
		return \View::make('companies/list', compact('companies'));
	}

	public function create()
	{
		return \View::make('companies/new');
	}

    public function store(Request $request)
    {
    	$company = new Company;
    	$company->create($request->all());
    	return redirect('company');
    }

    public function destroy($id)
	{
		$company = Company::find($id);
		$company->delete();
		return redirect()->back();
	}
}
