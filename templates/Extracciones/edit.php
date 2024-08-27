<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extraccione $extraccione
 * @var string[]|\Cake\Collection\CollectionInterface $puntodeventas
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $extraccione->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $extraccione->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Extracciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="extracciones form content">
            <?= $this->Form->create($extraccione) ?>
            <fieldset>
                <legend><?= __('Edit Extraccione') ?></legend>
                <?php
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('importe');
                    echo $this->Form->control('saldo');
                    echo $this->Form->control('fecha', ['empty' => true]);
                    echo $this->Form->control('puntodeventa_id', ['options' => $puntodeventas, 'empty' => true]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
