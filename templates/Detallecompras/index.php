<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Detallecompra> $detallecompras
 */
?>
<div class="detallecompras index content">
    <?= $this->Html->link(__('New Detallecompra'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Detallecompras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('compra_id') ?></th>
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('porcentajeganancia') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detallecompras as $detallecompra): ?>
                <tr>
                    <td><?= $this->Number->format($detallecompra->id) ?></td>
                    <td><?= $detallecompra->hasValue('compra') ? $this->Html->link($detallecompra->compra->numero, ['controller' => 'Compras', 'action' => 'view', $detallecompra->compra->id]) : '' ?></td>
                    <td><?= $detallecompra->hasValue('producto') ? $this->Html->link($detallecompra->producto->id, ['controller' => 'Productos', 'action' => 'view', $detallecompra->producto->id]) : '' ?></td>
                    <td><?= $detallecompra->cantidad === null ? '' : $this->Number->format($detallecompra->cantidad) ?></td>
                    <td><?= $detallecompra->precio === null ? '' : $this->Number->format($detallecompra->precio) ?></td>
                    <td><?= $detallecompra->porcentajeganancia === null ? '' : $this->Number->format($detallecompra->porcentajeganancia) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $detallecompra->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detallecompra->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detallecompra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallecompra->id)]) ?>
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
