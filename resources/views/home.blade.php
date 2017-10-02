@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="col-lg-12">

                            <div class="panel-group">

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                     Usuarios
                                    </div>
                                        
                                  <div class="panel-body">


                                        <a class="btn btn-danger" href="/register">Cadastrar Novo Usuario</a>
                                        
                                        
                                    

                                  </div>    



                                </div>

                                
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                     Produtos
                                    </div>
                                        
                                  <div class="panel-body">


                                        <a class="btn btn-danger" href="{{ route('produto.cadastro') }}">Cadastrar Novo Produto</a>
                                        <a class="btn btn-danger" href="{{ route('produto') }}">Listar Produtos</a>
                                        
                                    

                                  </div>    



                                </div>


                                <div class="panel panel-primary">

                                    <div class="panel-heading">
                                            
                                            Categorias
                                        </div>
                                        
                                  <div class="panel-body">
                                        <a class="btn btn-danger" href="{{ route('categoria.cadastro') }}">Cadastrar Nova Categoria</a>
                                        <a class="btn btn-danger" href="{{ route('categoria') }}">Listar Categorias</a>
                                

                                  </div>    



                                </div>

                            </div>
                                
                                
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
