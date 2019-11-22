@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-6">
			<h1>Data Siswa</h1>
		</div>
		<div class="col-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
			  Tambah User
			</button>
		</div>
		
		<table class="table">
			<tr>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Jenis Kelamin</th>
				<th>jurusan</th>
				<th>Alamat</th>
			</tr>
			@foreach($data_siswa as $siswa) 
			<tr>
				<td>{{$siswa->nama_depan}}</td>
				<td>{{$siswa->nama_belakang}}</td>
				<td>{{$siswa->jenis_kelamin}}</td>
				<td>{{$siswa->jurusan}}</td>
				<td>{{$siswa->alamat}}</td>
			</tr>
			@endforeach
		</table>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
@endsection
		