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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $municipio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Municipios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="municipios form content">
            <?= $this->Form->create($municipio) ?>
            <fieldset>
                <legend><?= __('Edit Municipio') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('uf');
                    echo $this->Form->control('ibge');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
