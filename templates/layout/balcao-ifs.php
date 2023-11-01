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
    <!-- Google tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-TEKMNQCS1Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-TEKMNQCS1Y');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Balcão de Empregos - Inconfidentes</title>
    <meta name="description" content="">
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="/public/img/favicon.png">
    <?= $this->Html->css('estilo') ?>
    <link rel="stylesheet" type="text/css" href="https://camaraourofino.mg.gov.br/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://camaraourofino.mg.gov.br/public//css/contraste.css">
    <style type="text/css" id="operaUserStyle">
        video {
            filter: -opera-shader(url(data:text/plain;base64,dW5pZm9ybSBzaGFkZXIgaUNodW5rOwp1bmlmb3JtIGZsb2F0MiBpQ2h1bmtTaXplOwoKY29uc3QgZmxvYXQgVEhSRVNIT0xEX0FSRUEgPSA4MDAgKiA2MDA7CmNvbnN0IGZsb2F0IE1JTl9BUkVBID0gNDAwICogMTAwOwpjb25zdCBmbG9hdCBNSU5fU1RSSVAgPSAyMDsKY29uc3QgZmxvYXQgTUFSR0lOID0gMTsKCmhhbGYzIHBpeGVsKGNvbnN0IGludCB4LCBjb25zdCBpbnQgeSwgaW4gaGFsZjIgeHkpCnsKCXJldHVybiBpQ2h1bmsuZXZhbCh4eSArIGhhbGYyKHgsIHkpKS5yZ2I7Cn0gIAoKaGFsZjMgUkdYKGhhbGYyIHh5KXsKCWhhbGYzIGYgPQoJcGl4ZWwoLTEsLTEsIHh5KSAqICAxLiArICAgICAgICAgICAgICAgICAgICAgCglwaXhlbCggMCwtMSwgeHkpICogLTEuICsgICAgICAgICAgICAgICAgICAgIAoJcGl4ZWwoIDEsLTEsIHh5KSAqICAxLiArCgkKCXBpeGVsKC0xLCAwLCB4eSkgKiAtMS4gKyAgICAgICAgICAgICAgICAgICAgCglwaXhlbCggMCwgMCwgeHkpICogLTIuICsgICAgICAgICAgICAgICAgICAgICAKCXBpeGVsKCAxLCAwLCB4eSkgKiAtMS4gKyAgICAgICAgICAgICAgICAgICAgIAoJCglwaXhlbCgtMSwgMSwgeHkpICogIDEuICsgICAgICAgICAgICAgICAgICAgICAKCXBpeGVsKCAwLCAxLCB4eSkgKiAtMS4gKyAgICAgICAgICAgICAgICAgICAgIAoJcGl4ZWwoIDEsIDEsIHh5KSAqICAxLgoJOwoJcmV0dXJuIGYgLyAtMjsKfQoKaGFsZjMgUkdYTW9yZShoYWxmMiB4eSl7CgloYWxmMyBmID0KCXBpeGVsKC0xLC0xLCB4eSkgKiAgMS4gKyAgICAgICAgICAgICAgICAgICAgIAoJcGl4ZWwoIDAsLTEsIHh5KSAqIC0xLiArICAgICAgICAgICAgICAgICAgICAKCXBpeGVsKCAxLC0xLCB4eSkgKiAgMS4gKwoJCglwaXhlbCgtMSwgMCwgeHkpICogLTEuICsgICAgICAgICAgICAgICAgICAgIAoJcGl4ZWwoIDAsIDAsIHh5KSAqIC0xLiArICAgICAgICAgICAgICAgICAgICAgCglwaXhlbCggMSwgMCwgeHkpICogLTEuICsgICAgICAgICAgICAgICAgICAgICAKCQoJcGl4ZWwoLTEsIDEsIHh5KSAqICAxLiArICAgICAgICAgICAgICAgICAgICAgCglwaXhlbCggMCwgMSwgeHkpICogLTEuICsgICAgICAgICAgICAgICAgICAgICAKCXBpeGVsKCAxLCAxLCB4eSkgKiAgMS4gCgk7CglyZXR1cm4gZiAvIC0xOwp9CgoKaGFsZjQgbWFpbihmbG9hdDIgeHkpCnsKCWhhbGY0IGNvbG9yID0gaUNodW5rLmV2YWwoeHkpOwoJCglpZiAoY29sb3IuYSA8IDEpIHsKCQlyZXR1cm4gY29sb3I7Cgl9CgkKCWlmIChpQ2h1bmtTaXplLnggKiBpQ2h1bmtTaXplLnkgPCBNSU5fQVJFQSkgewoJCXJldHVybiBjb2xvcjsKCX0KCglpZiAoaUNodW5rU2l6ZS55IDwgTUlOX1NUUklQIHx8IGlDaHVua1NpemUueCA8IE1JTl9TVFJJUCkgewoJCXJldHVybiBjb2xvcjsKCX0KCglpZiAoeHkueCA8IE1BUkdJTiB8fCB4eS54ID4gKGlDaHVua1NpemUueCAtIE1BUkdJTikgfHwKCSAgICB4eS55IDwgTUFSR0lOIHx8IHh5LnkgPiAoaUNodW5rU2l6ZS55IC0gTUFSR0lOKSkgewogICAgCXJldHVybiBjb2xvcjsgICAgCiAgICB9CgkKCWlmIChpQ2h1bmtTaXplLnggKiBpQ2h1bmtTaXplLnkgPiBUSFJFU0hPTERfQVJFQSkgewoJCWNvbG9yID0gaGFsZjQoUkdYTW9yZSh4eSksIDEpOwoJfSBlbHNlIHsKCQljb2xvciA9IGhhbGY0KFJHWCh4eSksIDEpOwoJfQoKCXJldHVybiBjb2xvcjsKfQo=));
        }
    </style>
    <style type="text/css"></style>
    <meta http-equiv="origin-trial"
          content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
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
    </section>
    <?= $this->fetch('content') ?>
    <!--    <div>-->
    <!--        <h4 class="display-6 titulo-sessao fw-bold">Balcão de Empregos</h4>-->
    <!---->
    <!--        <p>Bem-vindo ao Balcão de Empregos, onde você pode encontrar oportunidades de emprego e candidatos qualificados-->
    <!--            para preencher suas vagas. Faça login para acessar sua conta ou crie uma nova conta para começar.</p>-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-6 my-3">-->
    <!--                <div class="card">-->
    <!--                    <div class="card-header">-->
    <!--                        Acesso para Pessoas-->
    <!--                    </div>-->
    <!--                    <div class="card-body">-->
    <!--                        <form action="/balcao/logar" method="post">-->
    <!--                            <div class="mb-3">-->
    <!--                                <label for="txt-email" class="form-label">Email</label>-->
    <!--                                <input type="email" class="form-control" id="email" name="email" value="" required="">-->
    <!--                                <spam class="text-danger"></spam>-->
    <!--                            </div>-->
    <!--                            <div class="mb-3">-->
    <!--                                <label for="senha" class="form-label">Senha</label>-->
    <!--                                <input type="password" class="form-control" id="senha" name="senha" required="">-->
    <!--                                <spam class="text-danger"></spam>-->
    <!--                            </div>-->
    <!--                            <input type="hidden" name="csrf_test_name" value="82f28aca4b0a408d58a42b85f398edfd"> <input-->
    <!--                                type="submit" class="btn btn-primary btn-busca mb-3" value="Entrar">-->
    <!--                            <div style="display:none"><label>Preencha este campo para continuar</label><input-->
    <!--                                    type="text" name="campo1" value=""></div>-->
    <!--                        </form>-->
    <!--                        <div class="mt-3 text-center">-->
    <!--                            <a href="/balcao/esqueciasenha/1" class="text-decoration-none text-dark"><i-->
    <!--                                    class="bi bi-question-circle-fill"></i> Esqueceu a senha?</a> |-->
    <!--                            <a href="/balcao/cadastro/curriculo" class="text-decoration-none text-dark"><i-->
    <!--                                    class="bi bi-person-fill-add"></i> Novo cadastro</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-6 my-3">-->
    <!--                <div class="card">-->
    <!--                    <div class="card-header">-->
    <!--                        Acesso para Empresas-->
    <!--                    </div>-->
    <!--                    <div class="card-body">-->
    <!--                        <form action="/empresa/logar" method="post">-->
    <!--                            <div class="mb-3">-->
    <!--                                <label for="txt-email" class="form-label">Email</label>-->
    <!--                                <input type="email" class="form-control" id="email" name="email" value="" required="">-->
    <!--                                <spam class="text-danger"></spam>-->
    <!--                            </div>-->
    <!--                            <div class="mb-3">-->
    <!--                                <label for="senha" class="form-label">Senha</label>-->
    <!--                                <input type="password" class="form-control" id="senha" name="senha" required="">-->
    <!--                                <spam class="text-danger"></spam>-->
    <!--                            </div>-->
    <!--                            <input type="hidden" name="csrf_test_name" value="82f28aca4b0a408d58a42b85f398edfd"> <input-->
    <!--                                type="submit" class="btn btn-primary btn-busca mb-3" value="Entrar">-->
    <!--                            <div style="display:none"><label>Preencha este campo para continuar</label><input-->
    <!--                                    type="text" name="campo1" value=""></div>-->
    <!--                        </form>-->
    <!--                        <div class="mt-3 text-center">-->
    <!--                            <a href="/balcao/esqueciasenha/2" class="text-decoration-none text-dark"><i-->
    <!--                                    class="bi bi-question-circle-fill"></i> Esqueceu a senha?</a> |-->
    <!--                            <a href="/balcao/cadastro/empresa" class="text-decoration-none text-dark"><i-->
    <!--                                    class="bi bi-person-fill-add"></i> Novo cadastro de empresa</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->


</div>
<?= $this->element('footer') ?>
<script type="text/javascript" src="https://camaraourofino.mg.gov.br/public/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://camaraourofino.mg.gov.br/public/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://camaraourofino.mg.gov.br/public/js/estilo.js"></script>

</body>
</html>
