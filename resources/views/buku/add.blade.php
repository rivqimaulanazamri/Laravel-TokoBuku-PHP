@extends('layouts.app')

@section('content')

<div class="container">

	<h3>Tambah Data Buku</h3> 
		<form method="post" action="{{ url('/buku') }}">
		@csrf 
			<table>
			<tr>
				<td>KODE</td>
				<td><input type="text" name="kode_buku"></td> 
			</tr>
			<tr> 
				<td>NAMA BUKU</td>
				<td><input type="text" name="nama_buku"></td>
			</tr>
			<tr> 
				<td>PENGARANG</td>
				<td><input type="text" name="pengarang"></td>
			</tr>
			<tr> 
				<td>HARGA</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
			</table>
	</form>
</div>

@endsection