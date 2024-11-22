<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait GeneraleTraits
{
    
    public function uploadIMG(Request $request, $fileInput = 'imageUrl', $directory = 'products')
    {
        $imageUrl=null;
        if ($request->hasFile($fileInput)) {

            $imageUrl= 'storage/' . $request->file($fileInput)->store($directory, 'public');
        }
        return $imageUrl;
    }
    
}
