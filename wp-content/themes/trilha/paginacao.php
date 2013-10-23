    <div id="paginacao" class="fluid-container">
    <div class="container">
        <div class="row-fluid">

            <div id="paginas" class="span6">
                <ul>
                    <?php 

                        $request = $_SERVER[REQUEST_URI];
                        $request = explode('?', $request);
                        $qr = parse_url($_SERVER[REQUEST_URI]);
                        $qr = $qr['query'];
                        parse_str($qr, $qr);

                        $aPg = max( intval( $_GET['pg'] ), 1 );

                        if ( $aPg > 1 ) : 

                            $linkAnterior = '';
                            $qr['pg'] = $aPg - 1;

                            foreach($qr as $key=>$value) :

                                $linkAnterior .= $key . '=' . $value . '&';

                            endforeach;

                            $linkAnterior = substr($linkAnterior, 0, -1);

                            ?>

                        <li><a class="btn-passar anterior" href="<?php echo 'http://' . $_SERVER[HTTP_HOST] . $request[0] . '?' . $linkAnterior ?>">Anterior</a></li>

                    <?php endif; ?>

                    <?php 

                        if ($nPages > 1) : 

                            for ($i = 0; $i < min($nPages, 10); $i ++) : 
                                $qrStr = '';
                                $qr['pg'] = $i + 1;

                                foreach($qr as $key=>$value) :

                                    $qrStr .= $key . '=' . $value . '&';

                                endforeach;

                                $qrStr = substr($qrStr, 0, -1);

                        ?>

                            <li><a class="numeracao<?php echo ( $aPg == ( $i + 1 ) ) ? ' atual' : '' ?>" <?php echo ( $aPg == ( $i + 1 ) ) ? '' : 'href="http://' . $_SERVER[HTTP_HOST] . $request[0] . '?' . $qrStr . '"' ?>><?php echo $i + 1 ?></a></li>

                        <?php 

                            endfor; 
                        endif;

                    ?>

                    <?php 
                    if ( $aPg != $nPages ) : 


                        $linkProximo = '';
                        $qr['pg'] = $aPg + 1;

                        foreach($qr as $key=>$value) :

                            $linkProximo .= $key . '=' . $value . '&';

                        endforeach;

                        $linkProximo = substr($linkProximo, 0, -1);
                    ?>

                        <li><a class="btn-passar proxima" href="<?php echo 'http://' . $_SERVER[HTTP_HOST] . $request[0] . '?' . $linkProximo ?>">Próxima</a></li>

                    <?php endif; ?>
                </ul>
            </div>

            <div id="itens-pagina" class="span3">
                <div class="span1">
                    <img class="divisao-paginacao" src="<?php bloginfo('template_url') ?>/img/trilha-divisao-paginacao.png">
                </div>

                <p class="span10">
                    Itens por página
                    <select width="100">
                        <option <?php echo doSelect($ppp, '10') ?> >10</option>
                        <option <?php echo doSelect($ppp, '20') ?> >20</option>
                        <option <?php echo doSelect($ppp, '30') ?> >30</option>
                        <option <?php echo doSelect($ppp, '40') ?> >40</option>
                    </select>
                </p>

                <div class="span1">
                    <img class="divisao-paginacao" src="<?php bloginfo('template_url') ?>/img/trilha-divisao-paginacao.png">
                </div>
            </div>

            <form class="form-search span3">
                <div class="input-append">
                    <form action='<?php bloginfo('template_url') ?>'>
                        <input name="q" type="text" class="span8 search-query" value="<?php echo ( isset( $_GET['q'] ) ) ? $_GET['q'] : ''; ?>">
                        <button type="submit" class="btn"><i class="icon-search"></i></button>
                    </form>
                </div>
            </form>

        </div>
    </div>           
</div>
