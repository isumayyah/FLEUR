<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;

class PhoneController extends Controller
{


  public $ُEmpid1='';
  public function A1 (Request $request){
session::put('empid','10');
return "the varible is stored";
  }


 public function A2(Request $request){
  $phone=DB::table('users')
  ->where('id','=',$request->session()->get('empid'))
  ->get();
  dd($phone);
  }



  public function invoic(Request $request){
  
    $row=[
      'Name'=>$request->fullname,
      'City'=>$request->City,
      'BirthDate'=>$request->d,
      'phone'=>$request->phone,
      'Email'=>$request->email,
      'address'=>$request->address,
      'ProductName'=>$request->ProductName,
      'Total'=>$request->Total,
      

   ];
 
     DB::table('invoic')->insert($row);
     $phone=DB::table('invoic')
     ->where('phone','=',$request->phone)
     ->first();
     return view('invoic',['invoic'=>$phone]);

   }

  public function CheckOut($id)
  {
    $phone=DB::table('products')
    ->where('id','=',$id)
    ->first();
   
    return view('checkout',['phone'=>$phone]);
  }
    public function phoneType()
    {
      $phone=DB::table('products')->get();
    
        
        return view('phone',['phone'=>$phone]);
   
    }
}
