@extends('layouts.app')

@section('content')

<style>
    #Titulo{
        position: relative;
        left:400px;
    }

    #Subtitulo{
        color:white;
    }
</style>
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="https://1000marcas.net/wp-content/uploads/2021/06/Crunch-Fitness-Logo.png" style="width:8rem;"  alt=""></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado Sesion Como usuario: Deberias intentar apartar una clase') }}
                </div>
            </div>
        </div>
    </div> -->
    <br>
    <br>
    <h1 id="Titulo"> <img id="diseño1" src="{{URL::asset('/img/Titulo.png')}}" width="500rem"  alt=""></h1>
    <h3 id="Subtitulo">Todas tus clases se guardaran aqui!!</h3>
    <br>
    <br>
    <table class="table table-dark table-striped">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tus Clases Son:</th>
    </tr>
</thead>
<tbody>
    <tr id="Tabla">
        <th scope="row">Mañana</th>
        <td><a >(aqui se tiene que apartar las clases)</a></td>
        
    </tr>
    <tr id="Tabla">
        <th scope="row">Tarde</th>
        <td><a >(aqui se tiene que apartar las clases)</a></td>
    </tr>
 
</tbody>
</table>
</div>
@endsection
