<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Trilha Cursos e Palestras</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url') ?>/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url') ?>/favicon.ico" />

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-responsive.css">
        <script src="<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.6.2.min.js"></script>

    </head>

    <?php $urlLoja = strpos($_SERVER["REQUEST_URI"], "/loja"); ?>

    <body <?php echo ($urlLoja) ? "id=\"body-loja\"" : ""; ?> >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->



        <div id="trilha">

<!-- ================HEADER================ -->

            <header>
                <div id="header" class="container-fluid">
                    <div  id="menu" class="container">
                        <div class="row-fluid">

                            <div class="span12">
                                <a href="<?php bloginfo('url') ?>"><h1 id="logo">Trilha Cursos e Palestras</h1></a>

                                <nav>
                                    <ul class="nav nav-tabs">
                                        <li><a href="<?php bloginfo('url') ?>/sobre-a-trilha">Sobre a Trilha</a></li>

                                        <li class="dropdown" id="hi">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">[hi]school</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php bloginfo('url') ?>/sobre-o-hischool">O que é</a></li>
                                                <li><a href="http://projetohischool.blogspot.com.br" target="_blank">Blog</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="<?php bloginfo('url') ?>/contato">Contato</a></li>
                                    </ul>
                                </nav>
                            </div>

                         </div>
                    </div>
                </div>

                <?php if ($urlLoja) : ?>


                    <div id ="header-loja" class="container-fluid">
                        <div class="container">
                            <div class="row-fluid">

                                <div class="span6">
                                    <form class="form-inline">

                                        <label id="label-login" class="control-label" for="input-login">Login</label>
                                        <input type="text" id="input-login" class="input-small">

                                        <label class="control-label" for="input-password">Senha</label>
                                        <input type="password" id="input-password" class="input-small">

                                        <input type="submit" value="ok">
                                    </form>

                                    <a href="#" id="cadastrar"><p><img src="<?php bloginfo('template_url') ?>/img/trilha-seta-cadastre-se.png">Cadastre-se</p></a>
                                </div>

                                <div id="carrinho-fechado" class="span5">
                                    <div class="row-fluid">
                                        <div id="icon-carrinho" class="span1">
                                            <img src="<?php bloginfo('template_url') ?>/img/trilha-icon-carrinho.png">
                                        </div>

                                        <div id="texto-carrinho" class="span10">
                                            <p><span class="font22">3</span>  Itens [<span> R$15,00 </span>]</p>
                                        </div>

                                        <div id="icon-seta-carrinho" class="span1">
                                            <img src="<?php bloginfo('template_url') ?>/img/trilha-icon-seta-carrinho.png">
                                        </div>
                                    </div>
                                </div>

                                <div id="icons-header" class="span1">
                                    <a href="#"><img id="icon-face" src="<?php bloginfo('template_url') ?>/img/trilha-icon-face.png"></a>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/img/trilha-icon-twitter.png"></a>
                                </div>
                                

                            </div>
                        </div>
                    </div>


                    <div id="categorias" class="container-fluid">
                        <div class="container">
                            <div class="row-fluid">

                                <ul>
                                    <li>
                                        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/trilha-icon-canecas.png"><p>Canecas</p></a>
                                    </li>

                                    <li>
                                        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/trilha-icon-camisetas.png"><p>Camisetas</p></a>
                                    </li>

                                    <li>
                                        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/trilha-icon-bottons.png"><p>Bottons</p></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                <?php endif; ?>
            
            </header>


            <?php if ( !$urlLoja ) : ?>

                <div id="banner"></div>
                <div  id="bg-topo"></div>
                <div  id="bg-sombra-topo"></div>

            <?php endif; ?>
<!-- ================FIM HEADER================ -->
