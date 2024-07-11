@extends('layouts.app')
@section('content')
<div class="container"> 
<h3>Lihat Data Buku</h3>
	@csrf
		<table>
			<tr>
				<td>KODE</td><td>{{ $row->kode_buku }}</td>
			</tr>
			<tr>
				<td>NAMA BUKU</td><td>{{ $row->nama_buku }}</td>
			</tr>
			<tr>
				<td>PENGARANG</td><td>{{ $row->pengarang }}</td>
			</tr>
			<tr>
				<td>HARGA</td><td>{{ $row->harga }}</td>
			</tr>
		</table>
</div>
@endsection