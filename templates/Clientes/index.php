<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cliente> $clientes
 */
?>
<div class="clientes index content">
    <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('mail') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('celular') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('condicioniva') ?></th>
                    <th><?= $this->Paginator->sort('DNI') ?></th>
                    <th><?= $this->Paginator->sort('CUIT') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td><?= h($cliente->nombre) ?></td>
                    <td><?= h($cliente->mail) ?></td>
                    <td><?= h($cliente->telefono) ?></td>
                    <td><?= h($cliente->celular) ?></td>
                    <td><?= h($cliente->direccion) ?></td>
                    <td><?= h($cliente->condicioniva) ?></td>
                    <td><?= h($cliente->DNI) ?></td>
                    <td><?= h($cliente->CUIT) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
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
