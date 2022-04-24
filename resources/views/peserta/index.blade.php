@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Data Peserta</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{
route('pesertas.create') }}"> Create New Peserta</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered data-table">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Asal Kampus</th>
        <th>Jurusan</th>
        <th>Id Divisi</th>
        <th>Alasan Ditolak</th>
        <th>Status</th>
        <th>KHS</th>
        <th>Foto</th>
        <th>Surat Pengantar</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<script type="text/javascript">
    $(function() {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('pesertas.index') }}",
            columnDefs: [{
                "targets": 12,
                "data": 'foto',
                "render": function(data, type, row, meta) {
                    return '<img src="' + '<?php echo url('/'); ?>/image/'+data + '" alt="' + data + '"height="200" width="200"/>';
                }
            },
            {
                "targets": 11,
                "data": 'khs',
                "render": function(data, type, row, meta) {
                    return '<a target="blank" href="' + '<?php echo url('/'); ?>/image/'+data + '" > Download </a>';
                }
            },
            {
                "targets": 13,
                "data": 'surat_pengantar',
                "render": function(data, type, row, meta) {
                    return '<a target="blank" href="' + '<?php echo url('/'); ?>/image/'+data + '" > Download </a>';
                }
            }],
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'nik',
                    name: 'nik'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'no_hp',
                    name: 'no_hp'
                },
                {
                    data: 'alamat',
                    name: 'alamat'
                },
                {
                    data: 'asal_kampus',
                    name: 'asal_kampus'
                },
                {
                    data: 'jurusan',
                    name: 'jurusan'
                },
                {
                    data: 'id_divisi',
                    name: 'id_divisi'
                },
                {
                    data: 'alasan_ditolak',
                    name: 'alasan_ditolak'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'khs',
                    name: 'khs'
                },
                {
                    data: 'foto',
                    name: 'foto'
                },
                {
                    data: 'surat_pengantar',
                    name: 'surat_pengantar'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });
</script>
@endsection