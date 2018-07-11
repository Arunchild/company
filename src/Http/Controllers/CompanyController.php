<?php

namespace Company\Http\Controllers;


use App\Http\Controllers\Controller;

use Company\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Company::all();
        //$items = ['test'];
        return view('company::index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'tin' => 'required',
            'cst' => 'required',
            'companyname' 	=> 'required',
            'addressline1' 	=> 'required',
            'addressline2' 	=> 'required'
        ]);

        $input = $request->all();

        Company::create($input);

        session()->flash('flash_message', 'Company successfully added!');

        //TODO: redirect to company list page
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('company::edit')->withitems($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        $this->validate($request, [
            'tin' => 'required',
            'cst' => 'required',
            'companyname' 	=> 'required',
            'addressline1' 	=> 'required',
            'addressline2' 	=> 'required'
        ]);

        $input = $request->all();

        $company->fill($input)->save();

        session()->flash('flash_message', 'Company successfully updated!');

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);

        $company->delete();

        session()->flash('flash_message', 'company successfully deleted!');

        return redirect()->route('company.index');
    }
}