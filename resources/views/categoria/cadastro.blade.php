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

              
               <div class="row"> 
               <div class="col-sm-4">
                <img width="200" src="/img/icones/logo_safety_degrade.png" class="img-responsive">   
               </div>
               <div class="col-sm-8">
                <h2></h2>   
               </div>
               </div>
                
            

            <div class="col-sm-12">
                 <div class="col-sm-6">
                <a class="iconDash" style="font-size: 25px" href="{{ route('home') }}"><i class="fa fa-cogs" aria-hidden="true">&nbsp;Dashboard</i></a>&nbsp;&nbsp;&nbsp;<a class="iconDash" style="font-size: 25px;" href="{{ route('site') }}"><i class="fa fa-home" aria-hidden="true">&nbsp;Home do site</i></a>
                 </div>
                 <div class="col-sm-6"></div>
             </div>

             <div class="col-sm-12">
                 <h1>Cadastro de categoria</h1>
             </div>

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
