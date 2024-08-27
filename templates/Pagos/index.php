<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pago> $pagos
 */
?>
<div class="pagos index content">
    <?= $this->Html->link(__('New Pago'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pagos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('puntodeventa_id') ?></th>
                    <th><?= $this->Paginator->sort('compra_id') ?></th>
                    <th><?= $this->Paginator->sort('venta_id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('metodo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pagos as $pago): ?>
                <tr>
                    <td><?= $this->Number->format($pago->id) ?></td>
                    <td><?= $pago->hasValue('cliente') ? $this->Html->link($pago->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $pago->cliente->id]) : '' ?></td>
                    <td><?= $pago->hasValue('puntodeventa') ? $this->Html->link($pago->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $pago->puntodeventa->id]) : '' ?></td>
                    <td><?= $pago->hasValue('compra') ? $this->Html->link($pago->compra->numero, ['controller' => 'Compras', 'action' => 'view', $pago->compra->id]) : '' ?></td>
                    <td><?= $pago->hasValue('venta') ? $this->Html->link($pago->venta->id, ['controller' => 'Ventas', 'action' => 'view', $pago->venta->id]) : '' ?></td>
                    <td><?= $this->Number->format($pago->numero) ?></td>
                    <td><?= $pago->hasValue('user') ? $this->Html->link($pago->user->username, ['controller' => 'Users', 'action' => 'view', $pago->user->id]) : '' ?></td>
                    <td><?= h($pago->fecha) ?></td>
                    <td><?= $pago->importe === null ? '' : $this->Number->format($pago->importe) ?></td>
                    <td><?= h($pago->descripcion) ?></td>
                    <td><?= h($pago->tipo) ?></td>
                    <td><?= h($pago->metodo) ?></td>
                    <td><?= h($pago->created) ?></td>
                    <td><?= h($pago->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pago->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pago->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->id)]) ?>
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
