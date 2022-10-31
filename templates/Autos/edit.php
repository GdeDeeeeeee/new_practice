<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Auto $auto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $auto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $auto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Autos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autos form content">
            <?= $this->Form->create($auto) ?>
            <fieldset>
                <legend><?= __('Edit Auto') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('marca_id');
                    echo $this->Form->control('imagen');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
