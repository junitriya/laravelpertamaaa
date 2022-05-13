@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<a href="/friend/create" class="card-link btn-primary">Tambahkkan Teman</a>
@foreach ($friends as $friend)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/friends/{{$friend['id']}}" class="card-title">{{ $friend['Nama'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['No_Hp'] }}</h6>
    <p class="card-text">{{$friend['Alamat']}}</p>
    <a href="/friends/{{ $friend['id'] }}/edit" class="card-link btn-warning">Edit Teman</a>
    <form action="/friends/{{ $friend ['id']}}" method="POST">
      @csrf 
      @method ('DELETE')
    <buttton class="card-link btn-danger">Delete</a>
    </form>
  </div>
</div>
    
@endforeach

<div>
{{ $friends->links() }}
</div>
@endsection