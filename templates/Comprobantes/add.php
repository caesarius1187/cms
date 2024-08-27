<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comprobante $comprobante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Comprobantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="comprobantes form content">
            <?= $this->Form->create($comprobante) ?>
            <fieldset>
                <legend><?= __('Add Comprobante') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('tipodebitoasociado');
                    echo $this->Form->control('tipocreditoasociado');
                    echo $this->Form->control('abreviacion');
                    echo $this->Form->control('abreviacion2');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
