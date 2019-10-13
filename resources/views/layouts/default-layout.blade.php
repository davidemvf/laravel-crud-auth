<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('elem.head')
    </head>
    <body>
      <div class="container">

        <header>
          <h1>Cat World</h1>
          @guest

            <a  href="{{ route('login') }}">LOGIN</a>
            <a  href="{{ route('register') }}">REGISTER</a>

          @else
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                LOGOUT
            </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          @endguest
          <a href="{{ route('cat.create')}}">Add New Cat</a>
        </header>

        @yield('content')

        <footer>
          <h6>Powered by Davide</h6>
        </footer>

      </div>
    </body>
</html>
