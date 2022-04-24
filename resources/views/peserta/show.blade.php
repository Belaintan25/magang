@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Peserta</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pesertas.index') 
}}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {{ $peserta->nama }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nik:</strong>
            {{ $peserta->nik }}
        </div>
    </div>     
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $peserta->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>No Handphone:</strong>
            {{ $peserta->no_hp }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat:</strong>
            {{ $peserta->alamat }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Asal Kampus</strong>
            {{ $peserta->asal_kampus }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jurusan:</strong>
            {{ $peserta->jurusan }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Divisi:</strong>
            {{ $peserta->id_divisi }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alasan Ditolak:</strong>
            {{ $peserta->alasan_ditolak }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            {{ $peserta->status }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>KHS:</strong>
            {{ $peserta->khs }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Foto:</strong>
            {{ $peserta->foto }}
        </div>
    </div>      
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Surat Pengantar:</strong>
            {{ $peserta->surat_pengantar }}
        </div>
    </div>                                                                                                                                                                                                                                                                                                           

</div>
</div>
@endsection