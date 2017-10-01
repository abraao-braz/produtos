@extends('layouts/app')

@section('content')

    @guest

        <div class="container">

            <h2>Você não tem permissão para visualizar esta pagina!</h2>
            <p class="small">Realize o login.</p>

        </div>

    @else
    <div class="row">
        <div class="container">

             <div class="jumbotron"><h2>Lista de Categorias</h2></div>


                <div class="col-lg-12">
                <a class="btn btn-danger" href="{{ route('categoria.cadastro') }}">Cadastrar Nova Categoria</a>
                
                </div>

                <div class="col-lg-12">
                    <h1>Lista de Categorias</h1>
                    <table class="table table-stripped table-bordered" style="margin-top: 20px;">

                        <thead>

                            <tr>

                                <th>ID</th>
                                <th>Nome</th>
                                <th>Controles</th>

                                
                                
                            </tr>

                        </thead>

                        <tbody>

                        @foreach($categorias as $cat)
                         <tr>

                             <td>{{$cat->categoria_id}}</td>
                             <td>{{$cat->descricao}}</td>
                             <td><a href="/categorias/remove/{{$cat->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a> | <a href="/categorias/edit/{{$cat->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                         </tr>
                        @endforeach



                        </tbody>

                    </table>

                </div>





        </div>
    </div>

    @endguest

@stop
