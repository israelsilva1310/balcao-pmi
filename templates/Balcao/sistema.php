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
            <li class="breadcrumb-item active" aria-current="page">Sistema</li>

        </ol>
    </section>

    <div>

        <a href="/balcao/sair" class="float-end text-decoration-none mx-2"><i class="bi bi-door-open-fill"></i> Sair do
            Sistema</a>
        <a href="/balcao/sistema/participei" class="float-end text-decoration-none mx-2"><i
                class="bi bi-card-checklist"></i> Vagas que Participei</a>
        <h4 class="display-6 titulo-sessao fw-bold">Balcão de Empregos</h4>
    </div>
    <div class="row justify-content-center my-3">
        <div class="col-md-9">
            Olá, <b>Israel da Cruz Alves da Silva</b> bem vindo(a) ao Sistema de Balcão de Empregos da Câmara Municipal
            de Ouro Fino, aqui você pode cadastrar e atualizar seu curriculo, imprimir e se canditar a vagas de
            empregos, lembre-se de sempre manter seu curriculo atualizado e também de periodicamente acessar o sistema
            para verificar se tem novas vagas disponíveis!
        </div>
        <div class="col-md-3 text-end">
            <a href="/balcao/sistema/curriculo" class="btn btn-primary btn-lg my-1"><i class="bi bi-pencil-square"></i>
                Criar um Curriculo</a>
        </div>
    </div>
    <div class="mt-5">
        <h4 class="display-6 titulo-sessao fw-bold text-center">Vagas Disponíveis</h4>

        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">CAIXA/VENDEDOR</h5>
                        <p><b>Número de Vagas:</b> 3<br>
                            <b>Salário:</b> A Combinar </p>
                        <div class="text-center">
                            <a type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                               data-bs-target="#info59"><i class="bi bi-info-circle"></i> Informações</a>
                            <a href="/balcao/sistema/candidatar/59" class="btn btn-success mb-2"><i
                                    class="bi bi-check-square"></i> Quero me Candidatar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Novo Modal -->
            <div class="modal fade" id="info59" tabindex="-1" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="">Descrição da Vaga</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5 class="card-title text-center">CAIXA/VENDEDOR</h5>
                            <p><b>Número de Vagas:</b> 3<br>
                                <b>Salário:</b> A Combinar <br>
                                <b>Descrição da Vaga:</b><br>
                                Abertura e fechamento de caixa, lançamento no sistema e todo o controle do caixa

                                Necessário conhecer o sistema Dbsoft<br>
                                <b>Benefícios: </b><br>
                                Salário + comissão </p>
                            <h5>Requisitos Mínimos</h5>
                            <p><b>Escolaridade: </b> Ensino Médio Completo<br>
                                <b>Informática: </b> Básico<br>
                                <b>Pacote Office: </b> Intermediário<br>
                                <b>Outros Requisitos: </b><br>
                                - Proativa, que queira crescer na empresa
                                - Responsável
                                - Comprometida
                                - Interessada em apreender </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <a href="/balcao/sistema/candidatar/59" class="btn btn-success"><i
                                    class="bi bi-check-square"></i> Quero me Candidatar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">

                <nav aria-label="Navegação de páginas">
                    <ul class="pagination justify-content-center">

                        <li class="active page-item">
                            <a class="page-link"
                               href="https://camaraourofino.mg.gov.br/index.php/balcao/sistema?page=1">
                                1 </a>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
