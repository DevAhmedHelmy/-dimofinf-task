<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $companies = Company::latest()->limit(10)->get();
        $employees = Employee::latest()->limit(10)->get();
        $companies_count = Company::count();
        $employees_count = Employee::count();
        return view('home',
            [
                'name' => trans('general.Dashboard'),
                'companies' => $companies,
                'employees' => $employees,
                'companies_count' => $companies_count,
                'employees_count' => $employees_count

            ]);
    }
}
