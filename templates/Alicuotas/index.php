<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Alicuota> $alicuotas
 */
?>
<div class="alicuotas index content">
    <?= $this->Html->link(__('New Alicuota'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alicuotas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('venta_id') ?></th>
                    <th><?= $this->Paginator->sort('idafip') ?></th>
                    <th><?= $this->Paginator->sort('baseimponible') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alicuotas as $alicuota): ?>
                <tr>
                    <td><?= $this->Number->format($alicuota->id) ?></td>
                    <td><?= $alicuota->hasValue('venta') ? $this->Html->link($alicuota->venta->id, ['controller' => 'Ventas', 'action' => 'view', $alicuota->venta->id]) : '' ?></td>
                    <td><?= $alicuota->idafip === null ? '' : $this->Number->format($alicuota->idafip) ?></td>
                    <td><?= $alicuota->baseimponible === null ? '' : $this->Number->format($alicuota->baseimponible) ?></td>
                    <td><?= $alicuota->importe === null ? '' : $this->Number->format($alicuota->importe) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alicuota->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alicuota->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alicuota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alicuota->id)]) ?>
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
