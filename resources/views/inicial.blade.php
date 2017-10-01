<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

</head>

<body>



<!-- Header -->
<header class="masthead row" style="margin: 0">




    <div class="col-sm-12 col-md-6 col-lg-6">

        <img class="img-fluid" width="400" src="img/icones/logo_safety_degrade.png" alt="" />

    </div>


    <div class="col-sm-12 col-md-6 col-lg-6">



        <img class="logo_intel img-fluid" src="img/icones/INTEL.png" alt="" />

    </div>




    <div class="row informacoes" style="margin: 0">

        <div class="col-sm-12 col-lg-4 col-md-4">
            <div class="wrapper_text"><h3><span class="cotacao">cotacao@safetytecnologia.com.br</span></h3></div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4"> <div class="wrapper_text"> <h3><span class="telefone"><span style="font-size: 15px;">11</span> 3136.0920</span></h3></div></div>
        <div class="col-sm-12 col-md-4 col-lg-4"><div class="wrapper_text"> <h3><span class="whats"><span style="font-size: 15px;">11</span> 94580.7886</span></h3></div></div>



    </div>



    <div class="clear"></div>
</header>


@foreach($categorias as $categoria)



@if(count($categoria->produtos) > 0)


<section class="row bg_fundo shadow">

    <div class="col-sm-12 col-md-2 col-lg-2">
        <div class="category">
            <p>{{$categoria->descricao}}</p>
        </div>
        <div class="bg_linha"></div>
    </div>
    <div class="col-sm-10">

        <div class="row" style="margin: 0">

            @foreach($categoria->produtos as $produto)
            <div class="col-sm-12 col-md-4 col-lg-4" style="padding: 0">
                <article>
                    <header>
                        <figure>
                            <img src="/{{$produto->url_imagem}}" alt="">
                        </figure>
                    </header>

                    <p data-description="{{$produto->nome}}" class="descricao">{{$produto->nome}}</p>
                    <p data-price="{{$produto->preco}}" class="price">{{$produto->preco}}</p>
                </article>


            </div>

            @endforeach
            
            

        </div>

    </div>


</section>
@endif
@endforeach

<footer class="row" style="margin: 0">


    <div class="col-12 footer">

        <p class="mb-0">FAÇA UMA COTAÇÃO E DESCUBRA OS MELHORES PREÇOS.</p>
        <p class="mb-0">TRABALHAMOS COM TODA A LINHA INTELBRAS.</p>


    </div>

    <div class="col-12 footer2">

        <div class="container">

            <div class="coluna_footer">
                <div class="formas_de_pagamento">
                    <p>Formas de Pagamento</p>
                </div>

            </div>

            <div class="coluna_footer">
                <div class="seta">
                    <p> > </p>
                </div>

            </div>

            <div class="coluna_footer">
                <div class="divisao_pagamento">3X</div>

                <div class="inf_juros">
                    <spam class="top">Sem Juros</spam>
                    <spam class="bottom">no bolteo**</spam>
                </div>
                <div class="clear"></div>
            </div>

            <div class="coluna_footer">
                <div class="seta">
                    <p> > </p>
                </div>

            </div>


            <div class="coluna_footer">
                <div class="divisao_pagamento">4X</div>

                <div class="inf_juros">
                    <spam class="top">Sem Juros</spam>
                    <spam class="bottom">no cartão</spam>
                </div>
                <div class="clear"></div>
            </div>


            <div class="coluna_footer">
                <div class="regras">
                    <p>**Sujeito a análise financeira.</p>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <div class="row col-12 footer3" style="margin: 0">
        <div class="col-sm-12 col-lg-4 col-md-4">
            <div class="wrapper_text"><h3><span class="cotacao">cotacao@safetytecnologia.com.br</span></h3></div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4"> <div class="wrapper_text"> <h3><span class="telefone"><span style="font-size: 15px;">11</span> 3136.0920</span></h3></div></div>
        <div class="col-sm-12 col-md-4 col-lg-4"><div class="wrapper_text"> <h3><span class="whats"><span style="font-size: 15px;">11</span> 94580.7886</span></h3></div></div>
    </div>



</footer>





<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<!--<script src="js/freelancer.min.js"></script>-->

</body>

</html>
