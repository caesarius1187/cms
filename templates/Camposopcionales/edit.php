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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $camposopcionale->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $camposopcionale->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Camposopcionales'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="camposopcionales form content">
            <?= $this->Form->create($camposopcionale) ?>
            <fieldset>
                <legend><?= __('Edit Camposopcionale') ?></legend>
                <?php
                    echo $this->Form->control('idafip');
                    echo $this->Form->control('valor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
