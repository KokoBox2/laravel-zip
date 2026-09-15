@extends('layouts.app')

@section('content')

  <h1>Vármegyék</h1>

  @foreach($counties as $county)
      <p>{{ $county->name }}</p>
  @endforeach
  <a href="{{ route('counties.create') }}">Új megye</a>

@endsection