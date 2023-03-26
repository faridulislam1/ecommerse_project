<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    private static $companies,$company;
    public function addCompany(){
        return  view('addcompany');

    }
    public function storeCompany(Request $request){

        Companie::saveCompany($request);
        return back()->with('message', 'Info saved');
    }
    public function companyList(){
        self::$companies=Companie::all();
        return view('company-list',[
            'companies'=>self::$companies
        ]);
    }
    public function companyDelete(Request $request){
        Companie::deleteCompany($request->id);
        return back()->with('message', 'Info deleted');
    }
    public function companyEdit($id)
    {
        self::$company = Companie::find($id);
        return view('Company-edit', [
            'company' => self::$company
        ]);
    }
    public function companyUpdate(Request $request){
        Companie::companyUpdate($request);
        return back()->with('message', 'Info updated');
    }
}
