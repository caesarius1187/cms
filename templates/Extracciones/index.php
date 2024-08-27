<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Extraccione> $extracciones
 */
?>
<div class="extracciones index content">
    <?= $this->Html->link(__('New Extraccione'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Extracciones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th><?= $this->Paginator->sort('saldo') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('puntodeventa_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($extracciones as $extraccione): ?>
                <tr>
                    <td><?= $this->Number->format($extraccione->id) ?></td>
                    <td><?= h($extraccione->descripcion) ?></td>
                    <td><?= $extraccione->importe === null ? '' : $this->Number->format($extraccione->importe) ?></td>
                    <td><?= $extraccione->saldo === null ? '' : $this->Number->format($extraccione->saldo) ?></td>
                    <td><?= h($extraccione->fecha) ?></td>
                    <td><?= $extraccione->hasValue('puntodeventa') ? $this->Html->link($extraccione->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $extraccione->puntodeventa->id]) : '' ?></td>
                    <td><?= $extraccione->hasValue('user') ? $this->Html->link($extraccione->user->username, ['controller' => 'Users', 'action' => 'view', $extraccione->user->id]) : '' ?></td>
                    <td><?= h($extraccione->created) ?></td>
                    <td><?= h($extraccione->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $extraccione->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $extraccione->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $extraccione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extraccione->id)]) ?>
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
