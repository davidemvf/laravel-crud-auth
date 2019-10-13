@extends('layouts.default-layout')

@section('content')
  <div class="action">
    <form action="{{ route('cat.update', $cat -> id) }}" method="post">
      @csrf
      @method('POST')

      <label for="name">Edit Name</label>
      <input type="text" name="name" value="{{ $cat -> name}}">
      <label for="race">Edit Race</label>
      <input type="text" name="race" value="{{ $cat -> race}}">
      <label for="cat_frid">Edit CR</label>
      <input type="text" name="cat_frid" value="{{ $cat -> cat_frid}}">
      
      <button type="submit" name="button">Edit</button>
    </form>
  </div>
@endsection
