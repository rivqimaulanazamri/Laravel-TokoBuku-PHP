@extends('layouts.app')

 @section('content')

 <div class="container">

 <h3>Daftar Buku</h3>
 

 <table>
                <tr>
                <td>KODE</td>
                <td>NAMA BUKU</td>
                <td>PENGARANG</td>
                <td>HARGA</td>
                <td><a href="{{ url('buku/create') }}">Tambah Data</a></td>
 </tr>
 <tr>
		<td>
		<form class="form" method="get" action="{{ route('search') }}">
		    <div class="form-group w-100 mb-3">
		        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
		        <button type="submit" class="btn btn-primary mb-1">Cari</button>
		    </div>
		</form>
		</td>		
	</tr>
@foreach($rows as $row)

	<tr>
		<td>{{ $row->kode_buku }}</td>
		<td>{{ $row->nama_buku }}</td>
		<td>{{ $row->pengarang }}</td>
		<td>{{ $row->harga }}</td>
		<td><a href="{{ url('buku/' . $row->no_buku . '/edit') }}">Edit</a></td>
		<td><a href="{{ url('buku/' . $row->no_buku . '/lihat') }}">Lihat</a></td>
		<td>
			<form action="{{ url('buku/' . $row->no_buku) }}" method="POST">
			<input name="_method" type="hidden" value="DELETE">
			@csrf
			<button>Hapus</button>
			</form>			
		</td>
	</tr>
	@endforeach