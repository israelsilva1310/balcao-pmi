<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/ ?>
<div id="conteudo" class="container py-2" style="min-height: 650px;">
    <section aria - label="breadcrumb" class="bg-secondary-subtle mb-3 px-2 py-2 rounded">
        <ol class="breadcrumb text-uppercase mb-0">
            <li class="breadcrumb-item"><a href="https://inconfidentes.mg.gov.br/"
                                           class="text-decoration-none text-secondary-emphasis"> Página Inicial </a>
            </li>
            <li class="breadcrumb-item active" aria - current="page"><a href="https://camaraourofino.mg.gov.br/balcao"
                                                                        class="text-decoration-none text-secondary-emphasis">
                    Balcão de Empregos </a></li>
            <li class="breadcrumb-item active" aria - current="page"> Cadastro</li>
        </ol>
    </section>
    <div class="row">
        <h4 class="display-6 titulo-sessao fw-bold"> Cadastro</h4>

        <p> Para iniciar o seu cadastro, por favor, preencha o formulário abaixo e clique em "Enviar" . Em seguida, você
            receberá um email de confirmação no email fornecido .</p>

        <form action="/cadastrar/empresa" method="post">

            <div class="mb-2">
                <label for="nome" class="form-label"> CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" value="" required="">
                <spam class="text-danger"></spam>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label"> Empresa</label>
                <input type="text" class="form-control" id="nome" name="nome" value="" required="">
                <spam class="text-danger"></spam>
            </div>
            <div class="mb-3">
                <label for="representante" class="form-label"> Nome Completo do Representante </label>
                <input type="text" class="form-control" id="representante" name="representante" value="" required="">
                <spam class="text-danger"></spam>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label"> Telefone / Celular</label>
                <input class="form-control" type="text" id="telefone" name="telefone" onkeypress="mask(this, mphone);"
                       onblur="mask(this, mphone);" value="" required="">
                <spam class="text-danger"></spam>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"> Email</label>
                <input type="email" class="form-control" id="email" name="email" value="" required="">
                <spam class="text-danger"></spam>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label"> Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" minlength="8" required="">
                <div class="form-text">
                    Tamanho mínimo de 8 digitos .
                </div>
                <spam class="text-danger"></spam>
            </div>
            <div class="mb-3">
                <label for="senha_c" class="form-label"> Confirmar Senha </label>
                <input type="password" class="form-control" id="senha_c" name="senha_c" minlength="8" required="">
                <spam class="text-danger"></spam>
            </div>
            <input type="hidden" name="csrf_test_name" value="82f28aca4b0a408d58a42b85f398edfd"> <input type="submit"
                                                                                                        class="btn btn-primary btn-busca mb-3"
                                                                                                        value="Enviar">
            <div style="display:none"><label> Preencha este campo para continuar </label><input type="text"
                                                                                                name="campo1"
                                                                                                value=""></div>
        </form>
        <div style="display:none"><label> Preencha este campo para continuar </label><input type="text" name="campo1"
                                                                                            value=""></div>
    </div>
</div>
