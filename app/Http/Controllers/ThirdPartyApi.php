<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThirdPartyApi
{
    /**
     * Забрать данные по API
     *
     * @param  Request $request
     * @return string
     */
    public function variator(Request $request)
    {
//        setlocale(LC_ALL, 'ru_RU.UTF-8'); mb_internal_encoding("UTF-8");
//        header('Content-type: text/html; charset=utf-8');
        $idt = floor($request->input('idt'));

        return readfile('http://s4.inkapi.net/textforsite/variator.php?idt='.$idt);
    }
}