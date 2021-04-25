<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImport;

// require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class SheetController extends Controller
{
    public function index(){
        $spreedSheet = IOFactory::load('./text.xlsx');
        $somevalue = 5000;
        $spreedSheet->getActiveSheet()->setCellValue('b2', $somevalue)
        ->setCellValue('b3',30)
        ->setCellValue('b4',40);
        
        $ff = $spreedSheet->getActiveSheet()->getCell('b2')->getCalculatedValue();
        dd($ff);
        // dd($spreedSheet->getActiveSheet()->getCell('b5')->getOldCalculatedValue());

    }

    public function getdata(){
        $spreedSheet = IOFactory::load('./text.xlsx');

    $main_slide_1 =   $spreedSheet->getActiveSheet()->getCell('b2')->getCalculatedValue();
    $main_slide_2 =     $spreedSheet->getActiveSheet()->getCell('c2')->getCalculatedValue() ;
    // $slide3 =     $spreedSheet->getActiveSheet()->getCell('d2')->getCalculatedValue() ;
    $logo_slide_1 =     $spreedSheet->getActiveSheet()->getCell('e2')->getCalculatedValue() ;
    $logo_slide_2 =     $spreedSheet->getActiveSheet()->getCell('f2')->getCalculatedValue() ;
    $logo_slide_3 =       $spreedSheet->getActiveSheet()->getCell('g2')->getCalculatedValue() ;
    $banner_slide_1 =       $spreedSheet->getActiveSheet()->getCell('h2')->getCalculatedValue() ;
    $banner_slide_2 =      $spreedSheet->getActiveSheet()->getCell('i2')->getCalculatedValue() ;
    $banner_slide_3 =      $spreedSheet->getActiveSheet()->getCell('j2')->getCalculatedValue() ;
    return view('home', compact('main_slide_1','main_slide_2','logo_slide_1','logo_slide_2','logo_slide_3','banner_slide_1','banner_slide_2','banner_slide_3','date','filename'));

    }


    
    public function preview(Request $request){

        $spreedSheet = IOFactory::load('./text.xlsx');
        $main_slide_1 = $request->main_slide_1;
        $main_slide_2 = $request->main_slide_2;
        $logo_slide_1 = $request->logo_slide_1;     
        $logo_slide_2 = $request->logo_slide_2;    
    $logo_slide_3 = $request->logo_slide_3;
    $banner_slide_1 = $request->banner_slide_1;
    $banner_slide_2 = $request->banner_slide_2;     
    $banner_slide_3 = $request->banner_slide_3;     

        $spreedSheet->getActiveSheet()->setCellValue('b2', $main_slide_1)
        ->setCellValue('c2',$main_slide_2)
        // ->setCellValue('d2',$fff)
        ->setCellValue('e2',$logo_slide_1)
        ->setCellValue('f2',$logo_slide_2)
        ->setCellValue('g2',$logo_slide_3)
        ->setCellValue('h2',$banner_slide_1)
        ->setCellValue('i2',$banner_slide_2)
        ->setCellValue('j2',$banner_slide_3);


        if($request->main_video){
            $path = public_path() ;
            $file_content = $request->main_video;
            // dd($file_content);
            $filename = $file_content;

            // if(Storage::disk('file')->put($path, $filename)) {
            //     return false;
            // }
            $file_content->storeAs( $filename, 'file');
            
            // if(Storage::disk('file')->put($path, $file_content)) {
            //     dd('sss');
            //     return false;
            // }

        }

       
        $date = Carbon::now();
        // $spreedSheet = IOFactory::load('./text.xlsx');

        $main_slide_1 =   $spreedSheet->getActiveSheet()->getCell('b2')->getCalculatedValue();
        
// dd($main_slide_1);
        $main_slide_2 =     $spreedSheet->getActiveSheet()->getCell('c2')->getCalculatedValue() ;
        // $slide3 =     $spreedSheet->getActiveSheet()->getCell('d2')->getCalculatedValue() ;
        $logo_slide_1 =     $spreedSheet->getActiveSheet()->getCell('e2')->getCalculatedValue() ;
        $logo_slide_2 =     $spreedSheet->getActiveSheet()->getCell('f2')->getCalculatedValue() ;
        $logo_slide_3 =       $spreedSheet->getActiveSheet()->getCell('g2')->getCalculatedValue() ;
        $banner_slide_1 =       $spreedSheet->getActiveSheet()->getCell('h2')->getCalculatedValue() ;
        $banner_slide_2 =      $spreedSheet->getActiveSheet()->getCell('i2')->getCalculatedValue() ;
        $banner_slide_3 =      $spreedSheet->getActiveSheet()->getCell('j2')->getCalculatedValue() ;
        return view('preview', compact('main_slide_1','main_slide_2','logo_slide_1','logo_slide_2','logo_slide_3','banner_slide_1','banner_slide_2','banner_slide_3','date','filename'));
    
    

    }

    public function upload(Request $request){

        $main_slide_1 = $request->main_slide_1;
        $main_slide_2 = $request->main_slide_2;
        $logo_slide_1 = $request->logo_slide_1;     
        $logo_slide_2 = $request->logo_slide_2;    
    $logo_slide_3 = $request->logo_slide_3;
    $banner_slide_1 = $request->banner_slide_1;
    $banner_slide_2 = $request->banner_slide_2;     
    $banner_slide_3 = $request->banner_slide_3; 
    $filename = $request->filename; 
    $date = Carbon::now();

    return view('index', compact('main_slide_1','main_slide_2','logo_slide_1','logo_slide_2','logo_slide_3','banner_slide_1','banner_slide_2','banner_slide_3','date','filename'));


}

    

    public function createContent(Request $request){


            return view('create-content');

    }

  




 
}
