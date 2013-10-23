
 <?php get_header() ?>

<!-- sections vem aqui -->
<section id="institucional" class="bg-caderno">   
    <div id="conteudo" class="container caderno-wrap">

        <div id="finalizar" class="row-fluid">


            <div class="span6">
                <h4>Finalizar Pedido</h4>
            </div>
            <div class="span6">
                <img src="<?php bloginfo("template_url") ?>/img/trilha-step-identificacao.png">
            </div>

        </div>

        <div class="row-fluid">
            <div id="wrap-finalizar" class="span10 offset1">

                <div id="wrap-opcao-cadastro">
                    <label id="lbl-sou-cadastrado-login" for="sou-cadastrado-login">
                        <input id="sou-cadastrado-login" type="radio" name="cadastro" value="sou-cadastrado">
                    </label>
                    
                    <label id="lbl-fazer-cadastro-login" for="sou-cadastrado-login">
                        <input id="fazer-cadastro-login" type="radio" name="cadastro" value="fazer-cadastro">
                    </label>

                    <span><p>ou</p></span>
                </div>

                <form>
                        <label id="label-login" class="control-label" for="input-login">Login</label> <br>
                        <input type="text" id="input-login" class="input-small">  <br>

                        <label class="control-label" for="input-password">Senha</label> <br>
                        <input type="password" id="input-password" class="input-small">


                    <input class="submit-seta" type="submit" value="ok">
                </form>


             </div>  
        </div>  

        <div class="row-fluid">
            <div id="rodape-finalizar" class="span10 offset1">
                <ul>
                    <li><a href="#">Esqueci meu login</a></li>
                    <li><a href="#">Esqueci minha senha</a></li>
                </ul>
            </div>
        </div>

    </div>
</section>


<?php get_footer() ?>
