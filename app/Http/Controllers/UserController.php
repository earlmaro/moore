<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class UserController extends Controller
{
    public function passwordChange(Request $request)
    {
        $userEmail = $request->email;
       $userPassword = $request->password;
       $newPassword = $request->new_password;
       

       $spreedSheet = IOFactory::load('./text.xlsx');
       $email =   $spreedSheet->getActiveSheet()->getCell('k2')->getCalculatedValue();
       $password =   $spreedSheet->getActiveSheet()->getCell('l2')->getCalculatedValue();
    //    dd($email);
       if($email != $userEmail && $password != $userPassword){
           return Redirect::back();
        }else{
        $spreedSheet->getActiveSheet()
        ->setCellValue('k2',$userEmail)
        ->setCellValue('l2',$userPassword);
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load("./text.xlsx");
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save("./text.xlsx");
        // $spreedSheet->save("./text.xlsx");
        return view('login');

    }

      

        //    Storage::disk('local')->put('username.csv', $userEmail);
        //    Storage::disk('local')->put('password.csv', $userPassword);



    }

    public function login(Request $request){
        $userEmail = $request->email;
        $userPassword = $request->password;
       
        $spreedSheet = IOFactory::load('./text.xlsx');
        $email =   $spreedSheet->getActiveSheet()->getCell('k2')->getCalculatedValue();
        $password =   $spreedSheet->getActiveSheet()->getCell('l2')->getCalculatedValue();
// dd($email);
        if($email == $userEmail && $password == $userPassword){
            return view('create-content');
            
        }else{
            return Redirect::back();
        }

    }

    public function loginPagee(Request $request){
      
            return view('login');

    }
    
    public function loginPage(Request $request){
      
        return view('login');

}

}
