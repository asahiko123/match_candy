<?php

namespace App\Services;

class FileUploadServices{

    public static function fileUpload($imageFile){

        $filenameWithExt = $imageFile->getClientOriginalName();

        $fileName = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        $extension = $imageFile->getClientOriginalExtension();

        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        $fileData = file_get_contents($imageFile->getRealPath());

        $list = [$extension,$fileNameToStore,$fileData]; //拡張子、ファイル名、ファイルデータ

        return $list;

    }
}
