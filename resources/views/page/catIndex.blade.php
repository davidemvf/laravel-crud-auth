@extends('layouts.default-layout')

@section('content')
  <div class="box-content">
    @foreach ($cats as $cat)
      <div class="cat-box">
        <p>Name: {{ $cat -> name }}</p>
        <p>Race: {{ $cat -> race }}</p>
        <p>CR: {{ $cat -> cat_frid }}</p>
        <a href="{{ route('cat.show', $cat -> id) }}">SHOW</a>
        <a href="{{ route('cat.edit', $cat -> id) }}">EDIT</a>
        <a href="{{ route('cat.delete', $cat -> id) }}">DELETE</a>
      </div>
    @endforeach

  </div>
@endsection
