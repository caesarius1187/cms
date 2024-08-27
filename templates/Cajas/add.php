<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caja $caja
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $puntodeventas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cajas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cajas form content">
            <?= $this->Form->create($caja) ?>
            <fieldset>
                <legend><?= __('Add Caja') ?></legend>
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
