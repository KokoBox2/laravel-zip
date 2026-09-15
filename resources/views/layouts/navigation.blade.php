<nav>
  <a href="{{ url('/') }}">Kezdőlap</a>
  <a href="{{ route('counties.index') }}">Vármegyék</a>
  
   {{-- <a href="{{ route('cities.index') }}">{{ __('navigation.cities') }}</a> --}}

  
  @auth
      <form action="{{ route('logout') }}" method="post">
          @csrf
          <button type="submit">{{ __('navigation.logout') }} ({{ auth()->user()->name }})</button>
      </form>
  @else
      {{-- <a href="{{ route('login') }}">{{ __('navigation.login') }}</a> --}}
  @endauth
</nav>