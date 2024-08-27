<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pago $pago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pago'), ['action' => 'edit', $pago->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pago'), ['action' => 'delete', $pago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pagos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pago'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pagos view content">
            <h3><?= h($pago->tipo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $pago->hasValue('cliente') ? $this->Html->link($pago->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $pago->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Puntodeventa') ?></th>
                    <td><?= $pago->hasValue('puntodeventa') ? $this->Html->link($pago->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $pago->puntodeventa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Compra') ?></th>
                    <td><?= $pago->hasValue('compra') ? $this->Html->link($pago->compra->numero, ['controller' => 'Compras', 'action' => 'view', $pago->compra->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Venta') ?></th>
                    <td><?= $pago->hasValue('venta') ? $this->Html->link($pago->venta->id, ['controller' => 'Ventas', 'action' => 'view', $pago->venta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $pago->hasValue('user') ? $this->Html->link($pago->user->username, ['controller' => 'Users', 'action' => 'view', $pago->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($pago->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($pago->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metodo') ?></th>
                    <td><?= h($pago->metodo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pago->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $this->Number->format($pago->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $pago->importe === null ? '' : $this->Number->format($pago->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($pago->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pago->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pago->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
