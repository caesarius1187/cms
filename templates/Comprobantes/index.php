<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comprobante> $comprobantes
 */
?>
<div class="comprobantes index content">
    <?= $this->Html->link(__('New Comprobante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comprobantes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('tipodebitoasociado') ?></th>
                    <th><?= $this->Paginator->sort('tipocreditoasociado') ?></th>
                    <th><?= $this->Paginator->sort('abreviacion') ?></th>
                    <th><?= $this->Paginator->sort('abreviacion2') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comprobantes as $comprobante): ?>
                <tr>
                    <td><?= $this->Number->format($comprobante->id) ?></td>
                    <td><?= h($comprobante->nombre) ?></td>
                    <td><?= h($comprobante->codigo) ?></td>
                    <td><?= h($comprobante->tipo) ?></td>
                    <td><?= h($comprobante->tipodebitoasociado) ?></td>
                    <td><?= h($comprobante->tipocreditoasociado) ?></td>
                    <td><?= h($comprobante->abreviacion) ?></td>
                    <td><?= h($comprobante->abreviacion2) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comprobante->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comprobante->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comprobante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comprobante->id)]) ?>
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
