<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Puntodeventa $puntodeventa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $puntodeventa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $puntodeventa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Puntodeventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="puntodeventas form content">
            <?= $this->Form->create($puntodeventa) ?>
            <fieldset>
                <legend><?= __('Edit Puntodeventa') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('facturacionhabilitada');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
