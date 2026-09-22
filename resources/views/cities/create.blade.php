<form action="{{ route('cities.store', ['county' => $county->id]) }}" method="POST">
    @csrf
    <h1>Város létrehozása ({{$county->name}})</h1>
    <label for="name">Város neve</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" required>

    <label for="zip_code">IRSZ</label>
    <input type="text" name="zip_code" id="zip_code" value="{{ old('zip_code') }}" required>

    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror

    @error('zip_code')
        <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit">Mentés</button>

    <a href="{{ route('cities.index', ['county' => $county->id]) }}">
        Mégse
    </a>
</form>