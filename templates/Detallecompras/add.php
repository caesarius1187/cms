<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detallecompra $detallecompra
 * @var \Cake\Collection\CollectionInterface|string[] $compras
 * @var \Cake\Collection\CollectionInterface|string[] $productos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Detallecompras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detallecompras form content">
            <?= $this->Form->create($detallecompra) ?>
            <fieldset>
                <legend><?= __('Add Detallecompra') ?></legend>
                <?php
                    echo $this->Form->control('compra_id', ['options' => $compras, 'empty' => true]);
                    echo $this->Form->control('producto_id', ['options' => $productos, 'empty' => true]);
                    echo $this->Form->control('cantidad');
                    echo $this->Form->control('precio');
                    echo $this->Form->control('porcentajeganancia');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
