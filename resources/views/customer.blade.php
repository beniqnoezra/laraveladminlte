@extends('templates.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h1 class="card-title mt-2"><b>Data Customers <i class="bi bi-emoji-heart-eyes"></i></b></h1>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
          <i class="bi bi-plus-circle mr-2"></i>Add
        </button>
        
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Email</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($getcustomer as $item)
                
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->address}}</td>
              <td>{{$item->phone}}</td>
              <td>
                <a href="{{route('customerDelete', $item->id)}}"><button type="button" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?');"><i class="bi bi-trash-fill mr-2"></i>Delete</button></a>
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