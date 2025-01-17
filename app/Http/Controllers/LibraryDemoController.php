<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class LibraryDemoController extends Controller
{
    public function index()
    {
        return view('library-demo.index');
    }


    /**
     * Export file PDF dengan judul dan nama file yang diberikan.
     *
     * @param string $title Judul dari file PDF yang akan di-download.
     * @param string $filename Nama file PDF yang akan di-download.
     * @return \Illuminate\Http\Response Objek response dari file PDF yang akan di-download.
     */
    public function exportPDF($title, $filename)
    {
        /*
         * Data yang akan dikirim ke view
         * Kita akan mengirimkan judul dan tanggal hari ini
         * tanggal hari ini kita ambil dengan fungsi date()
         */
        $data = [
            'title' => $title,
            'date' => date('d/m/Y')
        ];

        // Kode untuk me-load view 'library-demo.pdf' dan juga mengirimkan data ke view tersebut
        $pdf = PDF::loadView('library-demo.pdf', $data);

        # Kode untuk men-download file PDF
        return $pdf->download($filename);
    }
}
