@extends('layouts.default-layout')

@section('content')
  <div class="action">
    <form action="{{ route('cat.store')}}" method="post">
      @csrf
      @method('POST')

      <label for="name">Name</label>
      <input type="text" name="name" value="">

      <label for="race">Race</label>
      <input type="text" name="race" value="">

      <label for="cat_frid">CR</label>
      <input type="text" name="cat_frid" value="">

      <button type="submit" name="button">ADD</button>
    </form>
  </div>
@endsection
