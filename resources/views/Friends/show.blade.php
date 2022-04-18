@extends('layouts.app')

@section('title', 'Coba')

@section('content')
<civ class="card">
<div class="card-body">
    <h3>Nama Teman : {{ $friend['Nama']}}</h3>
    <h3>No HP Teman: {{ $friend['No_HP']}}</h3>
    <h3>Alamat Teman : {{ $friend['Alamat']}}</h3>
    </div>
</div>
@endsection