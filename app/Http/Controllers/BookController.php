<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BookController extends Controller
{
    /**
     * Menampilkan daftar buku
     */
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Menampilkan form tambah buku
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Menyimpan data buku baru
     */
    public function store(Request $request)
    {
        // Contoh debugging dengan dd()
        // dd($request->all());

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string'
        ]);

        Book::create($validated);
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Generate laporan PDF
     */
    public function generatePDF()
    {
        $books = Book::all();
        $pdf = PDF::loadView('books.report', compact('books'));
        return $pdf->download('laporan-buku.pdf');
    }
}
