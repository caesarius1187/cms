<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tributo> $tributos
 */
?>
<div class="tributos index content">
    <?= $this->Html->link(__('New Tributo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tributos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('venta_id') ?></th>
                    <th><?= $this->Paginator->sort('idafip') ?></th>
                    <th><?= $this->Paginator->sort('desc') ?></th>
                    <th><?= $this->Paginator->sort('baseimponible') ?></th>
                    <th><?= $this->Paginator->sort('alicuota') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tributos as $tributo): ?>
                <tr>
                    <td><?= $this->Number->format($tributo->id) ?></td>
                    <td><?= $tributo->hasValue('venta') ? $this->Html->link($tributo->venta->id, ['controller' => 'Ventas', 'action' => 'view', $tributo->venta->id]) : '' ?></td>
                    <td><?= $tributo->idafip === null ? '' : $this->Number->format($tributo->idafip) ?></td>
                    <td><?= h($tributo->desc) ?></td>
                    <td><?= $tributo->baseimponible === null ? '' : $this->Number->format($tributo->baseimponible) ?></td>
                    <td><?= $tributo->alicuota === null ? '' : $this->Number->format($tributo->alicuota) ?></td>
                    <td><?= $tributo->importe === null ? '' : $this->Number->format($tributo->importe) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tributo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tributo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tributo->id)]) ?>
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
