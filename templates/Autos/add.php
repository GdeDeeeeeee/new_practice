<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Auto $auto
 * @var \Cake\Collection\CollectionInterface|string[] $marcas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Autos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autos form content">
            <?= $this->Form->create($auto) ?>
            <fieldset>
                <legend><?= __('Add Auto') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('marca_id', ['options' => $marcas]);
                    echo $this->Form->control('imagen');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
