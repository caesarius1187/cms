<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Caja> $cajas
 */
?>
<div class="cajas index content">
    <?= $this->Html->link(__('New Caja'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cajas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('puntodeventa_id') ?></th>
                    <th><?= $this->Paginator->sort('apertura') ?></th>
                    <th><?= $this->Paginator->sort('importeapertura') ?></th>
                    <th><?= $this->Paginator->sort('cierre') ?></th>
                    <th><?= $this->Paginator->sort('importecierre') ?></th>
                    <th><?= $this->Paginator->sort('diferencia') ?></th>
                    <th><?= $this->Paginator->sort('descripcioncierre') ?></th>
                    <th><?= $this->Paginator->sort('descripcionapertura') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cajas as $caja): ?>
                <tr>
                    <td><?= $this->Number->format($caja->id) ?></td>
                    <td><?= $caja->hasValue('user') ? $this->Html->link($caja->user->username, ['controller' => 'Users', 'action' => 'view', $caja->user->id]) : '' ?></td>
                    <td><?= $caja->hasValue('puntodeventa') ? $this->Html->link($caja->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $caja->puntodeventa->id]) : '' ?></td>
                    <td><?= h($caja->apertura) ?></td>
                    <td><?= $caja->importeapertura === null ? '' : $this->Number->format($caja->importeapertura) ?></td>
                    <td><?= h($caja->cierre) ?></td>
                    <td><?= $caja->importecierre === null ? '' : $this->Number->format($caja->importecierre) ?></td>
                    <td><?= $caja->diferencia === null ? '' : $this->Number->format($caja->diferencia) ?></td>
                    <td><?= h($caja->descripcioncierre) ?></td>
                    <td><?= h($caja->descripcionapertura) ?></td>
                    <td><?= h($caja->created) ?></td>
                    <td><?= h($caja->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $caja->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caja->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caja->id)]) ?>
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
