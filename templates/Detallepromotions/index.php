<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Detallepromotion> $detallepromotions
 */
?>
<div class="detallepromotions index content">
    <?= $this->Html->link(__('New Detallepromotion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Detallepromotions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('promotion_id') ?></th>
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('ganancia') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detallepromotions as $detallepromotion): ?>
                <tr>
                    <td><?= $this->Number->format($detallepromotion->id) ?></td>
                    <td><?= $detallepromotion->hasValue('promotion') ? $this->Html->link($detallepromotion->promotion->id, ['controller' => 'Promotions', 'action' => 'view', $detallepromotion->promotion->id]) : '' ?></td>
                    <td><?= $detallepromotion->hasValue('producto') ? $this->Html->link($detallepromotion->producto->id, ['controller' => 'Productos', 'action' => 'view', $detallepromotion->producto->id]) : '' ?></td>
                    <td><?= $this->Number->format($detallepromotion->ganancia) ?></td>
                    <td><?= $this->Number->format($detallepromotion->precio) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $detallepromotion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detallepromotion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detallepromotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallepromotion->id)]) ?>
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
