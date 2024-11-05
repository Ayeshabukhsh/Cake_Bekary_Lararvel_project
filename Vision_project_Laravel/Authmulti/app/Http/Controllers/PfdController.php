<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Exception;
use Illuminate\Http\Request;
use App\Models\Courieragent;


class PfdController extends Controller
{
    //
    public function index(){
    $courieragent = Courieragent ::all();
    return view('admin.shiping',compact('courieragent'));
}

public function export(){
    $courieragent =Courieragent::all();
$shiping = Pdf::loadView('admin.shiping',compact('courieragent'));
return $shiping->download('shiping.pdf');
}
}
