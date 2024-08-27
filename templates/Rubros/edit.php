<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rubro $rubro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rubro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rubro->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rubros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rubros form content">
            <?= $this->Form->create($rubro) ?>
            <fieldset>
                <legend><?= __('Edit Rubro') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripcion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
