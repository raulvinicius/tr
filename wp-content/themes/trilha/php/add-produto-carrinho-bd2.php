<?php 


	if(isset( $_POST['id'] ) )
	{
		$id = $_POST['id'];
	}
	else if(isset( $_GET['id'] ) )
	{
		$id = $_GET['id'];
	}
	else
	{
		$id = '0';
	}

	require('../../../../wp-blog-header.php');

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

	if( count( $query ) > 0 )
	{

		echo 'ok';

	}
	else
	{

		echo 'não exite esse produto:' . $id;

	}

	get_header();
