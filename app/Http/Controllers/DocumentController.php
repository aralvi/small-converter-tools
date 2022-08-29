<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;
use ZipArchive;

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
    // public function pngToJpg(Request $request)
    // {
    //     ini_set('max_execution_time', 1000000000000000);
    //     foreach ($request->images as $key => $image) {
    //         $test = rtrim($image->getClientOriginalName(), $image->getClientOriginalExtension()).'jpg';
    //         $image->move(public_path('/png-to-jpg'), $test);
    //     }
    //     return 'changed';

    // }
    public function pngToJpg(Request $request)
    {
        ini_set('max_execution_time', 1000000000000000);
        $zip = new ZipArchive;
        $path_time = time();
        foreach ($request->images as $image) {
            $test = rtrim($image->getClientOriginalName(), $image->getClientOriginalExtension()).'jpg';
            $image->move(public_path('/uploadedimages/image-conversion-'. $path_time), $test);
        }
        $fileName = 'uploadedimages/image-conversion-' . $path_time.'/myFiles.zip';
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            $files = File::files(public_path('/uploadedimages/image-conversion-' . $path_time));
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }

            $zip->close();
        }

        return response()->download(public_path($fileName));
        return 'changed';

    }
}
