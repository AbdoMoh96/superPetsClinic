<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageUpload;
use Illuminate\Support\Facades\File;
class FilesController extends Controller
{
    use ImageUpload;

    public function image(Request $request){
          if($request->files){
              foreach ($request->files as $file){
                  return $this->uploadImage($file , $request->header('dir'));
              }
          }
              return false;
    }

    public function images(Request $request){
        if($request->files){
            foreach ($request->files as $files){
                return $this->uploadImages($files , $request->header('dir'));
            }
        }
        return false;
    }

    public function imageDelete(Request $request){
        File::delete($request["path"]);
    }
}
