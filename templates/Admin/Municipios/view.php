<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Municipio $municipio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Municipio'), ['action' => 'edit', $municipio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Municipio'), ['action' => 'delete', $municipio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Municipios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Municipio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="municipios view content">
            <h3><?= h($municipio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($municipio->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($municipio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uf') ?></th>
                    <td><?= $municipio->uf === null ? '' : $this->Number->format($municipio->uf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ibge') ?></th>
                    <td><?= $municipio->ibge === null ? '' : $this->Number->format($municipio->ibge) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Empresas') ?></h4>
                <?php if (!empty($municipio->empresas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Municipio Id') ?></th>
                            <th><?= __('Razaosocial') ?></th>
                            <th><?= __('Nome Fantasia') ?></th>
                            <th><?= __('Missao') ?></th>
                            <th><?= __('Visao') ?></th>
                            <th><?= __('Valores') ?></th>
                            <th><?= __('Is Pj') ?></th>
                            <th><?= __('Cpfcnpj') ?></th>
                            <th><?= __('Ie') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($municipio->empresas as $empresas) : ?>
                        <tr>
                            <td><?= h($empresas->id) ?></td>
                            <td><?= h($empresas->municipio_id) ?></td>
                            <td><?= h($empresas->razaosocial) ?></td>
                            <td><?= h($empresas->nome_fantasia) ?></td>
                            <td><?= h($empresas->missao) ?></td>
                            <td><?= h($empresas->visao) ?></td>
                            <td><?= h($empresas->valores) ?></td>
                            <td><?= h($empresas->is_pj) ?></td>
                            <td><?= h($empresas->cpfcnpj) ?></td>
                            <td><?= h($empresas->ie) ?></td>
                            <td><?= h($empresas->ativo) ?></td>
                            <td><?= h($empresas->created) ?></td>
                            <td><?= h($empresas->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Empresas', 'action' => 'view', $empresas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Empresas', 'action' => 'edit', $empresas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empresas', 'action' => 'delete', $empresas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Oportunidades') ?></h4>
                <?php if (!empty($municipio->oportunidades)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Municipio Id') ?></th>
                            <th><?= __('Position Id') ?></th>
                            <th><?= __('Employer Id') ?></th>
                            <th><?= __('Descripion') ?></th>
                            <th><?= __('Is Paid') ?></th>
                            <th><?= __('Paid') ?></th>
                            <th><?= __('Workload') ?></th>
                            <th><?= __('Benefits') ?></th>
                            <th><?= __('Is Finished') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($municipio->oportunidades as $oportunidades) : ?>
                        <tr>
                            <td><?= h($oportunidades->id) ?></td>
                            <td><?= h($oportunidades->municipio_id) ?></td>
                            <td><?= h($oportunidades->position_id) ?></td>
                            <td><?= h($oportunidades->employer_id) ?></td>
                            <td><?= h($oportunidades->descripion) ?></td>
                            <td><?= h($oportunidades->is_paid) ?></td>
                            <td><?= h($oportunidades->paid) ?></td>
                            <td><?= h($oportunidades->Workload) ?></td>
                            <td><?= h($oportunidades->benefits) ?></td>
                            <td><?= h($oportunidades->is_finished) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Oportunidades', 'action' => 'view', $oportunidades->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Oportunidades', 'action' => 'edit', $oportunidades->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Oportunidades', 'action' => 'delete', $oportunidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oportunidades->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pessoas') ?></h4>
                <?php if (!empty($municipio->pessoas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Municipio Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Document') ?></th>
                            <th><?= __('Date Birth') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone1') ?></th>
                            <th><?= __('Phone2') ?></th>
                            <th><?= __('Cellphone') ?></th>
                            <th><?= __('Celphone2') ?></th>
                            <th><?= __('Street') ?></th>
                            <th><?= __('Number') ?></th>
                            <th><?= __('Neighborhood') ?></th>
                            <th><?= __('Cep') ?></th>
                            <th><?= __('Complement') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($municipio->pessoas as $pessoas) : ?>
                        <tr>
                            <td><?= h($pessoas->id) ?></td>
                            <td><?= h($pessoas->municipio_id) ?></td>
                            <td><?= h($pessoas->name) ?></td>
                            <td><?= h($pessoas->lastname) ?></td>
                            <td><?= h($pessoas->document) ?></td>
                            <td><?= h($pessoas->date_birth) ?></td>
                            <td><?= h($pessoas->email) ?></td>
                            <td><?= h($pessoas->phone1) ?></td>
                            <td><?= h($pessoas->phone2) ?></td>
                            <td><?= h($pessoas->cellphone) ?></td>
                            <td><?= h($pessoas->celphone2) ?></td>
                            <td><?= h($pessoas->street) ?></td>
                            <td><?= h($pessoas->number) ?></td>
                            <td><?= h($pessoas->neighborhood) ?></td>
                            <td><?= h($pessoas->cep) ?></td>
                            <td><?= h($pessoas->complement) ?></td>
                            <td><?= h($pessoas->photo) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pessoas', 'action' => 'view', $pessoas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pessoas', 'action' => 'edit', $pessoas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pessoas', 'action' => 'delete', $pessoas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
