@extends('divisis.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Divisi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('divisis.index') 
}}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Divisi:</strong>
            {{ $divisi->nama_divisi }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Penanggung Jawab:</strong>
            {{ $divisi->nama_penanggung_jawab }}
        </div>
    </div>
</div>
@endsection