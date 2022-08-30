<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;
use ZipArchive;

class DocumentController extends Controller
{

    public function index($name)
    {
        $image = str_replace('convert-','',$name);
        $name = config('constants.' . $name);
        return view('upload-file',compact('name','image'));
    }

    /* -------------------------------------------------------------------------- */
    /*                           image to pdf converter                           */
    /* -------------------------------------------------------------------------- */
    public function imageToPdf(Request $request)
    {
        ini_set('max_execution_time', 1000000000000000);
        $data = ['images'=> $request->images];
        foreach ($request->images as $key => $image) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path(config('constants.directory')), $imageName);
        }
        $pdf =  PDF::loadView('image-to-pdf',$data);
        $pdf->save(public_path(config('constants.directory')).'/image-to-pdf.pdf');
        return back();

    }
    /* -------------------------------------------------------------------------- */
    /*                             change image format                            */
    /* -------------------------------------------------------------------------- */
    public function changeImageFormat(Request $request,$from,$to)
    {
        ini_set('max_execution_time', 1000000000000000);
        $destination = config('constants.directory').'/image-conversion-' . time();
        foreach ($request->images as $image) {
            $test = rtrim($image->getClientOriginalName(), $image->getClientOriginalExtension()).$to;
            $image->move(public_path($destination), $test);
        }
       return $this->createZipFile($destination);

        return 'changed';

    }

    /* -------------------------------------------------------------------------- */
    /*                               create zip file                              */
    /* -------------------------------------------------------------------------- */
    public function createZipFile($path)
    {
        $zip = new ZipArchive;
        $fileName = $path. '/myFiles.zip';
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            $files = File::files(public_path($path));
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }

            $zip->close();
        }

        return response()->download(public_path($fileName));
    }
}
