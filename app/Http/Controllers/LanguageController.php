<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {

        $lang = $request['locale'];
        \App::setLocale($lang);
        \Session::put("locale",$lang);
        return redirect()->back();
    }
}
