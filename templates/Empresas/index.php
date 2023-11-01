<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Empresa> $empresas
 */
?>
<div class="empresas index content">
    <?= $this->Html->link(__('New Empresa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empresas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('municipio_id') ?></th>
                    <th><?= $this->Paginator->sort('razaosocial') ?></th>
                    <th><?= $this->Paginator->sort('nome_fantasia') ?></th>
                    <th><?= $this->Paginator->sort('is_pj') ?></th>
                    <th><?= $this->Paginator->sort('cpfcnpj') ?></th>
                    <th><?= $this->Paginator->sort('ie') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresas as $empresa): ?>
                <tr>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                    <td><?= $empresa->hasValue('municipio') ? $this->Html->link($empresa->municipio->Array, ['controller' => 'Municipios', 'action' => 'view', $empresa->municipio]) : '' ?></td>
                    <td><?= h($empresa->razaosocial) ?></td>
                    <td><?= h($empresa->nome_fantasia) ?></td>
                    <td><?= h($empresa->is_pj) ?></td>
                    <td><?= h($empresa->cpfcnpj) ?></td>
                    <td><?= h($empresa->ie) ?></td>
                    <td><?= h($empresa->ativo) ?></td>
                    <td><?= h($empresa->created) ?></td>
                    <td><?= h($empresa->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empresa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
