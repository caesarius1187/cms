<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caja $caja
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $puntodeventas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $caja->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caja->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cajas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cajas form content">
            <?= $this->Form->create($caja) ?>
            <fieldset>
                <legend><?= __('Edit Caja') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('puntodeventa_id', ['options' => $puntodeventas, 'empty' => true]);
                    echo $this->Form->control('apertura', ['empty' => true]);
                    echo $this->Form->control('importeapertura');
                    echo $this->Form->control('cierre', ['empty' => true]);
                    echo $this->Form->control('importecierre');
                    echo $this->Form->control('diferencia');
                    echo $this->Form->control('descripcioncierre');
                    echo $this->Form->control('descripcionapertura');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
