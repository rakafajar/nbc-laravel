@extends('master')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Nilai</li>
</ol>

<div class="card">
    <div class="card-header">Tambah Nilai</div>
    <div class="card-body">
        <div class="col-md-8">
        <form action="{{ route('nilai.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode_nilai">Kode Nilai:</label>
            <input type="text" class="form-control" id="kode_nilai" name="kode_nilai" required placeholder="Masuk Kode Nilai">
        </div>
        <div class="form-group">
            <label for="atribut">Nama Atribut:</label>
            <select class="form-control" name="atribut_id">
                <option>-- Pilih Atribut --</option>
                @foreach($atribut as $list)
                <option value="{{ $list->id_atribut }}">{{ $list->nama_atribut}}</option>
                @endforeach
                </select>
        </div>
        <div class="form-group">
            <label for="nama_nilai">Nama Nilai:</label>
            <input type="text" class="form-control" id="nama_nilai" name="nama_nilai" required placeholder="Masukan Nama Nilai">
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
