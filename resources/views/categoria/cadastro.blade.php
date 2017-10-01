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

             <div class="jumbotron"><h2>Cadastro de Categorias</h2></div>

            <form action="{{ route('categoria.insert') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="nomeProduto">Nome da Categoria</label>
                        <input type="text" class="form-control" name="nomeCategoria" id="nomeProduto" aria-describedby="Inserir nome da Categoria" placeholder="Digite o nome da Categoria">

                    </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">

                        <input type="submit" class="form-control btn btn-default btn-success" value="Salvar Categoria" />

                    </div>

                </div>



            </form>


        </div>
    </div>

    @endguest

@stop
