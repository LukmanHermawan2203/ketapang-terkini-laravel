@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Banner</h1>
  </div>

  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif


  <div class="row">
    <div class="card-body col-md-6">
      <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" placeholder="Judul Banner" value="{{ old('judul') }}">
      </div>
      <div class="form-group">
        <label for="sub_judul">Sub Judul</label>
        <input type="text" class="form-control" name="sub_judul" placeholder="Sub Judul Banner" value="{{ old('sub_judul') }}">
      </div>

      <div class="input-images-all mb-4">
        <div class="input-field">
            <label class="active">Gambar Banner</label>
            <div class="input-images-1" style="padding-top: .5rem;"></div>
        </div>
      </div>
    <div class="row align-items-center justify-content-center mt-4">
      <div class="col-sm-3">
        <a href="{{ url('admin/banner') }}" class="btn btn-secondary">Kembali</a>
      </div>
      <div class="col-sm-3">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </div>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection