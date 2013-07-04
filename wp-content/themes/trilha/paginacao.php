    <div id="paginacao" class="fluid-container">
    <div class="container">
        <div class="row-fluid">

            <div id="paginas" class="span6">
                <ul>
                    <li><a class="btn-passar anterior" href="#">Anterior</a></li>
                    <li><a class="numeracao" href="#">1</a></li>
                    <li><a class="numeracao" href="#">2</a></li>
                    <li><a class="numeracao" href="#">3</a></li>
                    <li><a class="numeracao" href="#">4</a></li>
                    <li><a class="numeracao" href="#">5</a></li>
                    <li><a class="btn-passar proxima" href="#">Próxima</a></li>
                </ul>
            </div>

            <div id="itens-pagina" class="span3">
                <div class="span1">
                    <img class="divisao-paginacao" src="<?php bloginfo('template_url') ?>/img/trilha-divisao-paginacao.png">
                </div>

                <p class="span10">
                    Itens por página
                    <select width="100">
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>40</option>
                    </select>
                </p>

                <div class="span1">
                    <img class="divisao-paginacao" src="<?php bloginfo('template_url') ?>/img/trilha-divisao-paginacao.png">
                </div>
            </div>

            <form class="form-search span3">
                <div class="input-append">
                    <input type="text" class="span8 search-query">
                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                </div>
            </form>

        </div>
    </div>           
</div>
