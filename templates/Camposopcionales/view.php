<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Camposopcionale $camposopcionale
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Camposopcionale'), ['action' => 'edit', $camposopcionale->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Camposopcionale'), ['action' => 'delete', $camposopcionale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $camposopcionale->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Camposopcionales'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Camposopcionale'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="camposopcionales view content">
            <h3><?= h($camposopcionale->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($camposopcionale->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idafip') ?></th>
                    <td><?= $camposopcionale->idafip === null ? '' : $this->Number->format($camposopcionale->idafip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $camposopcionale->valor === null ? '' : $this->Number->format($camposopcionale->valor) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
