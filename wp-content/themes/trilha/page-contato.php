<?php get_header(); ?>

<!-- ================CONTATO================ -->
            <div id="contato" class="container-fluid">
                <div class="container">

                    <div class="row-fluid">
                        <div class="span12">
                            <h1>Contato</h1>
                            <p>Entre em contato conosco para saber mais dos nossos serviços.</p>
                        </div>
                    </div>


                    <div id="wrap-contato" class="row-fluid">

                        <div id="formulario" class="span6">

                            
                            <div id="process" class="alert">
                              Enviando e-mail...
                            </div>

                            <div id="success" class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                              <strong>Sucesso!</strong> Seu e-mail foi enviado. Entraremos em contato em breve.
                            </div>

                            <div id="error" class="alert alert-error">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                              <strong>Opa!</strong> Houver um erro ao enviar seu e-mail, tente novamente por favor.
                            </div>

                            <form id="form-contato" action="<?php bloginfo('url') ?>/envia-email" method="POST">

                                <div class="control-group">
                                    <label class="control-label" for="input-nome">Nome</label>
                                    <div class="controls">
                                        <input type="text" name="nome" id="input-nome" class="required">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="input-email">E-mail</label>
                                    <div class="controls">
                                        <input type="email" name="email" id="input-email" class="required">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="input-mensagem">Mensagem</label>
                                    <div class="controls">
                                        <textarea name="mensagem" id="input-mensagem" class="required"></textarea>  
                                    </div>
                                </div>

                                <input type="submit" value="Enviar">
                            </form>

                            <img src="<?php bloginfo('template_url') ?>/img/trilha-sombra-form.png">
                        </div>

                        <div class="span6">
                            <p><strong>Para mais informações:</strong></p>

                            <span>Fone</span>
                            <p>(61) 3244-2565</p>

                            <span>Endereço:</span>
                            <p>SHCS CR Quadra 505 - Bloco C</br>
                            Entrada 14 - Brasília-DF</p>
                        </div>

                    </div>


                </div>
            </div>
<!-- ================FIM CONTATO================ -->


<?php get_footer(); ?>