<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    
    public function show(Request $rq)
    {
        $txt_name = $rq->input('name');
        $txt_hidden = $rq->input('hidden');
        $txt_radio = $rq->input('radio');
        
        // echo "ชื่อ $txt_name";
        // echo "<br>";
        // echo "เลขอะไรดี $txt_hidden";
        // echo "<br>";
        // echo "ตอบมา $txt_radio";
        // echo "<br>";


        $array = [
            "NAME" =>$txt_name,
            "ID" =>$txt_hidden,
            "GEN" =>$txt_radio
        ];

        return view('page.page1',$array);
    }
}