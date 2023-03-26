<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;
    private static $company,$logo,$logoNewName,$directory,$logoUrl;
    public static  function  saveCompany($request)
    {
        $request->validate([
            'name'=>'required|min:6|max:30',
            'email'=>'required'
        ]);
        self::$company = new Companie();
        self::$company->name = $request->name;
        self::$company->email = $request->email;
        self::$company->website = $request->website;

        if($request->file('logo')){
            self::$company->logo = self::saveLogo($request);
        }
        self::$company->save();

    }
    private static function saveLogo($request){
        self::$logo = $request->file('logo');
        self::$logoNewName='stu-'.rand().'.' .self::$logo->getClientOriginalExtension();
        self::$directory='backend/assets/company-logo/';
        self::$logoUrl= self::$directory.self::$logoNewName;
        self::$logo->move( self::$directory,self::$logoNewName);
        return  self::$logoUrl;
    }

    public static function deleteCompany($id){
        self::$company=Companie::find($id);
        self::$company->delete();
    }

    public static  function companyUpdate($request){
        self::$company=Companie::find($request->id);
        self::$company->name = $request->name;
        self::$company->email = $request->email;
        self::$company->website = $request->website;

        if( $request->file('logo')) {
            if (self::$company->logo) {
                if (file_exists(self::$company->logo)) {
                    unlink(self::$company->logo);
                    self::$company->logo = self::saveLogo($request);

                }

            } else {
                self::$company->logo = self::saveLogo($request);
            }
        }
            self::$company->save();
        }
    }


