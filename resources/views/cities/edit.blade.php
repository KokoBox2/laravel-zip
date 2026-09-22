<form action="{{ route('cities.update', [
    'county' => $city->county_id,
    'city' => $city->id
]) }}" method="POST">
    @csrf
    @method('PATCH')
    <h1>Város módosítása</h1>
    <label for="name">Város neve</label>
    <input type="text" name="name" id="name"
           value="{{ old('name', $city->name) }}" required>

    <label for="zip_code">IRÁNYÍTÓSZÁM</label>
    <input type="text" name="zip_code" id="zip_code"
           value="{{ old('zip_code', $city->zip_code) }}" required>

    <label for="county_id">Megye</label>
    <select name="county_id" id="county_id" required>
        <option value="">Válasszon megyét!</option>

        @foreach($counties as $county)
            <option value="{{ $county->id }}"
                {{ old('county_id', $city->county_id) == $county->id ? 'selected' : '' }}>
                {{ $county->name }}
            </option>
        @endforeach
    </select>

    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror

    @error('zip_code')
        <div class="error">{{ $message }}</div>
    @enderror

    @error('county_id')
        <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit">Mentés</button>

    <a href="{{ route('cities.index', ['county' => $city->county_id]) }}">
        Mégse
    </a>
</form>