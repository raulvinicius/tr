<!-- ================FOOTER================ -->
            <footer>
                <?php $urlLoja = strpos($_SERVER["REQUEST_URI"], "/loja"); ?>
                <div  id="bg-sombra-base" <?php echo ($urlLoja) ? "class=\"loja\"" : ""; ?>></div>
                <div  id="bg-base" class="container-fluid <?php echo ($urlLoja) ? "loja" : ""; ?>">
                    <div class="container">
                        <?php if ($urlLoja) : ?>
                            <div class="row-fluid">
                                <nav class="">
                                    <ul class="span12">
                                        <li><a class="animado-02-in-out" href="#">A Loja [hi]</a></li>
                                        <li><a class="animado-02-in-out" href="#">Regulamentos</a></li>
                                        <li><a class="animado-02-in-out" href="#">Entrega de produtos</a></li>
                                        <li><a class="animado-02-in-out" href="#">Fale Conosco</a></li>
                                        <li><a class="animado-02-in-out" href="#">F.A.Q.</a></li>
                                        <li><a class="animado-02-in-out" href="#">Dúvidas e Sugestões</a></li>
                                        <li><a class="animado-02-in-out" href="#">Orçamentos</a></li>
                                    </ul>
                                </nav>
                            </div>
                        <?php endif; ?>
                        <div class="row-fluid">
                            <p class="span12">© Copyright - Todos os direitos reservados |<span> SHCS CR - Quadra 505 - Bloco C - Entrada 14 </span>| Fone: (61) 3244-2565</p>
                        </div>
                    </div>
                </div>
            </footer>
<!-- ================FIM FOOTER================ -->


        </div>



















<!-- 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 -->
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url') ?>/js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.cookie.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/Chart.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.form.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.validate.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/bootstrap.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!-- 
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
 -->

    </body>
</html>
