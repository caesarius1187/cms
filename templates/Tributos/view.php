<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tributo $tributo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tributo'), ['action' => 'edit', $tributo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tributo'), ['action' => 'delete', $tributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tributo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tributo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tributos view content">
            <h3><?= h($tributo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Venta') ?></th>
                    <td><?= $tributo->hasValue('venta') ? $this->Html->link($tributo->venta->id, ['controller' => 'Ventas', 'action' => 'view', $tributo->venta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Desc') ?></th>
                    <td><?= h($tributo->desc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tributo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idafip') ?></th>
                    <td><?= $tributo->idafip === null ? '' : $this->Number->format($tributo->idafip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Baseimponible') ?></th>
                    <td><?= $tributo->baseimponible === null ? '' : $this->Number->format($tributo->baseimponible) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alicuota') ?></th>
                    <td><?= $tributo->alicuota === null ? '' : $this->Number->format($tributo->alicuota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $tributo->importe === null ? '' : $this->Number->format($tributo->importe) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
