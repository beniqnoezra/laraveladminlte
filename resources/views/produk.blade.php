@extends('templates.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h1 class="card-title mt-2"><b>Data Produk <i class="bi bi-emoji-heart-eyes"></i></b></h1>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
          <i class="bi bi-plus-circle mr-2"></i>Tambah
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card-body">
                  <input type="hidden">
                  <div class="form-group">
                      <label for="namaProduk">Nama Produk</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="namaProduk">Harga</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="namaProduk">Jumlah</label>
                      <input type="text" class="form-control">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Produk</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($getProduk as $item)
                
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->produk}}</td>
              <td>{{$item->harga}}</td>
              <td>{{$item->jumlah}}</td>
              <td>
                <a href="{{route('produkDelete', $item->id)}}"><button type="button" class="btn btn-danger btn-sm"  onclick="return confirm('Apakah anda yakin?');"><i class="bi bi-trash-fill mr-2"></i>Hapus</button></a>
            </td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection