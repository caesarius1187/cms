<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Compra> $compras
 */
?>
<div class="compras index content">
    <?= $this->Html->link(__('New Compra'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Compras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('puntodeventa_id') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('comprobante_id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('neto') ?></th>
                    <th><?= $this->Paginator->sort('iva') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($compras as $compra): ?>
                <tr>
                    <td><?= $this->Number->format($compra->id) ?></td>
                    <td><?= $compra->hasValue('user') ? $this->Html->link($compra->user->username, ['controller' => 'Users', 'action' => 'view', $compra->user->id]) : '' ?></td>
                    <td><?= $compra->hasValue('puntodeventa') ? $this->Html->link($compra->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $compra->puntodeventa->id]) : '' ?></td>
                    <td><?= $compra->hasValue('cliente') ? $this->Html->link($compra->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $compra->cliente->id]) : '' ?></td>
                    <td><?= $compra->hasValue('comprobante') ? $this->Html->link($compra->comprobante->nombre, ['controller' => 'Comprobantes', 'action' => 'view', $compra->comprobante->id]) : '' ?></td>
                    <td><?= h($compra->numero) ?></td>
                    <td><?= h($compra->fecha) ?></td>
                    <td><?= $this->Number->format($compra->neto) ?></td>
                    <td><?= $compra->iva === null ? '' : $this->Number->format($compra->iva) ?></td>
                    <td><?= $compra->total === null ? '' : $this->Number->format($compra->total) ?></td>
                    <td><?= h($compra->created) ?></td>
                    <td><?= h($compra->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $compra->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compra->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id)]) ?>
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
