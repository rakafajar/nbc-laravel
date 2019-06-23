@extends('master')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Nilai</li>
</ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
        <div class="card-header">
            <a href="{{ route('nilai.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-user-plus"></i> Tambah
            </a>
        </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th width="10">No</th>
                    <th width="100">Kode Atribut</th>
                    <th width="100">Nama Nilai</th>
                    <th width="20">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    @foreach($atribut_nilai as $list)
                    <?php $no++ ; ?>
                    <tr>
                    <td>{{ $no}} </td>
                    <td>{{ $list->kode_atribut}}</td>
                    <td>{{ $list->nama_nilai}}</td>
                    <th style="text-align: center;">
                        <a href="" class="btn btn-info btn-sm"><i class="fas fa-search"></i></a>
                        <a href="{!! route('nilai.edit', [$list->id_nilai]) !!}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ URL::to('nilai/destroy/'.$list->id_nilai)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </th>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
@endsection
