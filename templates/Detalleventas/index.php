<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Detalleventa> $detalleventas
 */
?>
<div class="detalleventas index content">
    <?= $this->Html->link(__('New Detalleventa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Detalleventas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('venta_id') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('ganancia') ?></th>
                    <th><?= $this->Paginator->sort('tipoprecio') ?></th>
                    <th><?= $this->Paginator->sort('costo') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('porcentajedescuento') ?></th>
                    <th><?= $this->Paginator->sort('importedescuento') ?></th>
                    <th><?= $this->Paginator->sort('subtotal') ?></th>
                    <th><?= $this->Paginator->sort('codigoalicuota') ?></th>
                    <th><?= $this->Paginator->sort('alicuota') ?></th>
                    <th><?= $this->Paginator->sort('importeiva') ?></th>
                    <th><?= $this->Paginator->sort('subtotalconiva') ?></th>
                    <th><?= $this->Paginator->sort('fcantidad') ?></th>
                    <th><?= $this->Paginator->sort('fporcentajedescuento') ?></th>
                    <th><?= $this->Paginator->sort('fprecio') ?></th>
                    <th><?= $this->Paginator->sort('fimportedescuento') ?></th>
                    <th><?= $this->Paginator->sort('fsubtotal') ?></th>
                    <th><?= $this->Paginator->sort('fcodigoalicuota') ?></th>
                    <th><?= $this->Paginator->sort('falicuota') ?></th>
                    <th><?= $this->Paginator->sort('fimporteiva') ?></th>
                    <th><?= $this->Paginator->sort('fsubtotalconiva') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalleventas as $detalleventa): ?>
                <tr>
                    <td><?= $this->Number->format($detalleventa->id) ?></td>
                    <td><?= $detalleventa->hasValue('producto') ? $this->Html->link($detalleventa->producto->id, ['controller' => 'Productos', 'action' => 'view', $detalleventa->producto->id]) : '' ?></td>
                    <td><?= $detalleventa->hasValue('venta') ? $this->Html->link($detalleventa->venta->id, ['controller' => 'Ventas', 'action' => 'view', $detalleventa->venta->id]) : '' ?></td>
                    <td><?= $detalleventa->precio === null ? '' : $this->Number->format($detalleventa->precio) ?></td>
                    <td><?= $detalleventa->ganancia === null ? '' : $this->Number->format($detalleventa->ganancia) ?></td>
                    <td><?= h($detalleventa->tipoprecio) ?></td>
                    <td><?= $detalleventa->costo === null ? '' : $this->Number->format($detalleventa->costo) ?></td>
                    <td><?= $detalleventa->cantidad === null ? '' : $this->Number->format($detalleventa->cantidad) ?></td>
                    <td><?= $detalleventa->porcentajedescuento === null ? '' : $this->Number->format($detalleventa->porcentajedescuento) ?></td>
                    <td><?= $detalleventa->importedescuento === null ? '' : $this->Number->format($detalleventa->importedescuento) ?></td>
                    <td><?= $detalleventa->subtotal === null ? '' : $this->Number->format($detalleventa->subtotal) ?></td>
                    <td><?= h($detalleventa->codigoalicuota) ?></td>
                    <td><?= $detalleventa->alicuota === null ? '' : $this->Number->format($detalleventa->alicuota) ?></td>
                    <td><?= $detalleventa->importeiva === null ? '' : $this->Number->format($detalleventa->importeiva) ?></td>
                    <td><?= $detalleventa->subtotalconiva === null ? '' : $this->Number->format($detalleventa->subtotalconiva) ?></td>
                    <td><?= $detalleventa->fcantidad === null ? '' : $this->Number->format($detalleventa->fcantidad) ?></td>
                    <td><?= $detalleventa->fporcentajedescuento === null ? '' : $this->Number->format($detalleventa->fporcentajedescuento) ?></td>
                    <td><?= $detalleventa->fprecio === null ? '' : $this->Number->format($detalleventa->fprecio) ?></td>
                    <td><?= $detalleventa->fimportedescuento === null ? '' : $this->Number->format($detalleventa->fimportedescuento) ?></td>
                    <td><?= $detalleventa->fsubtotal === null ? '' : $this->Number->format($detalleventa->fsubtotal) ?></td>
                    <td><?= h($detalleventa->fcodigoalicuota) ?></td>
                    <td><?= $detalleventa->falicuota === null ? '' : $this->Number->format($detalleventa->falicuota) ?></td>
                    <td><?= $detalleventa->fimporteiva === null ? '' : $this->Number->format($detalleventa->fimporteiva) ?></td>
                    <td><?= $detalleventa->fsubtotalconiva === null ? '' : $this->Number->format($detalleventa->fsubtotalconiva) ?></td>
                    <td><?= h($detalleventa->created) ?></td>
                    <td><?= h($detalleventa->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $detalleventa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detalleventa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detalleventa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalleventa->id)]) ?>
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
