<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<div>
    <h4 class="display-6 titulo-sessao fw-bold">Balcão de Empregos</h4>
    <p>Bem-vindo ao Balcão de Empregos, onde você pode encontrar oportunidades de emprego e candidatos qualificados para
        preencher suas vagas. Faça login para acessar sua conta ou crie uma nova conta para começar.</p>
    <div class="row">
        <div class="col-md-12 my-6">
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
                        <div style="display:none"><label>Preencha este campo para continuar</label><input type="text"
                                                                                                          name="campo1"
                                                                                                          value="">
                        </div>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="/balcao/esqueciasenha/2" class="text-decoration-none text-dark"><i
                                class="bi bi-question-circle-fill"></i> Esqueceu a senha?</a> |
                        <a href="/balcao/cadastro/empresa" class="text-decoration-none text-dark"><i
                                class="bi bi-person-fill-add"></i> Novo cadastro de empresa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
