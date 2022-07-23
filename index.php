<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Avaliação</title>

    <!-- CSS -->
    <?php include_once('inc/css.php'); ?>
    <!-- /CSS -->
</head>

<body>
    <!-- CONTAINER -->
    <div class="container-fluid">
        <!-- CABEÇALHO -->
        <?php include_once('inc/topo.php'); ?>
        <!-- /CABEÇALHO -->
        &nbsp;
        <!-- CONTEÚDO -->
        <div class="row">
            <!-- Caroussel -->
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Banner.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Banner2.jpg" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Proximo</span>
                </button>
            </div>
            <!-- /Carrousel -->
            &nbsp;
            <!-- Slogan -->
            <div class="row mrg-bt-lg bg-green-l pd-lg pos-relative">
                <div class="col s12 m8 offset-m2 center-align text-center">
                    <p class="clr-housegreen">Saúde não só aqui, mas em todo nosso site.</p>
                </div>
            </div>
            <p></p>
            <!-- Slogan -->
            <!-- Produtos Comercializados -->
            <div class="row">
                <div class="col-6 text-center">
                    <div class="col s12 l6 cs-text">
                        <div class="cs-inner">
                            <h1>Nosso Seguimento</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus est repellendus exercitationem temporibus quaerat odio dolorem tempore, officiis culpa accusamus quae dolores nisi nulla illo recusandae molestias ex laudantium itaque.</p>
                            <a href="#" class="btn btn-success">Baixe nosso App e verifique as lojas em funcionamento</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <h1>Mais?</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus placeat accusantium animi cupiditate iste eos nemo officia fugit recusandae soluta! Totam, laboriosam accusantium porro ipsam aliquid sequi labore laudantium possimus?</p>
                    <a href="#" class="btn btn-success">Para ver mais Sobre nós</a>
                </div>
            </div>
            <!-- /Produtos Comercializados -->
            &nbsp;
            <!-- P PROVISÓRIO -->
            <p>.</p>    
            <p>.</p>
            <!-- Nossos Serviços 
            // LOREM MAIOR -->
            <div class="row mrg-bt-lg bg-green-l pd-lg pos-relative">
                <div class="row">
                    <div class="row">
                        <div class="col-md-6 text-center pd-center">
                            <h1>Lorem</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, saepe magni provident deserunt sequi similique asperiores necessitatibus quaerat adipisci, dolores laboriosam? Placeat sapiente libero nemo magnam qui vel laudantium sunt?</p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/teste1.jpg" alt="imagem a ser processada" width="685">
                        </div>
                    </div>
                </div>

                <!-- 
                //SERVIÇOS -->
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/featured-drinks.jpg" alt="imagem a ser processada" width="638">
                    </div>

                    <div class="col-md-6 text-center">
                        <h1>Serviços</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, saepe magni provident deserunt sequi similique asperiores necessitatibus quaerat adipisci, dolores laboriosam? Placeat sapiente libero nemo magnam qui vel laudantium sunt?</p>
                    </div>
                </div>
                <p></p>

                <div class="row">
                    <div class="col-md-6">
                        <h1>TESTE</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, saepe magni provident deserunt sequi similique asperiores necessitatibus quaerat adipisci, dolores laboriosam? Placeat sapiente libero nemo magnam qui vel laudantium sunt?</p>
                    </div>
                    <div class="col-6">
                        <img src="img/text2.jpg" width="670">
                    </div>
                </div>
            </div>
            <!-- /Nossos Serviços -->
            <div class="col s12 l6 no-pd cs-img">
                <img alt="Featured drinks example" class="img-responsive" src="img/partners.jpg" width="1320">
            </div>

        </div>
        <!-- /CONTEÚDO -->

        <!-- RODAPÉ -->
        <?php include_once('inc/rodape.php'); ?>
        <!-- RODAPÉ -->

    </div>
    <!-- /CONTAINER -->

</body>
<!-- JS -->
<?php include_once('inc/js.php'); ?>
<!-- /JS -->

</html>