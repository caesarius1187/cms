<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alicuota $alicuota
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alicuota'), ['action' => 'edit', $alicuota->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alicuota'), ['action' => 'delete', $alicuota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alicuota->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alicuotas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alicuota'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="alicuotas view content">
            <h3><?= h($alicuota->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Venta') ?></th>
                    <td><?= $alicuota->hasValue('venta') ? $this->Html->link($alicuota->venta->id, ['controller' => 'Ventas', 'action' => 'view', $alicuota->venta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($alicuota->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idafip') ?></th>
                    <td><?= $alicuota->idafip === null ? '' : $this->Number->format($alicuota->idafip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Baseimponible') ?></th>
                    <td><?= $alicuota->baseimponible === null ? '' : $this->Number->format($alicuota->baseimponible) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $alicuota->importe === null ? '' : $this->Number->format($alicuota->importe) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
