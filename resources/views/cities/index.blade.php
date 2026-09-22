@extends('layouts.app')
@section('content')

  <h1>Városok ({{$county->name}})</h1>
<a href="{{ route('cities.create', ['county' => $county->id]) }}">Új város</a>
  @foreach($cities as $city)
    <p>{{$city->name}} ({{$city->zip_code}})</p>
    <p><a href="{{ route('cities.edit', [
    'county' => $city->county_id,
    'city' => $city->id
])}}">Szerkesztés</a></p>
    <form action="{{ route('cities.destroy', [
    'county' => $city->county_id,
    'city' => $city->id
]) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit">Törlés</button>
    </form>
  @endforeach

@endsection