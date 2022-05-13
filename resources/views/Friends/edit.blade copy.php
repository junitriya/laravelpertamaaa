@extends('layouts.app')

@section('title', 'Friends')

      @section('content')

  <form action="/friends/{{ ['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ? old('nama') : $friend['nama'] }}">
  @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="no_hp" class="form-label">Nomor Telepon</label>
    <input type="text" class="form-control" name="no_hp" value="{{old('no_hp')  ? old('no_hp') : $friend['no_hp'] }}">
    @error('no_hp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" value="{{old('alamat')  ? old('alamat') : $friend['alamat'] }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-info">Submit</button>
</form>

    

   
@endsection