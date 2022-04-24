@extends('divisis.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('divisis.index') 
}}"> Back</a>
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

<form action="{{ route('divisis.update',$divisi->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Divisi:</strong>
                <input type="text" name="id_divisi" value="{{ $divisi->name 
}}" class="form-control" placeholder="Id Divisi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Divisi:</strong>
                <input type="text" name="nama_divisi" value="{{ $divisi->name 
}}" class="form-control" placeholder="Nama Divisi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penanggung jawab:</strong>
                <input type="text" name="nama_penanggung_jawab" value="{{ $divisi->name 
}}" class="form-control" placeholder="Nama Penanggung Jawab">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection