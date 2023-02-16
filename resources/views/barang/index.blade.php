@extends('templet.master')

@section('content')
<section class="content">
<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title text-white">Berikut barang yang akan di lelang dalam waktu dekat</h3>
    </div>
    <div class="card-header">
    <div class="card-body">
    <table class="table table-striped" style="width: 100%" id="table1">
<thead>
          <tr>
            <th>no</th>
            <th>nama_barang</th>
            <th>tanggal</th>
            <th>harga awal</th>
            <th>image</th>
            <th>deskripsi</th>
            <th>actions</th>
          </tr>
        </thead>
    <tbody>
         @foreach ($barangs as $barang)
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $barang->nama_barang}}</td>
            <td>{{ $barang->tanggal}}</td>
            <td>{{ $barang->harga_awal}}</td>
            <td>{{ $barang->image}}</td>
            <td>{{ $barang->deskripsi}}</td>
            <td> 
            <form action="/barang/{{$barang->id}}" method="POST">
              <a class="btn btn-info mr-3" href="barang/{{$barang->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="barang/{{$barang->id}}/edit/">Edit</a>
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Delete">
             </input>
            </form>
            </td>
          </tr>
          @endforeach
</tbody>
</table>
</div>
</section>
@endsection





