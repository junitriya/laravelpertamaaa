@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<form action ="/groups" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmaill" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmaill" name="name" aria-describedby="emailhelp" value="{{ old('nama') }}">
        @error('name')
        <div class="alert alert-danger">{{ $massage }}</div>
        @enderror
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="{{ old('alamat') }}">
        @error('description')
        <div class="alert alert-denger">{{ $massage }}</div>
        @enderror
</div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection