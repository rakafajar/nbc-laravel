@extends('master')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Atribut</li>
</ol>

<div class="card">
    <div class="card-header">Tambah Atribut</div>
    <div class="card-body">
        <div class="col-md-8">
        <form action="{{ route('atribut.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode_atribut">Kode Atribut:</label>
            <input type="text" class="form-control" id="kode_atribut" name="kode_atribut" required placeholder="Masuk Kode Atribut">
        </div>
        <div class="form-group">
            <label for="nama_atribut">Nama Atribut:</label>
            <input type="text" class="form-control" id="nama_atribut" name="nama_atribut" required placeholder="Masukan Nama Atribut">
        </div>
        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Simpan</button>
        <button type="reset" class="btn btn-warning btn-sm"><i class="fas fa-redo-alt"></i> Reset</button>
        <a href="{{ route('atribut.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
    </form>
    </div>    
</div>
</div>
<br>
@endsection
