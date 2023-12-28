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

    public function switchGet()
    {
        $current = \Session::get('locale') ?? null;
        if ($current) {
            if ($current == 'ru')
                \App::setLocale('kz');
            else
                \App::setLocale('ru');
        }
    }
}
