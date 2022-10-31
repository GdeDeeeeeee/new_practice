<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Auto> $autos
 */
?>
<div class="autos index content">
    <?= $this->Html->link(__('New Auto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Autos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('marca_id') ?></th>
                    <th><?= $this->Paginator->sort('imagen') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($autos as $auto): ?>
                <tr>
                    <td><?= $this->Number->format($auto->id) ?></td>
                    <td><?= h($auto->nombre) ?></td>
                    <td><?= $this->Number->format($auto->marca_id) ?></td>
                    <td>
                        <img src='<?= h($auto->imagen) ?>' />
                    </td>
                    <td><?= h($auto->created) ?></td>
                    <td><?= h($auto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $auto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $auto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $auto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auto->id)]) ?>
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
