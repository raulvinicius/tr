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
	    	abreCarrinho();
	    })

	    $('#wrap-cart #wrap-titulo-cart #btn-fechar, #wrap-cart #total #btn-continuar').bind('click', function()
	    {
	    	fechaCarrinho();
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


	    $('.btn-compartilhar').click(function(e)
	    {
	    	var foto = $(this).closest('.foto-produto').find('#wrap-imgs .foto').attr('src');
	    	var nomeProduto = $(this).closest('.produto').find('#descricao h2').html();
	    	var descricaoProduto = $(this).closest('.produto').find('#descricao p').attr('data-full');
	    	var urlProduto = $(this).closest('.foto-produto').find('#menu #btn-ver').attr('href');

	    	openShareBar(foto, nomeProduto, descricaoProduto, urlProduto);
	    })

	    $('#sharebar .close').bind('click', function()
	    {
	    	$(this).closest('#sharebar').find('#bg').hide();
	    })


	    $('.btn-add').bind('click', function()
	    {
	    	var idProduto = $(this).closest('li.produto').attr('data-id');
	    	var nomeProduto = $(this).closest('li.produto').find('#descricao h2').text();
	    	var descricaoProduto = $(this).closest('li.produto').find('#descricao p').text();
	    	var precoProduto = $(this).closest('li.produto').find('#preco p').text();
	    	$(this).closest("li.produto").addClass("no-carrinho");

	    	addAoCarrinho(idProduto, nomeProduto, descricaoProduto, precoProduto, "1");
	    })

	    $('.btn-add-produto').bind('click', function()
	    {
	    	addAoCarrinho( $(this).attr('data-id'), $(this).attr('data-nome'), $(this).attr('data-descricao'), $(this).attr('data-preco'), $(this).attr('data-quantidade') );
	    })

	    $('#produto #ver-produto #wrap-qtd input').change(function()
	    {
	    	var valor = $(this).closest('#ver-produto').find('#wrap-info .btn-add-produto').attr('data-quantidade', $(this).val());
	    	var valor = $(this).closest('#ver-produto').find('#wrap-preco p').attr('data-u-price');
	    	valor = valor.replace(',', '.');
	    	valor = parseFloat(valor);
	    	valor = $(this).val() * valor;
	    	valor = valor.toString();
	    	valor = valor.replace('.', ',');
	    	valor = valor.split(',');
	    	if(valor.length == 2)
	    	{
		    	var valor1 = valor[1];
		    	valor1 = valor1.slice(0, 2)
		    	valor1 = (valor1.length < 2) ? valor1 + '0' : valor1;
	    	}
	    	else
	    	{
	    		var valor1 = '00';
	    	}
	    	valor = 'R$ <span>' + valor[0] + '</span>,' + valor1;
	    	var valor = $('#produto #ver-produto #wrap-preco p').html(valor);

	    });


	    // galeria de fotos do single-produto
	    $('#ver-produto #wrap-fotos #miniaturas li').bind('click', function() 
	    {
	    	var thisN = $(this).index( );
	    	thisN = parseInt( $(this).index( ) ) + 1;
	    	thisN = thisN.toString();
		    $('#ver-produto #wrap-fotos figure ul li').css('opacity', '0');
		    $('#ver-produto #wrap-fotos figure ul li:nth-child(' + thisN + ')').css('opacity', '1') 
	    });


	}

);

arErros = {"404": 'Arquivo não encontrado'};





function addAoCarrinho(idProduto, nomeProduto, descricaoProduto, precoProduto, qtdProduto)
{
	qtdProduto = (qtdProduto == undefined) ? 1 : qtdProduto;
	var novoProduto = true;

	$('#wrap-cart #wrap-produtos-cart ul li').each(function() 
	{
		if ($(this).attr('data-id') == idProduto)
		{
			qtdProduto = parseInt(qtdProduto) + parseInt($(this).find('#qtd').text());
			novoProduto = false;
			return false;
		}
	});


	var strQtdProduto = qtdProduto.toString();
	strQtdProduto = (strQtdProduto.length < 2) ? '0' + strQtdProduto : strQtdProduto;

	if( descricaoProduto.length > 30 )
	{
		descricaoProduto = descricaoProduto.slice(0, 30) + '...';
	}

	if(novoProduto == true)
	{

		$('#wrap-cart #wrap-produtos-cart ul').append('<li class="loading" data-id="' + idProduto + '" data-quantidade="' + strQtdProduto + '" data-nome="' + nomeProduto + '" data-descricao="' + descricaoProduto + '" data-preco="' + precoProduto + '"><div id="wrap-remover" class="span1"><i class="icon-processando"></i></div><div id="descricao" class="span11">Adicionando: ' + nomeProduto + '</div></li>')
		var e = $('#wrap-cart #wrap-produtos-cart ul li[data-id="'+ idProduto +'"]');
		if ($('#wrap-cart').height() > 0)
		{
			abreCarrinho();
		}
		addAoCarrinhoBD(e);
	}
	else
	{
		var e = $('#wrap-cart #wrap-produtos-cart ul li[data-id="'+ idProduto +'"]');
		e.html('<div id="wrap-remover" class="span1"><i class="icon-processando"></i></div><div id="descricao" class="span11">Atualizando: ' + nomeProduto + '</div>');
		e.addClass('loading');
		e.attr('data-id', idProduto);
		e.attr('data-quantidade', strQtdProduto);
		e.attr('data-nome', nomeProduto);
		e.attr('data-descricao', descricaoProduto);
		e.attr('data-preco', precoProduto);

		atualizaQtdBD(e);
	}
}

