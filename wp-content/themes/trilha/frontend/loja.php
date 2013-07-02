<?php get_header() ?>

<!-- sections vem aqui -->
        <section>
            <div id="carousel" class="fluid-container">
                <div class="container">
                    <div class="row-fluid">

                        <!-- <div id="myCarousel" class="carousel slide"> -->
                          <!-- Itens de carousel -->
                            <!-- <div class="carousel-inner"> -->
                                <div class="item">
                                    <a href="#">
                                        <div id="textos-carousel">
                                            <h2>Camiseta Planeta</h2>
                                            <p id="descricao">Várias cores</p>
                                            <p id="preco">R$ <span>23</span>,00</p>
                                        </div>

                                        <div id="imagens-carousel">
                                            <img src="<?php bloginfo('template_url') ?>/img/trilha-carousel-loja-01.jpg">
                                            <img id="img-02" src="<?php bloginfo('template_url') ?>/img/trilha-carousel-loja-02.jpg">
                                        </div>
                                    </a>
                                    

                                </div>
                            <!-- </div> -->

                          <!-- Navegador do carousel -->
<!--                           <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                        </div> -->

                    </div>
                </div>           
            </div>
            
            <div id="bg-marcadores" class="fluid-container"></div>



           <div id="paginacao" class="fluid-container">
                <div class="container">
                    <div class="row-fluid">

                        <ul>
                            <li><a class="btn-passar anterior" href="#">Anterior</a></li>
                            <li><a class="numeracao" href="#">1</a></li>
                            <li><a class="numeracao" href="#">2</a></li>
                            <li><a class="numeracao" href="#">3</a></li>
                            <li><a class="numeracao" href="#">4</a></li>
                            <li><a class="numeracao" href="#">5</a></li>
                            <li><a class="btn-passar proxima" href="#">Próxima</a></li>
                        </ul>

                        <div id="itens-pagina">
                            <img class="divisao-paginacao" src="<?php bloginfo('template_url') ?>/img/trilha-divisao-paginacao.png">

                            <p>Itens por página
                                <select>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                </select>
                            </p>

                            <img class="divisao-paginacao" src="<?php bloginfo('template_url') ?>/img/trilha-divisao-paginacao.png">
                        </div>

                        <form class="form-search">
                            <div class="input-append">
                                <input type="text" class="span2 search-query">
                                <button type="submit" class="btn">Busca</button>
                            </div>
                        </form>

                    </div>
                </div>           
            </div>


        </section>


<?php get_footer() ?>
