<?php


namespace App\Traits;


trait ImageUpload
{

    private function uploadImage($file , $directory)
    {
        if(is_array($file)){
            $imagesArr = [];
            foreach ($file as $singleFile) {
                $fileName = str_replace(' ', '_', time() . $singleFile->getClientOriginalName());
                $singleFile->move($directory, $fileName);
                array_push($imagesArr, $directory . '/' . $fileName);
            }
            return $imagesArr;
        }else{
            $fileName = str_replace(' ' , '_' , time().$file->getClientOriginalName());
            $file->move($directory, $fileName);
            return $directory . '/' . $fileName;
        }
    }

}
