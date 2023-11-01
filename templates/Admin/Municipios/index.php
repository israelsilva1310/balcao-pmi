<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Municipio> $municipios
 */
?>
<div class="municipios index content">
    <?= $this->Html->link(__('New Municipio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Municipios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('uf') ?></th>
                    <th><?= $this->Paginator->sort('ibge') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($municipios as $municipio): ?>
                <tr>
                    <td><?= $this->Number->format($municipio->id) ?></td>
                    <td><?= h($municipio->nome) ?></td>
                    <td><?= $municipio->uf === null ? '' : $this->Number->format($municipio->uf) ?></td>
                    <td><?= $municipio->ibge === null ? '' : $this->Number->format($municipio->ibge) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $municipio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $municipio->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $municipio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->id)]) ?>
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
