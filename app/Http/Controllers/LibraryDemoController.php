<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Intervention\Image\Facades\Image;
use App\Exports\UsersExport;

class LibraryDemoController extends Controller
{
    public function index()
    {
        return view('library-demo.index');
    }

    public function exportPDF()
    {
        $data = [
            'title' => 'Contoh PDF',
            'date' => date('d/m/Y')
        ];

        $pdf = PDF::loadView('library-demo.pdf', $data);
        return $pdf->download('contoh.pdf');
    }
}
