<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class DocumentController extends Controller
{
    public function imageToPdf(Request $request)
    {
        ini_set('max_execution_time', 1000000000000000);
        $data = ['images'=> $request->images];
        foreach ($request->images as $key => $image) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/uploadedimages'), $imageName);
        }
        $pdf =  PDF::loadView('image-to-pdf',$data);
        return $pdf->download('image-to-pdf.pdf');

    }
}
