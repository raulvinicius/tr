$(document).ready(

	function() 
	{

		$(window).scroll(
			function ()
			{
				console.log($('#menu .row-fluid').height())
				if( $(this).scrollTop() > $('#bg-sombra-topo').offset().top - $('#menu .row-fluid').height() )
				{
					$('header').css({
						'border-bottom': '5px solid #b88b4f',
						'box-shadow': '0 0 10px #bbb',
						'-webkit-box-shadow': '0 0 10px #bbb',
						'-moz-box-shadow': '0 0 10px #bbb',
						'-ms-box-shadow': '0 0 10px #bbb',
						'-o-box-shadow': '0 0 10px #bbb'
					})
				}
				else
				{
					$('header').css({
						'border-bottom': 'none',
						'box-shadow': 'none',
						'-webkit-box-shadow': 'none',
						'-moz-box-shadow': 'none',
						'-ms-box-shadow': 'none',
						'-o-box-shadow': 'none'
					})
				}

			}
		);


		$('#form-contato').submit(function(){return false}); 
		$('#form-contato input[type="submit"]').bind('click', 
			function()
			{
				$(this).closest('form').validate({
					submitHandler: function(form)
					{
						$(form).hide();
						$('#process').show();

						$(form).ajaxSubmit({
							type: 'post',
							success: contatoOk
						});
					}, 
					rules: {
						nome: {
							required: true
						},
						email: {
							email: true,
							required: true
						},
						assunto: {
							required: true
						},
						mensagem: {
							required: true
						}
					},
					messages: {
						nome: {
							required: 'Campo obrigat&oacute;rio'
						},
						email: {
							email: 'E-mail inv&aacute;lido',
							required: 'Campo obrigat&oacute;rio'
						},
						assunto: {
							required: 'Campo obrigatório'
						},
						mensagem: {
							required: 'Deixe sua mensagem'
						}
					}
				});
			}
		)

	    if( $('#chart-alunos').length > 0)
	    {
		    //Get context with jQuery - using jQuery's .get() method.
			    var cAlunos = $("#chart-alunos").get(0).getContext("2d");
			    var cEscolas = $("#chart-escolas").get(0).getContext("2d");
			    var cPalestras = $("#chart-palestras").get(0).getContext("2d");
		    //This will get the first returned node in the jQuery collection.

		    var dataAlunos = [
		        {
		            value : 9043,
		            color : "#a87e3b"
		        },
		        {
		            value: 15278,
		            color:"#cc9949"
		        }

		    ]

		    var dataEscolas = [
		        {
		            value : 26,
		            color : "#a87e3b"
		        },
		        {
		            value: 66,
		            color:"#cc9949"
		        }

		    ]

		    var dataPalestras = [
		        {
		            value : 100,
		            color : "#a87e3b"
		        },
		        {
		            value: 150,
		            color:"#cc9949"
		        }

		    ]

		    var options = {
			    segmentShowStroke : false,
			    percentageInnerCutout : 45,
			    animationSteps : 40,
			    animationEasing : "easeOutQuart",
			    animateScale : true,
		    }

		    var newCAlunos = new Chart(cAlunos).Doughnut(dataAlunos,options);
		    var newCEscolas = new Chart(cEscolas).Doughnut(dataEscolas,options);
		    var newCPalestras = new Chart(cPalestras).Doughnut(dataPalestras,options);
	    }


	    $('#carrinho-fechado').bind('click', function()
	    {
	    	console.log('abre');
	    	abreCarrinho();
	    })

	    $('#wrap-cart #wrap-titulo-cart #btn-fechar, #wrap-cart #total #btn-continuar').bind('click', function()
	    {
	    	fechaCarrinho();
	    	console.log('fecha');
	    })

	    $('#relacionados #btn-anterior').bind('click', function() 
	    {
	    	passarRelacionados('anterior');
	    })

	    $('#relacionados #btn-proximo').bind('click', function() 
	    {
	    	passarRelacionados('proximo');
	    })




	    $(window).resize(function() {

	    	console.log($(window).width());
	    	$('#relacionados #lista #produtos').css('margin-left', '0px')
	    	$('#relacionados #lista #produtos').attr('data-m', '0')

	    })




	}

);




function contatoOk (data)
{
	console.log($(this));
	console.log(data);

	$('#process').hide();
	$('#form-contato').show();

	if( data == 'erro')
	{
		$('.alert-error').show();
	}
	else if( data == 'sucesso')
	{
		$('.alert-success').show();
		$('#form-contato')[0].reset();
	}
}


function abreCarrinho ()
{
	hCarrinho = $('#wrap-cart #wrap-titulo-cart').height();
	hCarrinho += parseInt($('#wrap-cart #wrap-titulo-cart').css('margin-bottom'));
	hCarrinho += $('#wrap-cart #wrap-produtos-cart').height();
	hCarrinho += $('#wrap-cart #total').height();
	hCarrinho += parseInt($('#wrap-cart #total').css('padding-top'));
	hCarrinho += parseInt($('#wrap-cart #total').css('padding-bottom'));
	$('#wrap-cart').css({
		'padding-top': '80px', 
		'height': hCarrinho + 'px',
    	'box-shadow': '0 2px 15px #072868, 0 50px 1550px #153779'
	})

}

function fechaCarrinho ()
{
	$('#wrap-cart').css({
		'padding-top': '0px', 
		'height': '0px',
    	'box-shadow': 'none'
	})
}

function passarRelacionados (direcao) 
{
	var wLista = $("#relacionados #lista").width();
	var wProdutos = parseInt( $('#relacionados #lista #produtos #produto').first().css('margin-left') ) + parseInt( $('#relacionados #lista #produtos #produto').first().css('margin-right') );
	wProdutos += $('#relacionados #lista #produtos #produto').first().width();
	wProdutos *= $('#relacionados #lista #produtos #produto').length;
	var mProdutos = parseInt( $('#relacionados #lista #produtos').attr('data-m') );
	var mProduto = parseInt( $('#relacionados #lista #produtos #produto').css('margin-right') ) - 10;
	var deslocamento = wLista + mProduto;

	if(direcao == 'proximo')
	{
		$('#relacionados #btn-anterior').removeAttr('disabled', 'disabled');
		$('#relacionados #lista #produtos').attr('data-m', (mProdutos - deslocamento ));
		$('#relacionados #lista #produtos').css('margin-left', (mProdutos - deslocamento ) + 'px');
		if( ( ( $('#relacionados #lista #produtos').attr('data-m') ) < ( wProdutos - wLista ) * -1 ) )
		{
			$('#relacionados #btn-proximo').attr('disabled', 'disabled');
		}
	}
	else
	{
		$('#relacionados #btn-proximo').removeAttr('disabled', 'disabled');
		$('#relacionados #lista #produtos').attr('data-m', (mProdutos + deslocamento ));
		$('#relacionados #lista #produtos').css('margin-left', (mProdutos + deslocamento ) + 'px');
		if( ( $('#relacionados #lista #produtos').attr('data-m') ) >= 0 )
		{
			$('#relacionados #btn-anterior').attr('disabled', 'disabled');
		}
	}
}