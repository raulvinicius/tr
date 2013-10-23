
<?php
//    unset( $_COOKIE['hicart'] );
    if( !isset( $_COOKIE['hicart'] ) ) :
        setcookie('hicart', json_encode( array() ), time() + 86400 * 14, '/'); //expira em duas semanas
    endif;

 ?>

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

        <?php 

            echo "

                <script type=\"text/javascript\">

                    templateUrl = '" . get_bloginfo('template_url') . "/';
                    blogUrl = '" . get_bloginfo('url') . "/';

                </script>

            ";

        ?>

        <div id="fb-root"></div>

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


                    <div id="wrap-cart" class="container-fluid animado-02-in-out">
                        <div id="wrap-titulo-cart" class="row-fluid">
                            <div class="container">
                                <i id="icone" class="span1 offset2"></i>
                                <h2 class="span2">Meu Carrinho</h2>
                                <p id="display" class="span5"><span class="font22">0</span>  Itens [<span> R$0,00 </span>]</p>
                                <div class="span1">
                                    <button id="btn-fechar" title="Continuar Comprando">Fechar</button>
                                </div>
                            </div>
                        </div>
                        <div id="wrap-produtos-cart" class="row-fluid">
                            <div id="produtos-cart" class="container">
                                <div class="row-fluid">
                                    <ul class="span8 offset2">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="total" class="row-fluid">
                            <div class="container">
                                <div id="fundo" class="span8 offset2">
                                    <div id="wrap-total" class="span5">
                                        <p><span id="tag-preco">Total:</span> R$ <span id="preco">0</span>,00</p>
                                    </div>
                                    <div id="wrap-btns" class="span7">
                                        <button id="btn-continuar">Continuar comprando</button>
                                        <a href="#">Finalizar Compra</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="header-loja" class="container-fluid">
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

                                <div id="carrinho-fechado" class="span5" title="Ver Meu Carrinho">
                                    <div class="row-fluid">
                                        <div id="icon-carrinho" class="span1">
                                            <img src="<?php bloginfo('template_url') ?>/img/trilha-icon-carrinho.png">
                                        </div>

                                        <div id="texto-carrinho" class="span10">
                                            <p><span class="font22">0</span>  Itens [<span> R$0,00 </span>]</p>
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

                    <?php 
                    
                    $args = array(
                        'type'                     => 'post',
                        'orderby'                  => 'name',
                        'order'                    => 'ASC',
                        'exclude'                  => '1',
                        'include'                  => ''

                    );

                    $cats =  get_categories( $args );

                    ?>

                    <div id="categorias" class="container-fluid">
                        <div class="container">
                            <div class="row-fluid">

                                <ul>
                                    <?php

                                        foreach ( $cats as $cat ) : 

                                            $nome = $cat->name;

                                            $link = get_category_link( $cat->cat_ID );

                                        ?>

                                        <li class="animado-02-in-out">
                                            <a href="<?php echo $link ?>"><img src="<?php bloginfo('template_url') ?>/img/trilha-icon-<?php echo strtolower($nome) ?>.png"><p><?php echo $nome ?></p></a>
                                        </li>

                                    <?php endforeach; ?>

                                </ul>

                            </div>
                        </div>
                    </div>

                <?php endif; ?>
            
            </header>

            <div id="alerts">

            </div>

            <?php if ( !$urlLoja ) : ?>

                <div id="banner"></div>
                <div  id="bg-topo"></div>
                <div  id="bg-sombra-topo"></div>

            <?php else : ?>

                <div id="sharebar">

                    <div id="bg" class="container-fluid navbar-fixed-top">

                        <div id="v-align" class="container">

                            <div class="row-fluid">

                                <div id="wrap" class="span6 offset3">

                                    <div id="wrap-titulo" class="row-fluid">

                                        <h3 class="span11">Compartilhe:</h3>
                                        <button id="btn-fechar" class="close span1" data-dismiss="sharebar">x</button>

                                    </div>

                                    <div class="row-fluid">

                                        <figure class="foto-produto span6">
                                            <div id="wrap-imgs">
                                                <?php $r = rand(1, 4); ?>
                                                <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto0<?php echo $r ?>.jpg">
                                            </div>
                                        </figure>
                                        <div id="descricao" class="span6">
                                            <h2>Cadeirinha</h2>
                                            <p id="texto">Laranja</p>
                                        </div>

                                    </div>


                                    <div id="wrap-share" class="row-fluid">

                                        <div id="wrap-tw" class="span4">
                                            <a href="https://twitter.com/share" class="twitter-share-button" data-text="Produtos personalizados da [hi]School" data-url="<?php bloginfo('url'); ?>" data-lang="pt">Tweetar</a>
                                        </div>
                                        <script>function doTw(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}/*doTw(document, 'script', 'twitter-wjs');*/</script>
                                        
                                        <div class="span4 fb-like" data-href="http://trilhacursos.com.br/loja" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial" data-action="like"></div>
                                        <script>function doFb(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";fjs.parentNode.insertBefore(js, fjs);}doFb(document, 'script', 'facebook-jssdk');</script>

                                        <div class="span4">
                                            <a id="email" href="#"><i id="icone-compartilha-email"></i>Por e-mail</a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endif; ?>
<!-- ================FIM HEADER================ -->
