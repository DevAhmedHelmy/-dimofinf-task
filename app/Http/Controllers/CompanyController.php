<?php

namespace App\Http\Controllers;

use Image;
use App\Company;
use Illuminate\Http\Request;
use App\Mail\CompanyNotification;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::withCount('employees')->paginate(10);

        return view('companies.index',[
            'companies' => $companies,
            'name' => trans('general.companies')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.form',['name' => trans('general.new_company')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $data = $request->validated();
        if($request->file('logo')){
            $logo = $request->file('logo');
            $input['logoname'] = time().'.'.$logo->extension();
            $destinationPath = public_path('/logos');
            $img = Image::make($logo->path());

            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['logoname']);

            $destinationPath = public_path('/logos');
            $logo->move($destinationPath, $input['logoname']);
            $data['logo'] = $input['logoname'];
        }
        $company = Company::create($data);
        if($company){
            \Mail::to('admin@admin.com')->send(new CompanyNotification($company));
        }

        return redirect()->route('company.index')->with('message',trans('general.save_message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show',['company' => $company,'name' => trans('general.show_company')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.form',['company' => $company,'name' => trans('general.update_company')]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {

        $data = $request->validated();
        if($request->file('logo')){
            $logo = $request->file('logo');
            $input['logoname'] = time().'.'.$logo->extension();
            $destinationPath = public_path('/logos');
            $img = Image::make($logo->path());

            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['logoname']);

            $destinationPath = public_path('/logos');
            $logo->move($destinationPath, $input['logoname']);
            $data['logo'] = $input['logoname'];
        }
        $company->update($data);
        return redirect()->route('company.index')->with('message',trans('general.update_message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        ($company->logo !== null) ? unlink( public_path() . '/logos' . '/' .$company->logo) : '';
        (count($company->employees) > 0) ? $company->employees->delete() : '';
        $company->delete();
        return redirect()->route('company.index')->with('message',trans('general.delete_message'));
    }
}
