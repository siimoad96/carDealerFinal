<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
public function uploadUserImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
{
$name = !is_null($filename) ? $filename : str_random(25);

$file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);


return $file;
}
public function uploadCarImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random(25);

        $image = $uploadedFile->storeAs($folder, $name . '.' . $uploadedFile->getClientOriginalExtension(), $disk);


        return $image;
    }
}