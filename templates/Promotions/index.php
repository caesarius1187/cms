<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Promotion> $promotions
 */
?>
<div class="promotions index content">
    <?= $this->Html->link(__('New Promotion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Promotions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('productopromocion_id') ?></th>
                    <th><?= $this->Paginator->sort('costo') ?></th>
                    <th><?= $this->Paginator->sort('ganancia') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($promotions as $promotion): ?>
                <tr>
                    <td><?= $this->Number->format($promotion->id) ?></td>
                    <td><?= $promotion->hasValue('producto') ? $this->Html->link($promotion->producto->id, ['controller' => 'Productos', 'action' => 'view', $promotion->producto->id]) : '' ?></td>
                    <td><?= $this->Number->format($promotion->productopromocion_id) ?></td>
                    <td><?= $promotion->costo === null ? '' : $this->Number->format($promotion->costo) ?></td>
                    <td><?= $promotion->ganancia === null ? '' : $this->Number->format($promotion->ganancia) ?></td>
                    <td><?= $promotion->precio === null ? '' : $this->Number->format($promotion->precio) ?></td>
                    <td><?= $promotion->cantidad === null ? '' : $this->Number->format($promotion->cantidad) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $promotion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $promotion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $promotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id)]) ?>
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
