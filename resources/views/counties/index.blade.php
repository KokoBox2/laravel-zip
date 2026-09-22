@extends('layouts.app')

@section('content')

  <h1>Vármegyék</h1>

  @foreach($counties as $county)
<a href="{{ route('cities.index', ['county' => $county->id]) }}">{{$county->name}}</a>
<a href="{{ route('counties.edit', $county->id) }}">Szerkesztés</a>
<form action="{{ route('counties.destroy', $county->id) }}" method="POST">

  @csrf
  @method('DELETE')
  <button type="submit">Törlés</button>
</form>
  @endforeach
  <a href="{{ route('counties.create') }}">Új megye</a>

@endsection