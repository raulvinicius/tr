<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/produto.php" ) ?>

<?php else : ?>

	<?php 
		get_header();
		the_post(); 
	?>

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

						    		    		<?php 
						    		    			$fotos = get_field('fotos', $post->ID); 

						    		    			foreach ($fotos as $foto ) :

						    		    				$urlFoto = wp_get_attachment_image_src( $foto["foto"], 'foto' );
						    		    		?>

						    			    		<li class="animado-02-in-out">
						    					        <img id="foto" class="animado-02-in-out" src="<?php echo $urlFoto[0] ?>">
						    			    		</li>

						    			    	<?php 
						    			    		endforeach;
						    			    	 ?>

    		    			    	    		<?php 
    		    			    	    			$zoom = get_field('zoom', $post->ID); 

    	    			    	    				if ($zoom) :

    	    			    	    				$urlFoto = wp_get_attachment_image_src( $zoom, 'foto' );
    		    			    	    		?>

    		    			    		    		<li class="animado-02-in-out">
    		    			    				        <img id="foto" class="animado-02-in-out" src="<?php echo $urlFoto[0] ?>">
    		    			    		    		</li>

    	    			    		    		<?php endif; ?>

									    	</ul>
									    </div>
									    <div id="desconto">
									        <p>99%</p>
									    </div>
									    <div id="carrinho"></div>
									    <div id="new"></div>
									</figure>

							    	<ul id="miniaturas">
	    					    		<?php 
	    		    		    			foreach ($fotos as $foto ) :

	    		    		    				$urlFoto = wp_get_attachment_image_src( $foto["foto"], 'tb-foto' );
	    		    		    		?>

	    						    		<li>
	    								        <img id="foto" class="animado-02-in-out" src="<?php echo $urlFoto[0] ?>">
	    						    		</li>

	    		    			    	<?php 
	    		    			    		endforeach;
	    		    			    	 ?>

	    			    	    		<?php 
    			    	    				if ($zoom) :

    			    	    				$urlFoto = wp_get_attachment_image_src( $zoom, 'tb-foto' );
	    			    	    		?>

	    			    		    		<li>
	    			    				        <img id="foto" class="animado-02-in-out" src="<?php echo $urlFoto[0] ?>">
	    			    		    		</li>

    			    		    		<?php endif; ?>
							    	</ul>

							    	<div id="compartilhe" class="span11">

							    		<h3>Compartilhe:</h3>
							    		<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-lang="pt">Tweetar</a>
							    		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							    		<div class="fb-like" data-href="<?php echo get_permalink($post->ID) ?>" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial" data-action="recommend"></div>
							    	</div>

								</div>

								<div id="wrap-info" class="span7">

									<h2><?php the_title(); ?></h2>
									<?php $descricao = get_field('descricao', $post->ID) ?>
									<div id="descricao"><?php echo $descricao ?></div>

									<section id="variacoes">
							    		<?php 
							    			$variacoes = get_field('variacoes', $post->ID); 

							    			echo '<ul>';

							    			foreach ($variacoes as $variacao ) :
											 
							    				echo '<li>';

												echo '<h3>' . $variacao["variacao"] . '</h3>';

							    				$opcoesVariacao = $variacao["opcoes_variacao"];

							    				echo '<ul id="lista">';

							    				foreach( $opcoesVariacao as $opcaoVariacao) :
							    					echo '<li><h4>' . $opcaoVariacao['opcao_variacao'] . '</h4>';

								    				$propriedades = $opcaoVariacao["propriedades"];

							    					echo '<ul>';

							    						foreach( $propriedades as $propriedade ) :

							    							echo '<li>';

							    							echo '<span class="' . strtolower($propriedade['nome']) . '">' . $propriedade['nome'] . ': </span>' . $propriedade['valor'] . ' ' . $unidadeVariacao[ $propriedade['nome'] ];

								    						echo '</li>';

						    							endforeach;

							    					echo '</ul>';

						    					endforeach;

							    				echo '</ul>';

							    				echo '</li>';

								    		endforeach;

					    					echo '</ul><div class="clearfix"></div>'
								    	 ?>

									</section>
									<?php 
										$preco =  get_field('preco', $post->ID); 
									?>

									<button id="btn-adicionar" class="btn-add-produto" data-id="<?php echo $post->ID ?>" data-nome="<?php the_title() ?>" data-descricao="<?php echo strip_tags($descricao) ?>" data-preco="<?php echo 'R$ ' . $preco ?>" data-quantidade="1"><i id="icone-carrinho"></i>Adicionar</button>
									<div id="wrap-qtd">
										<?php 
											$max = get_field('estoque', $post->ID);
										 ?>
										<input id="qtd" type="number" name="quantidade" min="1" max="<?php echo $max ?>" value="1">
									</div>
									<div id="wrap-preco">
										<?php 
											$precoU = $preco;
											$preco = split(',', $preco);
											$preco = '<span>' . $preco[0] . '</span>,' . $preco[1];
										?>
										<p data-u-price="<?php echo $precoU ?>">R$ <?php echo $preco ?></p>
									</div>
									<button id="btn-voltar" onclick="history.back();">Voltar</button>
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

	
<?php endif; ?>
