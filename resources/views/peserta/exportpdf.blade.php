@extends('layout')
@section('content')
<table class="table table-bordered">
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
    {{$i=0}}

    @foreach ($pesertas as $peserta)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $peserta->nama }}</td>
        <td>{{ $peserta->nik }}</td>
        <td>{{ $peserta->email}}</td>
        <td>{{ $peserta->no_hp }}</td>
        <td>{{ $peserta->alamat }}</td>
        <td>{{ $peserta->asal_kampus }}</td>
        <td>{{ $peserta->jurusan }}</td>
        <td>{{ $peserta->id_divisi }}</td>
        <td>{{ $peserta->alasan_ditolak }}</td>
        <td>{{ $peserta->status }}</td>
        <!-- <td>{{ $peserta->khs }}</td>
 <td>{{ $peserta->foto }}</td>zzzzzzzz  
 <td>{{ $peserta->surat_pengantar }}</td> -->
        <td><img src="/image/{{ $peserta->khs }}" width="100px"></td>
        <td><img src="/image/{{ $peserta->foto }}" width="100px"></td>
        <td><img src="/image/{{ $peserta->surat_pengantar }}" width="100px"></td>
        <td>
            <form action="{{ route('pesertas.destroy',$peserta->id) }}" method="POST">

                <a class="btn btn-info" href="{{
route('pesertas.show',$peserta->id) }}">Show</a>

                <a class="btn btn-primary" href="{{
route('pesertas.edit',$peserta->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btndanger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
