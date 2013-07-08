<?php get_header() ?>

<!-- sections vem aqui -->
        <section id="produto">

			<div id="ver-produto" class="fluid-container bg-caderno">

				<div class="container">

					<div class="row-fluid">

						<section id="infos-produto">

							<div id="wrap-fotos" class="span5">
								<figure class="foto-produto">
								    <div id="wrap-imgs">
								    	<ul>
								    		<li>
										        <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto01-g.jpg">
								    		</li>
								    		<li>
										        <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto02-g.jpg">
								    		</li>
								    		<li>
										        <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto03-g.jpg">
								    		</li>
								    		<li>
										        <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto04-g.jpg">
								    		</li>
								    	</ul>
								    </div>
								    <div id="desconto">
								        <p>99%</p>
								    </div>
								    <div id="carrinho"></div>
								    <div id="new"></div>
								</figure>

						    	<ul id="miniaturas">
						    		<li>
								        <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto01-tb.jpg">
						    		</li>
						    		<li>
								        <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto02-tb.jpg">
						    		</li>
						    		<li>
								        <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto03-tb.jpg">
						    		</li>
						    		<li>
								        <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto04-tb.jpg">
						    		</li>
						    	</ul>

						    	<div id="compartilhe" class="span11">

						    		<h3>Compartilhe:</h3>
						    		<a href="https://twitter.com/share" class="twitter-share-button" data-text="Produtos personalizados da [hi]School" data-lang="pt">Tweetar</a>
						    		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						    		<div class="fb-like" data-href="http://trilhacursos.com.br/loja" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial" data-action="recommend"></div>
						    	</div>

							</div>

							<div id="wrap-info" class="span7">

								<h2>Cadeira Clean</h2>
								<p id="descricao">Padrão Mógno</p>

								<section id="variacoes">

									<h3>Tamanhos</h3>
									<ul id="lista">
										<li>
											<h4>P</h4>
											<ul>
												<li><span>Largura: </span>50 cm</li>
												<li><span>Altura: </span>150 cm</li>
											</ul>
										</li>
										<li>
											<h4>M</h4>
											<ul>
												<li><span>Largura: </span>50 cm</li>
												<li><span>Altura: </span>150 cm</li>
											</ul>
										</li>
										<li>
											<h4>G</h4>
											<ul>
												<li><span>Largura: </span>50 cm</li>
												<li><span>Altura: </span>150 cm</li>
											</ul>
										</li>
										<li>
											<h4>GG</h4>
											<ul>
												<li><span>Largura: </span>50 cm</li>
												<li><span>Altura: </span>150 cm</li>
											</ul>
										</li>
										<div class="clearfix"></div>
									</ul>

								</section>

								<button id="btn-acidionar"><i id="icone-carrinho"></i>Adicionar</button>
								<div id="wrap-preco">
									<p>R$ <span>160</span>,00</p>
								</div>
								<button id="btn-voltar">Voltar</button>
								<div class="clearfix"></div>

								<nav>
									<ul id="opcoes">
										<li><a href="#"><i id="icone-prazo-entrega"></i>Prazos de Entrega</a></li>
										<li><a href="#"><i id="icone-indique"></i>Indique a um amigo</a></li>
									</ul>
								</nav>


							</div>

						</section>

					</div>

					<section id="relacionados">

						<div class="row-fluid">

							<h2 id="titulo">Talvez você também goste de:</h2>

						</div>

						<div class="row-fluid">

							<div class="span1">
								<button id="btn-anterior" disabled="disabled">Anteriores</button>
							</div>

							<div id="lista" class="span10">

								<ul id="produtos" class="animado-02-in-out" data-m="0">

									<?php for ($i=0; $i < 10; $i++) : ?>

									    <li id="produto" class="produto">

									        <figure class="foto-produto">
									            <div id="wrap-imgs">
									                <?php $r = rand(1, 4); ?>
									                <img id="foto" class="animado-02-in-out" src="<?php bloginfo('template_url') ?>/img/produto0<?php echo $r ?>.jpg">
									                <img id="zoom" src="<?php bloginfo('template_url') ?>/img/produto0<?php echo $r ?>-zoom.jpg">
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


								</ul>

							</div>

							<div class="span1">
								<button id="btn-proximo">Próximos</button>
							</div>

						</div>

					</section>

				</div>

			</div>

    
        </section>


<?php get_footer() ?>

