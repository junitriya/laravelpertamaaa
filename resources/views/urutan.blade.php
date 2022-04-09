@extends('layouts.app')

@section('title', 'urutan')



@foreach ($number as $number)
    <h1>urutan ke - {{ $ke }} </h1>
    <h3>nomor ke - {{ $nomor }}</h3>
@endforeach 

@endsection