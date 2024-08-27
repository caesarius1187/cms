<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Puntodeventa> $puntodeventas
 */
?>
<div class="puntodeventas index content">
    <?= $this->Html->link(__('New Puntodeventa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Puntodeventas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('facturacionhabilitada') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($puntodeventas as $puntodeventa): ?>
                <tr>
                    <td><?= $this->Number->format($puntodeventa->id) ?></td>
                    <td><?= $this->Number->format($puntodeventa->numero) ?></td>
                    <td><?= h($puntodeventa->nombre) ?></td>
                    <td><?= h($puntodeventa->descripcion) ?></td>
                    <td><?= h($puntodeventa->facturacionhabilitada) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $puntodeventa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $puntodeventa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $puntodeventa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $puntodeventa->id)]) ?>
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
