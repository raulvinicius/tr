<?php 


function codex_custom_init() {
	$labelsDestaque = array(
		'name' => _x('Destaques', 'nome plural do tipo de post'),
		'singular_name' => _x('Destaque', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Destaque', 'destaque'),
		'add_new_item' => __('Adicionar Destaque'),
		'edit_item' => __('Editar Destaque'),
		'new_item' => __('Nova Destaque'),
		'all_items' => __('Todas as Destaques'),
		'view_item' => __('Ver Destaque'),
		'search_items' => __('Procurar por Destaque'),
		'not_found' =>  __('Nenhuma Destaque foi encontrada'),
		'not_found_in_trash' => __('Não há Destaques na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Destaques'

	);
	$argsDestaques = array(
		'labels' => $labelsDestaque,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title', 'author', 'thumbnail' )
	); 
	register_post_type('destaque',$argsDestaques);





	$labelsProduto = array(
		'name' => _x('Produtos', 'nome plural do tipo de post'),
		'singular_name' => _x('Produto', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Produto', 'produto'),
		'add_new_item' => __('Adicionar Produto'),
		'edit_item' => __('Editar Produto'),
		'new_item' => __('Novo Produto'),
		'all_items' => __('Todos os Produtos'),
		'view_item' => __('Ver Produto'),
		'search_items' => __('Procurar por Produto'),
		'not_found' =>  __('Nenhum Produto foi encontrado'),
		'not_found_in_trash' => __('Não há Produtos na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Produtos'

	);
	$argsProdutos = array(
		'labels' => $labelsProduto,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title', 'author', 'thumbnail' )
	); 
	register_post_type('produto',$argsProdutos);





	$labelsUsuario = array(
		'name' => _x('Usuários', 'nome plural do tipo de post'),
		'singular_name' => _x('Usuário', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Usuário', 'usuario'),
		'add_new_item' => __('Adicionar Usuário'),
		'edit_item' => __('Editar Usuário'),
		'new_item' => __('Novo Usuário'),
		'all_items' => __('Todos os Usuários'),
		'view_item' => __('Ver Usuário'),
		'search_items' => __('Procurar por Usuário'),
		'not_found' =>  __('Nenhum Usuário foi encontrado'),
		'not_found_in_trash' => __('Não há Usuários na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Usuários'

	);
	$argsUsuarios = array(
		'labels' => $labelsUsuario,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title', 'author', 'thumbnail' )
	); 
	register_post_type('usuario',$argsUsuarios);





	$labelsCarrinho = array(
		'name' => _x('Carrinhos', 'nome plural do tipo de post'),
		'singular_name' => _x('Carrinho', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Carrinho', 'carrinho'),
		'add_new_item' => __('Adicionar Carrinho'),
		'edit_item' => __('Editar Carrinho'),
		'new_item' => __('Novo Carrinho'),
		'all_items' => __('Todos os Carrinhos'),
		'view_item' => __('Ver Carrinho'),
		'search_items' => __('Procurar por Carrinho'),
		'not_found' =>  __('Nenhum Carrinho foi encontrado'),
		'not_found_in_trash' => __('Não há Carrinhos na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Carrinhos'

	);
	$argsCarrinhos = array(
		'labels' => $labelsCarrinho,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title', 'author', 'thumbnail' )
	); 
	register_post_type('carrinho',$argsCarrinhos);





}
add_action( 'init', 'codex_custom_init' );




if ( function_exists( 'add_image_size' ) ) 
{
	add_image_size( 'foto-destaque', 360, 300, true );
	add_image_size( 'zoom-destaque', 240, 300, true );
	add_image_size( 'tb-lista', 220, 215, true );
	add_image_size( 'tb-foto', 102, 100, true );
	add_image_size( 'foto', 470, 460, true );
}
