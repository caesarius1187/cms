<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detallecompra $detallecompra
 * @var string[]|\Cake\Collection\CollectionInterface $compras
 * @var string[]|\Cake\Collection\CollectionInterface $productos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $detallecompra->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $detallecompra->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Detallecompras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detallecompras form content">
            <?= $this->Form->create($detallecompra) ?>
            <fieldset>
                <legend><?= __('Edit Detallecompra') ?></legend>
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
