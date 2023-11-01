<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empresa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="empresas view content">
            <h3><?= h($empresa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Municipio') ?></th>
                    <td><?= $empresa->hasValue('municipio') ? $this->Html->link($empresa->municipio->Array, ['controller' => 'Municipios', 'action' => 'view', $empresa->municipio->]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Razaosocial') ?></th>
                    <td><?= h($empresa->razaosocial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome Fantasia') ?></th>
                    <td><?= h($empresa->nome_fantasia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpfcnpj') ?></th>
                    <td><?= h($empresa->cpfcnpj) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ie') ?></th>
                    <td><?= h($empresa->ie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($empresa->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($empresa->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Pj') ?></th>
                    <td><?= $empresa->is_pj ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= $empresa->ativo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Missao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($empresa->missao)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Visao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($empresa->visao)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Valores') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($empresa->valores)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Vagas') ?></h4>
                <?php if (!empty($empresa->vagas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th><?= __('Profissional Area Id') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Publicar') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->vagas as $vagas) : ?>
                        <tr>
                            <td><?= h($vagas->id) ?></td>
                            <td><?= h($vagas->titulo) ?></td>
                            <td><?= h($vagas->descricao) ?></td>
                            <td><?= h($vagas->profissional_area_id) ?></td>
                            <td><?= h($vagas->slug) ?></td>
                            <td><?= h($vagas->publicar) ?></td>
                            <td><?= h($vagas->empresa_id) ?></td>
                            <td><?= h($vagas->created) ?></td>
                            <td><?= h($vagas->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Vagas', 'action' => 'view', $vagas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Vagas', 'action' => 'edit', $vagas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vagas', 'action' => 'delete', $vagas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vagas->id)]) ?>
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
