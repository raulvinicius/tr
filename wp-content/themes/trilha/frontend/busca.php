<?php get_header() ?>

<!-- sections vem aqui -->
        <section>   

            <div id="bg-resultado-busca" class="fluid-container">
                <div class="container">
                    <p class="span12">Exibindo resultados da busca por "<span>Provolone</span>"</p>
                </div>
            </div>

            <?php 

                $pUrl = realpath(dirname(__FILE__));
                $pUrl = split('frontend', $pUrl);
                $pUrl = $pUrl[0];
                include $pUrl . "\paginacao.php";

             ?>


             <section>

                <div id="lista-produtos" class="fluid-container">

                    <ul>
                        <div class="fluid-row">

                            <?php for ($i=0; $i < 10; $i++) : ?>

                                <li id="produto">

                                    <figure>
                                        <div id="wrap-imgs">
                                            <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto01.jpg">
                                            <img id="zoom" src="<?php bloginfo('template_url') ?>/img/zoom-produto01.jpg">
                                        </div>
                                        <div id="desconto">
                                            <p>99%</p>
                                        </div>
                                        <div id="carrinho"></div>
                                        <div id="new"></div>
                                        <div id="preco" class="animado-02-in-out"><p>R$ <span>1.560</span>,00</p></div>
                                        <div id="menu" class="animado-02-in-out">
                                            <ul>
                                                <li><a id="btn-ver" href="#" title="Ver produto">Ver produto</a></li>
                                                <li><button id="btn-add" title="Adicionar ao carrinho">Adicionar ao Carrinho</button></li>
                                                <li><button id="btn-compartilhar" title="Compartilhar">Compartilhar</button></li>
                                            </ul>
                                        </div>
                                    </figure>
                                    <div id="descricao">
                                        <h2>Cadeirinha</h2>
                                        <p>Laranja</p>
                                    </div>

                                </li>

                            <?php endfor; ?>

                        </div>

                        <div class="clearfix"></div>

                    </ul>

                    <div class="clearfix"></div>

                </div>

             </section>





            <?php 

                $pUrl = realpath(dirname(__FILE__));
                $pUrl = split('frontend', $pUrl);
                $pUrl = $pUrl[0];
                include $pUrl . "\paginacao.php";

             ?>

        </section>


<?php get_footer() ?>
