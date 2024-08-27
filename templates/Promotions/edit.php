<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Promotion $promotion
 * @var string[]|\Cake\Collection\CollectionInterface $productos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $promotion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Promotions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="promotions form content">
            <?= $this->Form->create($promotion) ?>
            <fieldset>
                <legend><?= __('Edit Promotion') ?></legend>
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
