@extends('layout')
@section('content')
<div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="text-center">
 <h2>Form Pendaftaran Mahasiswa Magang </h2>
 </div>
 <div class="pull-right">
 <!-- <a class="btn btn-primary" href="{{ route('pesertas.index') }}"> Back</a> -->
 </div>
 </div>
</div>
 
@if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your 
input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif
 
<form action="{{ route('pesertas.store') }}" method="POST" enctype="multipart/form-data">
 @csrf
 
 <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Nama :</strong>
            <input type="text" name="nama" class="form-control"
            placeholder="Nama">
        </div>
    </div>
    
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Nik :</strong>
            <input type="text" name="nik" class="form-control"
            placeholder="Nik">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Email :</strong>
            <input type="text" name="email" class="form-control"
            placeholder="Email">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Nohp :</strong>
            <input type="text" name="no_hp" class="form-control"
            placeholder="Nohp">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Alamat :</strong>
            <input type="text" name="alamat" class="form-control"
            placeholder="Alamat">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Asal Kampus :</strong>
            <input type="text" name="asal_kampus" class="form-control"
            placeholder="Asal Kampus">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Jurusan :</strong>
            <input type="text" name="jurusan" class="form-control"
            placeholder="Jurusan">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Id Divisi :</strong>
            <input type="text" name="id_divisi" class="form-control"
            placeholder="Id Divisi">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Alasan Ditolak :</strong>
            <input type="text" name="alasan_ditolak" class="form-control"
            placeholder="Alasan Ditolak ">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Status:</strong>
            <input type="text" name="status" class="form-control"
            placeholder="Status">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>KHS :</strong>
            <input type="file" name="khs" class="form-control"
            placeholder="KHS">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Foto :</strong>
            <input type="file" name="foto" class="form-control"
            placeholder="Foto">
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
        <strong>Surat Pengantar :</strong>
            <input type="file" name="surat_pengantar" class="form-control"
            placeholder="Surat Pengantar">
        </div>
    </div>
 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btnprimary">Submit</button>
 </div>
 </div>
 
</form>
@endsection
