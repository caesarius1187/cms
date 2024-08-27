<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extraccione $extraccione
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Extraccione'), ['action' => 'edit', $extraccione->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Extraccione'), ['action' => 'delete', $extraccione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extraccione->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Extracciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Extraccione'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="extracciones view content">
            <h3><?= h($extraccione->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($extraccione->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Puntodeventa') ?></th>
                    <td><?= $extraccione->hasValue('puntodeventa') ? $this->Html->link($extraccione->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $extraccione->puntodeventa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $extraccione->hasValue('user') ? $this->Html->link($extraccione->user->username, ['controller' => 'Users', 'action' => 'view', $extraccione->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($extraccione->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $extraccione->importe === null ? '' : $this->Number->format($extraccione->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saldo') ?></th>
                    <td><?= $extraccione->saldo === null ? '' : $this->Number->format($extraccione->saldo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($extraccione->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($extraccione->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($extraccione->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