function addAoCarrinhoBD(e)
{
	$.ajax({
		url: templateUrl + 'php/add-produto-carrinho-bd.php',
		type: 'POST',
		data: {id: e.attr('data-id')},
		dataType: 'json',
		success: function (data)
		{
			var preco = e.attr('data-preco');
			preco = preco.split('R$')[1];
			preco = preco.split(',');
			e.removeClass('loading');
			e.html('<div id="wrap-remover" class="span1"><button title="Remover produto do carrinho">Remover</button></div><div id="descricao" class="span9"><p><span id="qtd">' + e.attr('data-quantidade') + '</span><span>' + e.attr('data-nome') + '</span>' + e.attr('data-descricao') + '</p></div><p id="preco" class="span2">R$ <span>' + preco[0] + '</span>,' + preco[1] + '</p>');

			atualizaValorCarrinho();

		},
		error: function (data, data1, data2)
		{
			
			e.html('<div id="wrap-remover" class="span12"><p style="color: red">Ops! Ocorreu o erro ' + data.status + '. Contate o suporte.</p></div>');

		}
	});
}

function atualizaQtdBD(e)
{
	$.ajax({
		url: templateUrl + 'php/atualiza-qtd-produto-carrinho-bd.php',
		type: 'POST',
		data: {id: e.attr('data-id')},
		dataType: 'json',
		success: function (data)
		{
			var preco = e.attr('data-preco');
			preco = preco.split('R$')[1];
			preco = preco.split(',');
			e.removeClass('loading');
			e.html('<div id="wrap-remover" class="span1"><button title="Remover produto do carrinho">Remover</button></div><div id="descricao" class="span9"><p><span id="qtd">' + e.attr('data-quantidade') + '</span><span>' + e.attr('data-nome') + '</span>' + e.attr('data-descricao') + '</p></div><p id="preco" class="span2">R$ <span>' + preco[0] + '</span>,' + preco[1] + '</p>');

			atualizaValorCarrinho();

		},
		error: function (data, data1, data2)
		{
			
			e.html('<div id="wrap-remover" class="span12"><p style="color: red">Ops! Ocorreu o erro ' + data.status + '. Contate o suporte.</p></div>');

		}
	});
}

function atualizaValorCarrinho()
{
	var precoProduto = "";
	var precoTotal = 0;
	$('#wrap-cart #wrap-produtos-cart ul li').each(function () 
	{
		qtdProduto = parseInt( $(this).find('#qtd').text() );
		precoProduto = $(this).find('#preco').text().split('R$')[1];
		precoProduto = parseFloat(precoProduto.replace(",", "."));
		precoProduto = qtdProduto * precoProduto;
		precoTotal += precoProduto;
	});

	precoTotal = precoTotal.toString();
	precoTotal = precoTotal.split('.');

	precoTotal[1] = (precoTotal[1] == undefined) ? '00' : precoTotal[1];

	precoTotal[1] = (precoTotal[1].length < 2) ? precoTotal[1] + '0' : precoTotal[1];

	$('#wrap-cart #total #wrap-total p').html('<span id="tag-preco">Total:</span> R$ <span id="preco">' + precoTotal[0] + '</span>,' + precoTotal[1]);

	atualizaDisplay();
}

function atualizaDisplay()
{
	var qtdItens = 0;
	$('#wrap-cart #wrap-produtos-cart ul li').each(function() 
	{
		qtdItens += parseInt( $(this).find('#qtd').text() );
	});
	var txtItem = (qtdItens != 1) ? 'Itens' : 'Item';
	var total = $('#wrap-cart #total #wrap-total p').text().split('Total: ')[1];

	$('#wrap-cart #wrap-titulo-cart #display, #header-loja #carrinho-fechado #texto-carrinho p').html('<span class="font22">' + qtdItens + '</span>  ' + txtItem + ' [<span> ' + total + ' </span>]')
}

function openShareBar (imgUrl, nomeProduto, descricaoProduto, urlProduto)
{
	$('#sharebar #bg').show();

	$('#sharebar #wrap-share #wrap-tw').html('<a href="https://twitter.com/share" class="twitter-share-button" data-text="' + nomeProduto + '" data-lang="pt">Tweetar</a>');
	$('#sharebar #wrap-share #wrap-tw .twitter-share-button').attr('data-url', urlProduto);
	$('script#twitter-wjs').remove();
	doTw(document, 'script', 'twitter-wjs');

	$('#sharebar #wrap-share .fb-like').attr('data-href', urlProduto);
	FB.XFBML.parse()


	$('#sharebar #wrap-imgs img').attr('src', imgUrl);
	$('#sharebar #descricao h2').html(nomeProduto);
	$('#sharebar #bg #descricao #texto').html(descricaoProduto);
}

function refreshShare ()
{
	$('#sharebar #wrap-share #wrap-tw').html('<a href="https://twitter.com/share" class="twitter-share-button" data-text="' + nomeProduto + '" data-lang="pt">Tweetar</a>');
	$('#sharebar #wrap-share #wrap-tw .twitter-share-button').attr('data-url', urlProduto);
	$('script#twitter-wjs').remove();
	doTw(document, 'script', 'twitter-wjs');

	$('#sharebar #wrap-share .fb-like').attr('data-href', urlProduto);
	FB.XFBML.parse()
}


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