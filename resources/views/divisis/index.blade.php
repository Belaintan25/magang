@extends('divisis.layout')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left">
 <h2>Laravel 8 CRUD Example from scratch -
ItSolutionStuff.com</h2>
 </div>
 <div class="pull-right">
 <a class="btn btn-success" href="{{ 
route('divisis.create') }}"> Create New Divisi</a>
 </div>
 </div>
 </div>
 
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 
 <table class="table table-bordered">
 <tr>
     
 <th>Nomor</th>
 <th>Nama Divisi</th>
 <th>Nama Penanggung Jawab</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($divisis as $divisi)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $divisi->nama_divisi }}</td>
 <td>{{ $divisi->nama_penanggung_jawab }}</td>
 <td>
 <form action="{{ route('divisis.destroy',$divisi->id) }}" 
method="POST">
 
 <a class="btn btn-info" href="{{ 
route('divisis.show',$divisi->id) }}">Show</a>
 
 <a class="btn btn-primary" href="{{ 
route('divisis.edit',$divisi->id) }}">Edit</a>
 
 @csrf
 @method('DELETE')
 
 <button type="submit" class="btn btn￾danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
 
 {!! $divisis->links() !!}
 
@endsection