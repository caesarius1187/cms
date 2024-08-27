<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Camposopcionale> $camposopcionales
 */
?>
<div class="camposopcionales index content">
    <?= $this->Html->link(__('New Camposopcionale'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Camposopcionales') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idafip') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($camposopcionales as $camposopcionale): ?>
                <tr>
                    <td><?= $this->Number->format($camposopcionale->id) ?></td>
                    <td><?= $camposopcionale->idafip === null ? '' : $this->Number->format($camposopcionale->idafip) ?></td>
                    <td><?= $camposopcionale->valor === null ? '' : $this->Number->format($camposopcionale->valor) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $camposopcionale->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $camposopcionale->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $camposopcionale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $camposopcionale->id)]) ?>
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
