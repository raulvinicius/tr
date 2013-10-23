<?php get_header(); ?>

<!-- ================HI================ -->
            <div id="wrap-hi" class="container-fluid">
                <div class="container">

                    <div class="row-fluid">
                        <div class="span12">
                            <h1>O [hi]School</h1>
                            <h2>“Despertar nos jovens todo seu potencial </br>e os inspirar a colocá-lo em prática desde já.”</h2>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <p>O [hi]School é um projeto social realizado pela empresa Trilha Cursos e Palestras, que tem como foco alunos do ensino médio de escolas públicas e privadas do Distrito Federal.</p>
                            <p>Por meio de palestras realizadas por um grupo de voluntários, buscamos resgatar valores como humildade, integridade, responsabilidade, serviço, perdão e transcendência, visando à construção de um mundo melhor.</p>
                        </div>

                        <div class="span6">
                            <p>O projeto é totalmente gratuito para as escolas e seus alunos.</p>
                            <p>O símbolo [hi] vem da ideia de um “oi” somado a um abraço (significado do colchetes na linguagem dos internautas), ou seja, um oi com amor e com calor humano nas
                            escolas.</p>
                            <p>A missão do [hi]School é despertar nos jovens todo o seu potencial e os inspirar a colocá-lo em prática desde já.</p>
                        </div>
                    </div>



                </div>


            </div>

            <div id="placar" class="container-fluid">
                <div class="container">
                    <div class="row-fluid">


                        <?php 

                            $alunos = number_format( get_field('total_alunos'), 0, ',', '.');
                            $alunos2013 = number_format( get_field('alunos_2013'), 0, ',', '.');
                            $escolas = number_format( get_field('total_escolas'), 0, ',', '.');
                            $escolas2013 = number_format( get_field('escolas_2013'), 0, ',', '.');
                            $palestras = number_format( get_field('total_palestras'), 0, ',', '.');
                            $palestras2013 = number_format( get_field('palestras_2013'), 0, ',', '.');

                         ?>
                        <div id="alunos" class="span4">
                            <canvas id="chart-alunos" width="182" height="182"></canvas>
                            <h3>Alunos</h3>
                            <p><span>Total: </span><?php echo $alunos ?></p>
                            <p><span>Em 2013: </span>10.878</p>
                        </div>

                        <div id="escolas" class="span4">
                            <canvas id="chart-escolas" width="182" height="182"></canvas>
                            <h3>Escolas</h3>
                            <p><span>Total: </span>71</p>
                            <p><span>Em 2013: </span>34</p>
                        </div>

                        <div id="palestras" class="span4">
                            <canvas id="chart-palestras" width="182" height="182"></canvas>
                            <h3>Palestras</h3>
                            <p><span>Total: </span>261</p>
                            <p><span>Em 2013: </span>114</p>
                        </div>

                    </div>
                </div>
            </div>
<!-- ================FIM HI================ -->


<?php get_footer(); ?>