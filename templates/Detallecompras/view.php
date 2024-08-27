<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detallecompra $detallecompra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detallecompra'), ['action' => 'edit', $detallecompra->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detallecompra'), ['action' => 'delete', $detallecompra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallecompra->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detallecompras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detallecompra'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detallecompras view content">
            <h3><?= h($detallecompra->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Compra') ?></th>
                    <td><?= $detallecompra->hasValue('compra') ? $this->Html->link($detallecompra->compra->numero, ['controller' => 'Compras', 'action' => 'view', $detallecompra->compra->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $detallecompra->hasValue('producto') ? $this->Html->link($detallecompra->producto->id, ['controller' => 'Productos', 'action' => 'view', $detallecompra->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detallecompra->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $detallecompra->cantidad === null ? '' : $this->Number->format($detallecompra->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $detallecompra->precio === null ? '' : $this->Number->format($detallecompra->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Porcentajeganancia') ?></th>
                    <td><?= $detallecompra->porcentajeganancia === null ? '' : $this->Number->format($detallecompra->porcentajeganancia) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
