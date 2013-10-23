<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/loja.php" ) ?>

<?php else : ?>

	<?php get_header() ?>

<!-- adsf -->

	        <section>
	            <div id="carousel" class="fluid-container">
	                <div class="container">
	                    <div class="row-fluid">
	                        <div id="myCarousel" class="carousel slide">
	                          <!-- Itens de carousel -->
	                            <div class="carousel-inner">
	                            <?php

	                            	$page = get_page_by_path( 'destaques' );

	                            	$destaques = get_field('destaques', $page->ID);


	                            	foreach ($destaques as $destaque) :

	                            		$destaque = $destaque['produto'][0];
	                            		$dId = $destaque->ID;
	                            		$nome = get_the_title($dId);
	                            		$descricao = get_field('descricao', $dId);
	                            		$preco = get_field('preco', $dId);
	                            		$preco = split(',', $preco);
	                            		$img = get_field('fotos', $dId);
	                            		$img = $img[0]['foto'];
	                            		$img = wp_get_attachment_image_src($img, 'foto-destaque');
	                            		$zoom = get_field('zoom', $dId);
	                            		$zoom = wp_get_attachment_image_src($zoom, 'zoom-destaque');
	                            		$url = get_permalink($dId);


	                            ?>
	                                <div class="item">
	                                    <a href="<?php echo $url ?>">
	                                        <div id="textos-carousel">
	                                            <h2><?php echo $nome ?></h2>
	                                            <div id="descricao"><?php echo $descricao ?></div>
	                                            <div id="preco">R$ <?php echo '<span>' . $preco[0] . '</span>,' . $preco[1] ?></div>
	                                        </div>

	                                        <div id="imagens-carousel">
	                                            <img src="<?php echo $img[0] ?>">
	                                            <?php if ( $zoom ) : ?>
		                                            <img id="img-02" src="<?php echo $zoom[0] ?>">
		                                        <?php endif; ?>
	                                        </div>
	                                    </a>
	                                    

	                                </div>

	                            <?php endforeach; ?>
	                            </div>

	                          <!-- Navegador do carousel -->
	                          <a class="carousel-control left animado-02-in-out" href="#myCarousel" data-slide="prev"><img src="<?php bloginfo('template_url') ?>/img/trilha-seta-esq.png" /></a>
	                          <a class="carousel-control right animado-02-in-out" href="#myCarousel" data-slide="next"><img src="<?php bloginfo('template_url') ?>/img/trilha-seta-dir.png" /></a>
	                        </div>

	                    </div>
	                </div>           
	            </div>
	            
	            <div id="bg-marcadores" class="fluid-container">
	            </div>



	            <?php 

	        		$ppp = ( isset($_GET['ip']) ) ? $_GET['ip'] : 10;
            		$cat = single_cat_title( '', false );
            		$search = ( isset( $_GET['q'] ) ) ? $_GET['q'] : '';

            		if ( get_query_var('paged') ) : 
	            		$paged = get_query_var('paged');
	            	endif;

            		if ( get_query_var('page') ) : 
	            		$paged = get_query_var('page');
	            	endif;

	            	$offset = $ppp * ( max( intval( $_GET['pg'] ), 1 ) - 1 );

	            	//descobre a quantidade de posts com a query search
	            	if( $search != '' || $cat != 'Loja' ) :

	            		$args = array( 'post_type' => 'produto', 'offset' => $offset, 'posts_per_page' => -1, 'category_name' => $cat, 'paged' => $paged, 's' => $search );
	            		$loop = new WP_Query( $args );
	            		$totalPosts = $loop->post_count;

            		endif;

            		$args = array( 'post_type' => 'produto', 'offset' => $offset, 'posts_per_page' => $ppp, 'category_name' => $cat, 'paged' => $paged, 's' => $search );
            		$loop = new WP_Query( $args );

            		$totalPosts = ( isset( $totalPosts ) ) ? $totalPosts : wp_count_posts('produto')->publish;

            		$msgSearch = '';
            		if ( $search != '' ) :

	            		$msgSearch = '<span>' . $totalPosts . '</span> ' . pluralize($totalPosts, 'produtos', 'produto') . ' na busca por <span>"' . $search . '"</span>';
	            		$msgSearch .= ( $cat != 'Loja' ) ? ' dentro da categoria <span>' . $cat : '</span>';

	            	endif;

            		$nPages = ceil($totalPosts / $ppp);

				?>
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

	                        	<p id="msg-busca"><?php echo $msgSearch ?></p>

                            	<?php 
                        			//Produtos
	                            	while ( $loop->have_posts() ) : $loop->the_post();
	                            ?>

                                    <?php the_content(); ?>
	                                <li id="produto" class="produto" data-id='<?php echo $post->ID ?>'>

	                                    <figure class="foto-produto">
	                                        <div id="wrap-imgs">
		                                        <?php 
		                                        	$urlFoto = get_field('fotos', $post->ID);
		                                        	$urlFoto = $urlFoto[0]['foto'];
		                                        	$urlFoto = wp_get_attachment_image_src( $urlFoto, 'tb-lista' );

		                                        	$urlZoom = (get_field('zoom', $post->ID)) ? wp_get_attachment_image_src( get_field('zoom', $post->ID), 'tb-lista' ) : $urlFoto;
		                                        	$temZoom = (get_field('zoom', $post->ID)) ? 'foto' : '0';
		                                        ?>
	                                    <a href="<?php echo get_permalink($post->ID) ?>">
	                                            <img id="<?php echo $temZoom ?>" class="foto animado-02-in-out" src="<?php echo $urlFoto[0] ?>" width="<?php echo $urlFoto[1] ?>" height="<?php echo $urlFoto[2] ?>">
	                                            <img id="zoom" src="<?php echo $urlZoom[0] ?>" width="<?php echo $urlZoom[1] ?>" height="<?php echo $urlZoom[2] ?>">
	                                    </a>
		                                        
	                                        </div>
	                                        <?php 

	                                        	$desconto = split("%", get_post_meta($post->ID, 'desconto_promocao', true) );
	                                        	$dataLimiteDesconto = get_post_meta($post->ID, 'data_limite_promocao', true);
	                                        	$dataLimiteDesconto =  strtotime($dataLimiteDesconto);
	                                        	$dataLimiteDesconto = date('d/m/Y', $dataLimiteDesconto);
	                                        	$desconto = $desconto[0];

	                                        	$dataLimite = strtotime (get_post_meta($post->ID, 'data_limite_promocao', true));

	                                        	if (strtotime('now') <= $dataLimite && $desconto != '0') : 
												

	                                         ?>

		                                        <div id="desconto" title="promoção válida até <?php echo $dataLimiteDesconto ?>">
		                                            <p><?php echo $desconto; ?>%</p>
		                                        </div>

		                                    <?php endif ?>

	                                        <div id="carrinho" title="Você já tem esse produto no carrinho"></div>

	                                        <?php if (get_post_meta($post->ID, 'novidade', true)) : ?>
	                                        	<div id="new"></div>
		                                    <?php endif ?>

	                                        <?php 
	                                        	$preco =  get_post_meta($post->ID, 'preco', true);
	                                        	$preco = split(',', $preco);
	                                        	$preco = '<span>' . $preco[0] . '</span>,' . $preco[1];
	                                        ?>
	                                        <div id="preco" class="animado-02-in-out"><p>R$ <?php echo $preco ?></p></div>
	                                        <!-- <div id="preco" class="animado-02-in-out"><p>R$ <span>1.560</span>,00</p></div> -->
	                                        <div id="menu" class="animado-02-in-out">
	                                            <ul>
	                                                <li><a id="btn-ver" href="<?php echo get_permalink($post->ID) ?>" title="Ver produto">Ver produto</a></li>
	                                                <li><button id="btn-add" class="btn-add" title="Adicionar ao carrinho">Adicionar ao Carrinho</button></li>
	                                                <li><button id="btn-compartilhar" class="btn-compartilhar" title="Compartilhar">Compartilhar</button></li>
	                                            </ul>
	                                        </div>
	                                    </figure>
	                                    <div id="descricao">
	                                        <h2><?php the_title() ?></h2>
	                                        <?php 

	                                        	$fullDescricao = get_post_meta($post->ID, 'descricao', true);
	                                        	$descricao = $fullDescricao;
	                                        	if (strlen(strip_tags($descricao)) > 30) :

	                                        		$descricao = substr(strip_tags ($descricao), 0, 30) . "...";

                                        		endif;

	                                         ?>
	                                        <p data-full="<?php echo $fullDescricao; ?>"><?php echo $descricao ?></p>
	                                    </div>

	                                </li>

	                            <?php
	                            	endwhile; 
	                            	wp_reset_postdata();
	                            ?>

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




		<?php 
			//Destaque
		$loop = new WP_Query( array( 'post_type' => 'destaque', 'posts_per_page' => 10 ) );
	while ( $loop->have_posts() ) : $loop->the_post();
	echo '<a href="http://localhost/trilha/?produto=';
	the_title();
	echo '">';
	the_title();
	echo '</a>';

	  echo '<div class="entry-content">';
	  the_content();
	  echo 'Produto: ';
	  echo get_post_meta($post->ID, 'produto', true);
	  echo '<br>';  
	  $attachment_id = get_post_meta($post->ID, 'imagem_ilustrativa', true);; // attachment ID
	  $image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array 
	  echo '<img src="'; 
	  echo $image_attributes[0]; 
	  echo '" width="';
	  echo $image_attributes[1]; 
	  echo '" height="';
	  echo $image_attributes[2];
	  echo '">';
	  echo '<img src="';
	    
	  echo '"/>';
	  echo '<br>';
	  $attachment_id = get_post_meta($post->ID, 'imagem_detalhe', true);; // attachment ID
	  $image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array 
	  echo '<img src="'; 
	  echo $image_attributes[0]; 
	  echo '" width="';
	  echo $image_attributes[1]; 
	  echo '" height="';
	  echo $image_attributes[2];
	  echo '">';
	  echo '<img src="';
	    
	  echo '"/>';
	  echo '</div>';
	endwhile; 

	?>


	<?php get_footer() ?>
	
<?php endif; ?>
