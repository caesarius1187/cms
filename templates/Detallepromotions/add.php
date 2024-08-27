<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detallepromotion $detallepromotion
 * @var \Cake\Collection\CollectionInterface|string[] $promotions
 * @var \Cake\Collection\CollectionInterface|string[] $productos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Detallepromotions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detallepromotions form content">
            <?= $this->Form->create($detallepromotion) ?>
            <fieldset>
                <legend><?= __('Add Detallepromotion') ?></legend>
                <?php
                    echo $this->Form->control('promotion_id', ['options' => $promotions]);
                    echo $this->Form->control('producto_id', ['options' => $productos]);
                    echo $this->Form->control('ganancia');
                    echo $this->Form->control('precio');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
