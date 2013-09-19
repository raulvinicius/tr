<?php 

	$id = $_POST['id'];

	$args = array(
	     'post_type' => 'produto'
	    ,'meta_query' => array(
	        array(
	             'key'     => 'ID'
	            ,'value'   => $id
	            ,'compare' => '='
	         )
	    ) 
	);
	$query = query_posts( $args );


	var_dump($query);