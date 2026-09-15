@extends('layouts.app')

@section('content')

  <h1>Vármegyék</h1>

  @foreach($counties as $county)
{{$county->name}}<form action="{{ route('counties.destroy', $county->id) }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit">Törlés</button>
</form>
  @endforeach
  <a href="{{ route('counties.create') }}">Új megye</a>

@endsection