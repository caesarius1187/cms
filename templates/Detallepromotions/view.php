<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detallepromotion $detallepromotion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detallepromotion'), ['action' => 'edit', $detallepromotion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detallepromotion'), ['action' => 'delete', $detallepromotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallepromotion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detallepromotions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detallepromotion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detallepromotions view content">
            <h3><?= h($detallepromotion->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Promotion') ?></th>
                    <td><?= $detallepromotion->hasValue('promotion') ? $this->Html->link($detallepromotion->promotion->id, ['controller' => 'Promotions', 'action' => 'view', $detallepromotion->promotion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $detallepromotion->hasValue('producto') ? $this->Html->link($detallepromotion->producto->id, ['controller' => 'Productos', 'action' => 'view', $detallepromotion->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detallepromotion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganancia') ?></th>
                    <td><?= $this->Number->format($detallepromotion->ganancia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($detallepromotion->precio) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
