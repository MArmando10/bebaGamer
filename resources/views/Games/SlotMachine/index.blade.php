@extends('layouts.main')

@section('extra-header')
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
        background-color: rgb(194, 94, 0);
        text-decoration: underline;
    }
</style>

@endsection

@yield('common', View::make('Games.SlotMachine.layouts.header'))
@section('body-config')
ondragstart="return false;" ondrop="return false;" style="width:100%; position: fixed;"
@endsection

@section('content')

<div style="">
    <div style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%"></div>
<!-- Functions -->
    @yield('functions', View::make('Games.SlotMachine.layouts.functions'))
    <div class="check-fonts">
        <p class="check-font-1">test 1</p>
    </div>

    <div>
        <canvas id="canvas" class='ani_hack' width="1500" height="640"> </canvas>
    </div>

    <div data-orientation="landscape" class="orientation-msg-container">
        <p class="orientation-msg-text">Please rotate your device</p>
    </div>

    <div id="block_game"
        style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%; display:none">
    </div>


{{-- navegación izquierda--}}

<div class="row-2" style="justify-content: space-between">
    <div class="col-sm-3"><h1 style="color: white; margin-top: 500px"></h1>
        <nav class=" navbar-expand-lg">
            <div class="navbar-brand " style="height: 53px; width: 200px; background-color: chocolate; text-align: center">
                <img class="img-fluid img-height" style="height: 30px; width: 130px; margin: 5px" src="{{ asset('storage/logo/logoBeba.png')}}" alt="">
            </div>
            <!-- Left Side Of Navbar -->
            <div class="  col-sm-6" style="justify-content: space-evenly; ">
                <ul class="navbar-nav mr-auto">
                    @auth
                        <li class="nav-item active" style="-webkit-transform: rotate(360deg);" >
                            <a class="nav-link navigation-font" style="height: 80px; text-transform: uppercase" href=" {{ route('home') }} ">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="-webkit-transform: rotate(360deg); text-transform: uppercase">
                            <a class="nav-link navigation-font" href="{{ route('balance.index') }}">Balance</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>

    {{-- navegación derecha --}}
    <div class="col-sm-3" style="float: right; margin-top: -141px; width: 230px;"><h1 style="color: white; margin-top: 0px"></h1>
        <nav class=" navbar-expand-lg">
            <div class="navbar-brand " style="height: 53px; width: 200px; background-color: chocolate; text-align: center">
                <img class="img-fluid img-height" style="height: 30px; width: 130px; margin: 5px" src="{{ asset('storage/logo/logoBeba.png')}}" alt="">
            </div>
            <!-- Left Side Of Navbar -->
            <div class="  col-sm-6" style="justify-content: space-evenly; ">
                <ul class="navbar-nav mr-auto">
                    @auth
                        <li class="nav-item active" style="-webkit-transform: rotate(360deg);" >
                            <a class="nav-link navigation-font" style="height: 80px; text-transform: uppercase" href=" {{ route('home') }} ">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="-webkit-transform: rotate(360deg); text-transform: uppercase">
                            <a class="nav-link navigation-font" href="{{ route('balance.index') }}">Balance</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</div>
</div>

@endsection
