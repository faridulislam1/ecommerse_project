<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public static  $employees,$employee;
    public function index(){
        return view('employee');
    }
    public function saveEmployee(Request $request){
        Employee::saveEmployee($request);
        return back();
    }
    public function employeeList(){
        self::$employees=Employee::all();
        return view('employee-list',[
            'employees'=>self::$employees
        ]);
    }
    public function employeeDelete(Request $request){
        Employee::employeeDelete($request->id);
        return back()->with('message', 'Info deleted');
    }
    public function employeeEdit($id)
    {
        self::$employee = Employee::find($id);
        return view('employee-edit', [
            'employee' => self::$employee
        ]);
    }
    public function employeeUpdate(Request $request){
        Employee::employeeUpdate($request);
        return back()->with('message', 'Info updated');
    }

}
