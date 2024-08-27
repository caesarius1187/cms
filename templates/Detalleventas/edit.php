<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalleventa $detalleventa
 * @var string[]|\Cake\Collection\CollectionInterface $productos
 * @var string[]|\Cake\Collection\CollectionInterface $ventas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $detalleventa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $detalleventa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Detalleventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detalleventas form content">
            <?= $this->Form->create($detalleventa) ?>
            <fieldset>
                <legend><?= __('Edit Detalleventa') ?></legend>
                <?php
                    echo $this->Form->control('producto_id', ['options' => $productos, 'empty' => true]);
                    echo $this->Form->control('venta_id', ['options' => $ventas, 'empty' => true]);
                    echo $this->Form->control('precio');
                    echo $this->Form->control('ganancia');
                    echo $this->Form->control('tipoprecio');
                    echo $this->Form->control('costo');
                    echo $this->Form->control('cantidad');
                    echo $this->Form->control('porcentajedescuento');
                    echo $this->Form->control('importedescuento');
                    echo $this->Form->control('subtotal');
                    echo $this->Form->control('codigoalicuota');
                    echo $this->Form->control('alicuota');
                    echo $this->Form->control('importeiva');
                    echo $this->Form->control('subtotalconiva');
                    echo $this->Form->control('fcantidad');
                    echo $this->Form->control('fporcentajedescuento');
                    echo $this->Form->control('fprecio');
                    echo $this->Form->control('fimportedescuento');
                    echo $this->Form->control('fsubtotal');
                    echo $this->Form->control('fcodigoalicuota');
                    echo $this->Form->control('falicuota');
                    echo $this->Form->control('fimporteiva');
                    echo $this->Form->control('fsubtotalconiva');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
