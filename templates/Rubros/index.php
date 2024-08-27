<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Rubro> $rubros
 */
?>
<div class="rubros index content">
    <?= $this->Html->link(__('New Rubro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rubros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rubros as $rubro): ?>
                <tr>
                    <td><?= $this->Number->format($rubro->id) ?></td>
                    <td><?= h($rubro->nombre) ?></td>
                    <td><?= h($rubro->descripcion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rubro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rubro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rubro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rubro->id)]) ?>
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
