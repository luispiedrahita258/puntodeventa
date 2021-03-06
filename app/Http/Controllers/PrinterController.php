<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Business\UpdateRequest;
use App\Printer;

class PrinterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:printers.index')->only(['index']);
        $this->middleware('can:printers.edit')->only(['update']);
    }

       public function index(){
        $printer = Printer::where('id',1)->firstOrfail();
        return view('admin.printer.index', compact('printer'));
    }
    public function Update( UpdateRequest  $request, Printer $printer)
    {
        $printer->update($request->all());
        return redirect()->route('printers.index');
    }
}
