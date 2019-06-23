@extends('master')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Atribut</li>
</ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
        <div class="card-header">
            <a href="{{ route('atribut.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-user-plus"></i> Tambah
            </a>
        </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th width="10">No</th>
                    <th width="50">Kode Atribut</th>
                    <th width="50">Nama Atribut</th>
                    <th width="20">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    @foreach($atribut as $list)
                    <?php $no++ ; ?>
                    <tr>
                    <td>{{ $no}} </td>
                    <td>{{ $list->kode_atribut }}</td>
                    <td>{{ $list->nama_atribut}}</td>
                    <th style="text-align: center;">
                        <a href="" class="btn btn-info btn-sm"><i class="fas fa-search"></i></a>
                        <a href="{!! route('atribut.edit', [$list->id_atribut]) !!}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ URL::to('atribut/destroy/'.$list->id_atribut)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </th>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
@endsection
