<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>

<div id="conteudo" class="container py-2" style="min-height: 650px;">
    <section aria-label="breadcrumb" class="bg-secondary-subtle mb-3 px-2 py-2 rounded">
        <ol class="breadcrumb text-uppercase mb-0">
            <li class="breadcrumb-item"><a href="https://camaraourofino.mg.gov.br/"
                                           class="text-decoration-none text-secondary-emphasis">Página Inicial</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="https://camaraourofino.mg.gov.br/balcao"
                                                                      class="text-decoration-none text-secondary-emphasis">Balcão
                    de Empregos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Entrar no sistema</li>
        </ol>
    </section>
    <div>
        <h4 class="display-6 titulo-sessao fw-bold">Balcão de Empregos</h4>

        <p>Bem-vindo ao Balcão de Empregos, onde você pode encontrar oportunidades de emprego e candidatos qualificados
            para preencher suas vagas. Faça login para acessar sua conta ou crie uma nova conta para começar.</p>
        <div class="row">
            <div class="col-md-6 my-3">
                <div class="card">
                    <div class="card-header">
                        Acesso para Pessoas
                    </div>
                    <div class="card-body">
                        <form action="/balcao/logar" method="post">
                            <div class="mb-3">
                                <label for="txt-email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="" required="">
                                <spam class="text-danger"></spam>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required="">
                                <spam class="text-danger"></spam>
                            </div>
                            <input type="hidden" name="csrf_test_name" value="82f28aca4b0a408d58a42b85f398edfd"> <input
                                type="submit" class="btn btn-primary btn-busca mb-3" value="Entrar">
                            <div style="display:none"><label>Preencha este campo para continuar</label><input
                                    type="text" name="campo1" value=""></div>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="/balcao/esqueciasenha/1" class="text-decoration-none text-dark"><i
                                    class="bi bi-question-circle-fill"></i> Esqueceu a senha?</a> |
                            <a href="./Users/add" class="text-decoration-none text-dark"><i
                                    class="bi bi-person-fill-add"></i> Novo cadastro</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="card">
                    <div class="card-header">
                        Acesso para Empresas
                    </div>
                    <div class="card-body">
                        <form action="/empresa/logar" method="post">
                            <div class="mb-3">
                                <label for="txt-email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="" required="">
                                <spam class="text-danger"></spam>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required="">
                                <spam class="text-danger"></spam>
                            </div>
                            <input type="hidden" name="csrf_test_name" value="82f28aca4b0a408d58a42b85f398edfd"> <input
                                type="submit" class="btn btn-primary btn-busca mb-3" value="Entrar">
                            <div style="display:none"><label>Preencha este campo para continuar</label><input
                                    type="text" name="campo1" value=""></div>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="/balcao/esqueciasenha/2" class="text-decoration-none text-dark"><i
                                    class="bi bi-question-circle-fill"></i> Esqueceu a senha?</a> |
                            <a href="./Users/add" class="text-decoration-none text-dark"><i
                                    class="bi bi-person-fill-add"></i> Novo cadastro de empresa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
