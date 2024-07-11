@extends('layouts.app')   

@section('content') 
<div class="container"> 
    <h3>Edit Data Buku</h3> 
    <form action="{{ url('/buku/' . $row->no_buku) }}" method="POST"> 
        <input name="_method" type="hidden" value="PATCH"> 
        @csrf 
        <table> 
            <tr> 
                <td>KODE</td> 
                <td><input type="text" name="kode_buku" value="{{ $row->kode_buku }}"></td> 
            </tr> 
            <tr> 
                <td>NAMA BUKU</td> 
                <td><input type="text" name="nama_buku" value="{{ $row->nama_buku }}"></td> 
             </tr> 
            <tr> 
            <td>PENGARANG</td> 
            <td><input type="text" name="pengarang" value="{{ $row->pengarang }}"></td> 
            </tr> 
            <tr> 
            <td>HARGA</td> 
            <td><input type="text" name="harga" value="{{ $row->harga }}"></td> 
            </tr> 
            <tr> 
            <td></td> 
            <td><input type="submit" value="UPDATE"></td> 
            </tr> 
        </table> 
        </form> 
 </div> 
@endsection