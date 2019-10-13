@extends('layouts.default-layout')

@section('content')
  <div class="cat-box">
    <p>Name: {{ $cat -> name}}</p>
    <p>Race: {{$cat -> race}}</p>
    <p>CR: {{$cat -> cat_frid}}</p>
    <a href="{{ route('cat.edit') }}">EDIT</a>
  </div>
  <a href="{{ route('cat.index')}}">Back</a>
@endsection
