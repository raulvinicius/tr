<?php

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = "Contato pelo site";
	$mensagem = $_POST['mensagem'];

	$url = get_bloginfo('url');
	$tUrl = get_bloginfo('template_url');

	$to = "contato@trilhacursos.com.br";

	$msgParaAdmin ="
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
	<div style='width: 100%; b: #fffbce; padding: 50px 0'>
		<div style='background: white; box-shadow: 0 0 10px #0074bf; border: 1px solid #0074bf; width: 460px; padding: 0 20px 20px 20px; border-radius: 3px; margin: 0 auto;'>
			<div  style='font-family:Arial, sans;'>
				<img src='$tUrl/img/trilha-logo.jpg' style='margin: 20px 0 10px -10px'>
				<h1 style='font-size:16px; margin-bottom: 10px; color: #0074bf;'><b>CONTATO / D&Uacute;VIDA</b></h1>
				<p style='font-size:14px; margin-bottom: 10px; color: #999;'><b>Um contato foi feito atrav&eacute;s do site.</b></p>
				<div style='width: 90%; background: #f5f5f5; padding: 1% 5%; margin-top: 20px'>
					<p style='border-bottom: 1px dotted #fff; padding: 10px 0'><b style='color: #ba8b4a'>Nome: </b>$nome</p>
					<p style='border-bottom: 1px dotted #fff; padding: 10px 0'><b style='color: #ba8b4a'>E-mail: </b>$email</p>
					<p style='border-bottom: 1px dotted #fff; padding: 10px 0'><b style='color: #ba8b4a'>Mensagem: </b>$mensagem</p>
				</div>
			</div>
		</div>
	</div>
	";

	$msgParaUsuario  = "
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
	<div style='width: 100%; background: #EFF5FF; padding: 50px 0'>
		<div style='background: white; box-shadow: 0 0 10px #0074bf; border: 1px solid #0074bf; width: 460px; padding: 0 20px 20px 20px; border-radius: 3px; margin: 0 auto;'>
			<div  style='font-family:Arial, sans;'>
				<img src='$tUrl/img/trilha-logo.jpg' style='margin: 20px 0 10px -10px'>
				<h1 style='font-size:16px; margin-bottom: 10px; color: #0074bf; text-transform: uppercase;'><b>CONFIRMA&Ccedil;&Atilde;O DE CONTATO</b></h1>
				<p style='font-size:14px; margin-bottom: 10px; color: #666; line-height: 24px'>Ol&aacute; <b>$nome</b>.<br/><br/>
					Recebemos seu contato e responderemos o mais breve poss&iacute;vel.<br>
					Obrigado.<br>
			</div>
			<p style='font-style: italic; color:#999; font-size:10px; font-family: Arial'>Observa&ccedil;&atilde;o: N&atilde;o &eacute; necess&aacute;rio responder este e-mail.</p>
		</div>
	</div>
	";
		
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: contato@trilhacursos.com.br\r\n"; // remetente
	$headers .= "Return-Path: contato@trilhacursos.com.br\r\n"; // return-path

	if($_SERVER['HTTP_HOST'] != "localhost")
	{
		mail($to,utf8_decode($assunto),utf8_decode($msgParaAdmin),$headers) or die("erro");
		mail($email,utf8_decode("Confirmação de Contato"),utf8_decode($msgParaUsuario),$headers) or die("erro");
	}

	echo "sucesso";