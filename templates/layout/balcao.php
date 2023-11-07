<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<!doctype html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Balcão de Empregos - Inconfidentes</title>
    <meta name="description" content="">
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="/public/img/favicon.png">
    <?= $this->Html->css([
        'estilo',
        'bootstrap.min',
        'contraste',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css'
    ]) ?>
    <?php
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div class="header-acessibilidade">
    <div class="container py-1">
        <div class="row">
            <div class="col-lg-6">
                <div class="border-left border-right px-3">
                    <ul>
                        <li><a class="geralcontraste_2 text-decoration-none" title="Contraste" href="#"
                               id="altocontraste" accesskey="0" onclick="window.toggleContrast()"><i
                                    class="bi bi-circle-half"></i> Contraste<span>0</span></a></li>
                    </ul>
                </div>
                <span class="px-3 border-right"><a href="/acessibilidade" title="Acessibilidade"
                                                   class="text-decoration-none"><i class="bi bi-eye-fill"></i> Acessibilidade</a></span>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div id="acessibilidade" class="acessibilidade">
                    <ul class="float-end">

                        <li><a accesskey="1" href="#conteudo" id="link-1" class="text-decoration-none">Ir para o
                                conteúdo<span>1</span></a></li>

                        <li><a accesskey="2" href="#menu" id="link-2" class="text-decoration-none">Ir para o
                                menu<span>2</span></a></li>

                        <li><a accesskey="3" href="#busca" id="link-3" class="text-decoration-none">Ir para a
                                busca<span>3</span></a></li>

                        <li><a accesskey="4" href="#rodape" id="link-4" class="text-decoration-none">Ir para o
                                rodapé<span>4</span></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="bg-topo">
    <?= $this->element('nav-navbar') ?>
</header>
<div id="conteudo" class="container py-2" style="min-height: 650px;">
    <?= $this->fetch('content') ?>
</div>
<?= $this->element('footer') ?>
<?= $this->Html->script([
    'jquery-3.4.1.min',
    'bootstrap.bundle.min',
    'estilo'
]) ?>
<!--<script type="text/javascript" src="https://camaraourofino.mg.gov.br/public/js/jquery-3.4.1.min.js"></script>-->
<!--<script type="text/javascript" src="https://camaraourofino.mg.gov.br/public/js/bootstrap.bundle.min.js"></script>-->
<!--<script type="text/javascript" src="https://camaraourofino.mg.gov.br/public/js/estilo.js"></script>-->

</body>
</html>
