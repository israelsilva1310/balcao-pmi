<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 * @var \Cake\Collection\CollectionInterface|string[] $municipios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="empresas form content">
            <?= $this->Form->create($empresa) ?>
            <fieldset>
                <legend><?= __('Add Empresa') ?></legend>
                <?php
                    echo $this->Form->control('municipio_id', ['options' => $municipios, 'empty' => true]);
                    echo $this->Form->control('razaosocial');
                    echo $this->Form->control('nome_fantasia');
                    echo $this->Form->control('missao');
                    echo $this->Form->control('visao');
                    echo $this->Form->control('valores');
                    echo $this->Form->control('is_pj');
                    echo $this->Form->control('cpfcnpj');
                    echo $this->Form->control('ie');
                    echo $this->Form->control('ativo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
