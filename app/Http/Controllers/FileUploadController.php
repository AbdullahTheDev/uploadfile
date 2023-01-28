<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class FileUploadController extends Controller
{
    public function Index()
    {
        return view('files.uploadfile');
    }
    public function uploadfile(Request $request)
    {
        $file = $request->file;
   
      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      $destinationPath = public_path() . '/uploadedfiles/';
      if($file->move($destinationPath,$file->getClientOriginalName())){
        return redirect('/')->with('msg','File Uploaded Successfully');
      }
      return redirect('/')->with('msg','Something went wrong');
    }
    public function DeleteFiles()
    {
        $path = public_path('uploadedfiles/');
        $get_files = File::allFiles($path);

        dd($get_files[0]);
        return $get_files;
        $file = '1672858434V4nfpYEJ.png';
        File::delete(public_path("uploadedfiles/".$file));

        // Delete multiple files
        // File::delete($file1, $file2, $file3);

        // Delete an array of files
        // $files = array($file1, $file2);
        // File::delete($files);

        return "HI";
    }
}
