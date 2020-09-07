@extends('layouts.main')

@section('body-config')
ondragstart="return false;" ondrop="return false;" style="width:100%; background: none;"
@endsection

@section('content')

<div class="background-no-game" style="padding: 95px">

    <div class="row " style="margin: 0">
        <div class="col-lg-3 col-10" style="background-color: rgb(15, 170, 15); border-radius: 20px; min-width: 150px; margin: 40px; text-align: center">
          <div class="d-flex flex-row my-3 mx-3" style="color: white; align-items: center; font-size: large; ">
            <img src="{{ asset('storage/imgGames/Dices.png') }}" alt="Snow" style="width: 30px; height: auto">
            <span class="align-middle" style="margin-left: 10px;">Mi Balance</span>
          </div>
        </div>

        <div class="col-10"></div>
      </div>

    <div class="col " style="position: relative; margin: 15px; overflow: auto; border-radius: 82px; max-width: 100%;">
        <table class="table table-striped" style="border-radius: 25px 25px;   text-align: center">
            <thead>
                <tr style="background-color: rgb(15, 170, 15); ">
                    <th scope="col">#</th>
                    <th scope="col">Anterior</th>
                    <th scope="col">Después</th>
                    <th scope="col">Perdidos</th>
                    <th scope="col">Ganados</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($balances as $balance)
                    <tr>
                        <th scope="row"> {{ $balance->id }} </th>
                        <td> {{ $balance->before_credits }} </td>
                        <td> {{ $balance->after_credits }} </td>
                        <td> {{ $balance->lost_credits }} </td>
                        <td> {{ $balance->win_credits }} </td>
                        <td> {{ $balance->created_at }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="row " style="justify-content: center;">
            {{ $balances->links() }}
        </div>
    </div>

</div>

<script>

</script>

@endsection
