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
            <li class="breadcrumb-item active" aria-current="page">Currículo</li>

        </ol>

    </section>
    <div>
        <a href="/balcao/sair" class="float-end text-decoration-none"><i class="bi bi-door-open-fill"></i> Sair do
            Sistema</a>
        <h4 class="display-6 titulo-sessao fw-bold">Balcão de Empregos</h4>
        <p>Atualize seu curriculo sempre que houver necessidade isto irá te ajudar a conseguir boas chances nas vagas
            disponíveis!</p>
    </div>
    <form action="/balcao/sistema/salvar" method="post">
        <div class="card my-2">
            <div class="card-header">
                Informações Pessoais
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 my-2">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome completo"
                               value="Israel da Cruz Alves da Silva" required="">
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="nascimento" value="" required="">
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="estado_civil" class="form-label">Estado Civil</label>
                        <select class="form-select" name="estado_civil" required="">
                            <option>Escolha uma opção...</option>
                            <option value="1">Solteiro(a)</option>
                            <option value="2">Casado(a)</option>
                            <option value="3">Divorciado(a)</option>
                            <option value="4">Viúvo(a)</option>
                        </select>
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="moto" class="form-label">Possui Habilitação de Moto?</label>
                        <select class="form-select" name="moto" required="">
                            <option value="1">Não</option>
                            <option value="2">Sim</option>
                        </select>
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="carro" class="form-label">Habilitação de Veículos</label>
                        <select class="form-select" name="carro">
                            <option>Não Possui</option>
                            <option value="1">B</option>
                            <option value="2">C</option>
                            <option value="3">D</option>
                            <option value="4">E</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
        <div class="card my-2">
            <div class="card-header">
                Contato e Endereço
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 my-2">
                        <label for="telefone">Celular/WhatsApp</label>
                        <input class="form-control" type="text" id="telefone" name="telefone"
                               onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="" required="">
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="contato_tipo" class="form-label">Tipo de Contato</label>
                        <select class="form-select" name="contato_tipo">
                            <option value="1">Contato</option>
                            <option value="2">Recado</option>
                        </select>
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="cep">CEP</label>
                        <input class="form-control" type="cep" id="cep" name="cep"
                               placeholder="Digite seu Código Postal" maxlength="9" onkeyup="handleZipCode(event)"
                               value="" required="">
                    </div>
                    <div class="col-md-5 my-2">
                        <label for="endereco">Endereço</label>
                        <input class="form-control" type="text" id="endereco" name="endereco"
                               placeholder="Exemplo: Rua Treze de Maio" value="" required="">
                    </div>
                    <div class="col-md-1 my-2">
                        <label for="numero">Número</label>
                        <input class="form-control" type="text" id="numero" name="numero" placeholder="Exemplo: 9999"
                               value="" required="">
                    </div>
                    <div class="col-md-3 my-2">
                        <label for="bairro">Bairro</label>
                        <input class="form-control" type="text" id="bairro" name="bairro"
                               placeholder="Digite o nome do bairro" value="" required="">
                    </div>
                    <div class="col-md-2 my-2">
                        <label for="cidade">Cidade</label>
                        <input class="form-control" type="text" id="cidade" name="cidade" placeholder="..." readonly=""
                               value="" required="">
                    </div>
                    <div class="col-md-1 my-2">
                        <label for="estado">Estado</label>
                        <input class="form-control" type="text" id="estado" name="estado" placeholder="..." readonly=""
                               value="" required="">
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-2">
            <div class="card-header">
                Formação Acadêmica
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 my-2">
                        <label for="instrucao" class="form-label">Grau de Instrução</label>
                        <select class="form-select" id="instrucao" name="instrucao" required="">
                            <option>Selecione uma opção...</option>
                            <option value="1">Ensino Fundamental Incompleto</option>
                            <option value="2">Ensino Fundamental Completo</option>
                            <option value="3">Ensino Médio Incompleto</option>
                            <option value="4">Ensino Médio Completo</option>
                            <option value="5">Superior Incompleto</option>
                            <option value="6">Superior Cursando</option>
                            <option value="7">Superior Completo</option>
                            <option value="8">Pós-graduação</option>
                            <option value="9">Mestrado</option>
                            <option value="10">Doutorado</option>
                            <option value="11">Pós Doutorado</option>
                            <option value="12">Livre Docência</option>
                        </select>
                    </div>
                    <div class="col-md-8 my-2">
                        <label for="curso" class="form-label">Curso de Formação</label>
                        <input type="text" class="form-control" name="curso"
                               placeholder="Digite o Nome do Curso de Formação..." value="">
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="escola" class="form-label">Instituição de Ensino (Formação)</label>
                        <input type="text" class="form-control" name="escola"
                               placeholder="Digite o nome da Escola ou Faculdade que estudou..." value="">
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="inicio" class="form-label">Inicio (Ano)</label>
                        <input type="number" class="form-control" name="inicio" value="">
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="fim" class="form-label">Fim (Ano)</label>
                        <input type="number" class="form-control" name="fim" value="">
                    </div>
                    <div id="divgraduacao" class="col-md-12 my-2" style="display:none">
                        <label for="graduacao" id="lposgraduacao" class="form-label" style="display:none">Pós
                            Graduação</label>
                        <label for="graduacao" id="lmestrado" class="form-label" style="display:none">Mestrado</label>
                        <label for="graduacao" id="ldoutorado" class="form-label" style="display:none">Doutorado</label>
                        <label for="graduacao" id="lposdoutorado" class="form-label" style="display:none">Pós
                            Doutorado</label>
                        <label for="graduacao" id="llivredocencia" class="form-label" style="display:none">Livre
                            Docência</label>
                        <input type="text" class="form-control" style="display:none" id="graduacao" name="graduacao"
                               placeholder="Digite o nome do curso, instituição e data de inicio e fim..." value="">
                    </div>
                    <div class="col-md-12 my-2">
                        <label for="cursos" class="form-label">Outros Cursos e Treinamentos</label>
                        <input type="text" class="form-control" name="cursos" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-2">
            <div class="card-header">
                Idiomas, Informática e Habilidades
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 my-2">
                        <label for="ingles" class="form-label">Inglês</label>
                        <select class="form-select" name="ingles" required="">
                            <option value="0" selected="">Nenhum conhecimento</option>
                            <option value="1">Básico</option>
                            <option value="2">Intermediário</option>
                            <option value="3">Avançado</option>
                            <option value="4">Fluente</option>
                            <option value="5">Nativo</option>
                        </select>
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="espanhol" class="form-label">Espanhol</label>
                        <select class="form-select" name="espanhol" required="">
                            <option value="0" selected="">Nenhum conhecimento</option>
                            <option value="1">Básico</option>
                            <option value="2">Intermediário</option>
                            <option value="3">Avançado</option>
                            <option value="4">Fluente</option>
                            <option value="5">Nativo</option>
                        </select>
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="informatica" class="form-label">Informática</label>
                        <select class="form-select" name="informatica" required="">
                            <option value="0" selected="">Nenhum conhecimento</option>
                            <option value="1">Básico</option>
                            <option value="2">Intermediário</option>
                            <option value="3">Avançado</option>
                            <option value="4">Experiente</option>
                            <option value="5">Especialista</option>
                        </select>
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="office" class="form-label">Pacote Office</label>
                        <select class="form-select" name="office" required="">
                            <option value="0" selected="">Nenhum conhecimento</option>
                            <option value="1">Básico</option>
                            <option value="2">Intermediário</option>
                            <option value="3">Avançado</option>
                            <option value="4">Experiente</option>
                            <option value="5">Especialista</option>
                        </select>
                    </div>
                    <div class="col-md-8 my-2">
                        <label for="habilidades" class="form-label">Habilidades</label>
                        <input type="text" class="form-control" name="habilidades" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-2">
            <div class="card-header">
                Experiência Profissionais
            </div>
            <div class="card-body">
                <div id="experiencias" class="row">
                </div>
                <a type="button" id="add-experiencia" class="text-end text-decoration-none"><i
                        class="bi bi-plus-circle-fill"></i> Adicionar Nova Experiência Profissional</a>
            </div>
        </div>
        <input type="hidden" name="csrf_test_name" value="82f28aca4b0a408d58a42b85f398edfd">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end my-5">
            <input type="submit" value="Atualizar Curriculo" class="btn btn-primary btn-lg">
        </div>

        <div style="display:none"><label>Preencha este campo para continuar</label><input type="text" name="campo1"
                                                                                          value=""></div>
    </form>
</div>
