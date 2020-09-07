<style>
      a:link {
        color: red;
        text-decoration: none;
    }
    a:visited {
        color: gray;
        text-decoration: none;
    }
    a:active {
        text-decoration: none
    }
    a:hover {
        color: blue;
        background-color: rgb(5, 139, 77);
        text-decoration: underline;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-dark navigation-bar-style" style="height: 85px">
  <div class="navbar-brand back-logo" style="height: 74px">
    <img class="img-fluid img-height" style="height: 37px; width: 120px; margin: 13px;" src="{{ asset('storage/logo/logoBeba.png')}}" alt="">
  </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
      @auth
        <li class="nav-item active">
          <a class="nav-link navigation-font" href=" {{ route('home') }} ">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link navigation-font" href="{{ route('balance.index') }}">Balance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navigation-font" href=" {{ url('/Recargar') }} ">Recargar</a>
        </li>
      @endauth
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
      @auth
        <div class="credits-font">
          <div>
            <img class="ico-exchange" src="{{ asset('storage/logo/MxBg.jpg')}}" alt="">
          </div>
          <div class="text-exchange">
            <span style="float: right;">{{ Auth::user()->total_credits }} $</span>
          </div>
        </div>
      @endauth
      <!-- Authentication Links -->
      @guest
        <li class="nav-item">
          <a class="nav-link navigation-font" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link navigation-font" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        @endif
        @else
          <li class="nav-item dropdown col-3">

            <a id="navbarDropdown" class="nav-link dropdown-toggle navigation-font" href="#" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}

               <span class="caret"></span>

            </a>

            <div class=" dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #e99220; border: double">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                {{ __('cerrar sesion') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
      @endguest
    </ul>
  </div>
</nav>
