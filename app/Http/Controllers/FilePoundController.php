<?php

namespace App\Http\Controllers;

use App\Models\TemporaryImage;
use Illuminate\Http\Request;

class FilePoundController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('images')){
            $images = $request->file('images');
            $fileName = $images->getClientOriginalName();
            $folder = uniqid('image-',true);
            $images->storeAs('images/tmp/'.$folder,$fileName);

            TemporaryImage::create([
               'folder' => $folder,
                'name' => $fileName
            ]);

            return $folder;
        }
        return '';
    }

    public function destroy()
    {
        $tempImg = TemporaryImage::where('folder',\request()->getContent())->first();
        if ($tempImg) {
            \Storage::deleteDirectory('images/tmp/'.$tempImg->folder);
            $tempImg->delete();
        }
        return response()->noContent();
    }

    public function update(Request $request)
    {

    }
}
