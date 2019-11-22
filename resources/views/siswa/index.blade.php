@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Siswa</h3>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Nama Depan</th>
											<th>Nama Belakang</th>
											<th>Jenis Kelamin</th>
											<th>jurusan</th>
											<th>Alamat</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data_siswa as $siswa) 
										<tr>
											<td>{{$siswa->nama_depan}}</td>
											<td>{{$siswa->nama_belakang}}</td>
											<td>{{$siswa->jenis_kelamin}}</td>
											<td>{{$siswa->jurusan}}</td>
											<td>{{$siswa->alamat}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
