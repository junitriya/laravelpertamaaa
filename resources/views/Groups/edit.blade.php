@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<form action ="/groups/{{ $group['id'] }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>