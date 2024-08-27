<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caja $caja
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Caja'), ['action' => 'edit', $caja->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Caja'), ['action' => 'delete', $caja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caja->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cajas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Caja'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cajas view content">
            <h3><?= h($caja->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $caja->hasValue('user') ? $this->Html->link($caja->user->username, ['controller' => 'Users', 'action' => 'view', $caja->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Puntodeventa') ?></th>
                    <td><?= $caja->hasValue('puntodeventa') ? $this->Html->link($caja->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $caja->puntodeventa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcioncierre') ?></th>
                    <td><?= h($caja->descripcioncierre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcionapertura') ?></th>
                    <td><?= h($caja->descripcionapertura) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($caja->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importeapertura') ?></th>
                    <td><?= $caja->importeapertura === null ? '' : $this->Number->format($caja->importeapertura) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importecierre') ?></th>
                    <td><?= $caja->importecierre === null ? '' : $this->Number->format($caja->importecierre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diferencia') ?></th>
                    <td><?= $caja->diferencia === null ? '' : $this->Number->format($caja->diferencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apertura') ?></th>
                    <td><?= h($caja->apertura) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cierre') ?></th>
                    <td><?= h($caja->cierre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($caja->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($caja->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
