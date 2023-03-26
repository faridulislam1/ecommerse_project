<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    private static $employee;
    public static function saveEmployee($request)
    {
        self::$employee = new Employee();
        self::$employee->name = $request->name;
        self::$employee->company_id = $request->company_id;
        self::$employee->email = $request->email;
        self::$employee->phone = $request->phone;
        self::$employee->save();
    }
    public static function employeeDelete($id){
        self::$employee=Employee::find($id);
        self::$employee->delete();
    }
    public static  function employeeUpdate($request){
        self::$employee=Employee::find($request->id);
        self::$employee->name=$request->name;
        self::$employee->company_id = $request->company_id;
        self::$employee->email = $request->email;
        self::$employee->phone = $request->phone;
        self::$employee->save();
    }
}
