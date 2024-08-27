<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Promotion $promotion
 * @var \Cake\Collection\CollectionInterface|string[] $productos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Promotions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="promotions form content">
            <?= $this->Form->create($promotion) ?>
            <fieldset>
                <legend><?= __('Add Promotion') ?></legend>
                <?php
                    echo $this->Form->control('producto_id', ['options' => $productos]);
                    echo $this->Form->control('productopromocion_id');
                    echo $this->Form->control('costo');
                    echo $this->Form->control('ganancia');
                    echo $this->Form->control('precio');
                    echo $this->Form->control('cantidad');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
