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
            <?= $this->Html->link(__('Edit Auto'), ['action' => 'edit', $auto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Auto'), ['action' => 'delete', $auto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Autos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Auto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autos view content">
            <h3><?= h($auto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($auto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagen') ?></th>
                    <td>
                        <img src='<?= h($auto->imagen) ?>' />
                    </td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($auto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca Id') ?></th>
                    <td><?= $this->Number->format($auto->marca_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($auto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($auto->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
