@extends('layouts.app')

@section('title', 'Friends')

@section('content')

@foreach ($friends as $friend)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$friend['Nama']}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$friend['No_Hp']}}</h6>
    <p class="card-text">{{$friend['Alamat']}}</p>

    <a href="#" class="card-link btn-warning">Edit</a>
    <a href="#" class="card-link btn-danger">Delet</a>
  </div>
</div>
    
@endforeach
<div>
    {{ $friends->links() }}
</div>
    @endsection