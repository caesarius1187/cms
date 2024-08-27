<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tributo $tributo
 * @var string[]|\Cake\Collection\CollectionInterface $ventas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tributo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tributo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tributos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tributos form content">
            <?= $this->Form->create($tributo) ?>
            <fieldset>
                <legend><?= __('Edit Tributo') ?></legend>
                <?php
                    echo $this->Form->control('venta_id', ['options' => $ventas, 'empty' => true]);
                    echo $this->Form->control('idafip');
                    echo $this->Form->control('desc');
                    echo $this->Form->control('baseimponible');
                    echo $this->Form->control('alicuota');
                    echo $this->Form->control('importe');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
