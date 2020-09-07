@extends('layouts.main')

@section('extra-header')

<style>
    .menu{
        margin-top: 50px;
        /* margin-left: 75px; */
        /* margin-right: 55px; */
        /* background-color: azure; */
        /* height: 200px; */
        /* width: 160px; */
        -webkit-writing-mode: vertical-rl;
     }
    .header-container{
        position:fixed;
        z-index:1;
        left:414px;
        width:160px;
        height:200px;
        margin-top: -50px;
        margin-left: 1030px;
        -webkit-writing-mode: vertical-rl;
    }
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
        background-color: rgb(8, 116, 65);
        text-decoration: underline;
    }
</style>
{{-- navegación derecha--}}
<div class="row col-4" style="justify-content: space-between">
    <div class="col-sm-6 header-container" style=" padding: 0; float: right;">
        <nav class="menu navbar navbar-expand-lg navbar-linght bg-dark navigation-bar-style" style="height: 50px; width: 331px; border-width: 15px">
            <div class="navbar-brand " style="height: 45px; width: 115px; background-color: white">
                <img class="img-fluid img-height" style="height: 25px; width: 110px; " src="{{ asset('storage/logo/logoBeba.png')}}" alt="">
            </div>
            <!-- Left Side Of Navbar -->
            <div class="  col-sm-6" style="margin-right: 85px">
                <ul class="navbar-nav mr-auto">
                    @auth
                        <li class=" nav-item active" style="-webkit-transform: rotate(270deg); margin-top: -5px;"  >
                            <a class="nav-link navigation-font" style="height: 80px; text-decoration-line: underline;" href=" {{ route('home') }} ">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="-webkit-transform: rotate(270deg); margin-top: -25px; text-decoration-line: overline">
                            <a class="nav-link navigation-font" href="{{ route('balance.index') }}">Balance</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>

    {{-- navegación izquierda --}}
    <div class="col-sm-7 header-container" style=" padding: 0; float: left; margin-left: -255px">
        <nav class="menu navbar navbar-expand-lg navbar-linght bg-dark navigation-bar-style" style="height: 50px; width: 330px; border-width: 15px; margin-right: -8px">
            <div class="navbar-brand " style="height: 45px; width: 115px; background-color: white">
                <img class="img-fluid img-height" style="height: 25px; width: 110px; " src="{{ asset('storage/logo/logoBeba.png')}}" alt="">
            </div>
            <!-- Left Side Of Navbar -->
            <div class="  col-sm-6" style="margin-right: 85px;">
                <ul class="navbar-nav mr-auto">
                    @auth
                        <li class="nav-item active" style="-webkit-transform: rotate(270deg); margin-top: -5px" >
                            <a class="nav-link navigation-font" style="height: 80px; text-decoration-line: underline;" href=" {{ route('home') }} ">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="-webkit-transform: rotate(270deg); margin-top: -25px; text-decoration-line: overline">
                            <a class="nav-link navigation-font" href="{{ route('balance.index') }}">Balance</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</div>
@endsection

@yield('common', View::make('Games.Roulette.layouts.header'))
@section('body-config')
ondragstart="return false;" ondrop="return false;" style="width:100%; position: fixed;"
@endsection

@section('content')

<div style="">
    <div style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%"></div>
<!-- Functions -->
@yield('functions', View::make('Games.Roulette.layouts.functions'))
<div class="check-fonts">
    <p class="check-font-1">test 1</p>
</div>

<div>
    <canvas id="canvas" class='ani_hack' width="750" height="600"> </canvas>
</div>


<div data-orientation="landscape" class="orientation-msg-container">
    <p class="orientation-msg-text">Please rotate your device</p>
</div>
<div id="block_game"
    style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%; display:none">
</div>
</div>


@endsection

