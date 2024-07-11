<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    
    public function index()
     {
       $rows = Buku::all();
         return view('buku.index', compact('rows'));
        }

     public function create()
     {
        return view('buku.add');
     }
     public function store(Request $request)
    {
        $request->validate([
        'kode_buku' => 'bail|required|unique:tb_buku',
        'nama_buku' => 'required'
        ],
        [
        'kode_buku.required' => 'KODE wajib diisi',
        'kode_buku.unique' => 'Nama Tahun sudah ada',
        'nama_buku.required' => 'Nama wajib diisi'
        ]);

        Buku::create([
        'kode_buku' => $request->kode_buku,
        'nama_buku' => $request->nama_buku,
        'pengarang' => $request->pengarang,
        'harga' => $request->harga
        ]);

        return redirect('buku');
    }
    public function edit($id) 
      { 
        $row = Buku::findOrFail($id);  
        return view('buku.edit', compact('row')); 
        } 
    public function update(Request $request, $id) 
        { 
        $request->validate([ 
        'kode_buku' => 'bail|required|unique:tb_buku',
        'nama_buku' => 'required'
        ],
        [
        'kode_buku.required' => 'KODE wajib diisi',
        'kode_buku.unique' => 'Nama Tahun sudah ada',
        'nama_buku.required' => 'Nama wajib diisi'
        ]);  
        $row = Buku::findOrFail($id); 
        $row->update([ 
        'kode_buku' => $request->kode_buku,
        'nama_buku' => $request->nama_buku,
        'pengarang' => $request->pengarang,
        'harga' => $request->harga]); 
        return redirect('buku');
        } 
        public function destroy($id) 
        { 
        $row = Buku::findOrFail($id); 
        $row->delete(); 
        return redirect('buku'); 
        }
        public function search(Request $request)
        {
          $keyword = $request->search;
          $rows = Buku::where('nama_buku', 'like', "%" . $keyword . "%")->paginate();
          return view('Buku.index', compact('rows'));
        }
        public function lihat($id)
        {
            $row = Buku::findOrFail($id);
            return view('buku.lihat', compact('row'));
        }
    }