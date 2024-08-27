<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 * @var string[]|\Cake\Collection\CollectionInterface $rubros
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="productos form content">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <legend><?= __('Edit Producto') ?></legend>
                <?php
                    echo $this->Form->control('rubro_id', ['options' => $rubros]);
                    echo $this->Form->control('promocion');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('precio');
                    echo $this->Form->control('costo');
                    echo $this->Form->control('ganancia');
                    echo $this->Form->control('gananciapack');
                    echo $this->Form->control('ganancia1');
                    echo $this->Form->control('ganancia2');
                    echo $this->Form->control('ganancia3');
                    echo $this->Form->control('ganancia4');
                    echo $this->Form->control('preciopack');
                    echo $this->Form->control('preciomayor1');
                    echo $this->Form->control('preciomayor2');
                    echo $this->Form->control('preciomayor3');
                    echo $this->Form->control('preciomayor4');
                    echo $this->Form->control('preciopack4');
                    echo $this->Form->control('preciopack3');
                    echo $this->Form->control('preciopack2');
                    echo $this->Form->control('preciopack1');
                    echo $this->Form->control('preciopack0');
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('codigopack');
                    echo $this->Form->control('cantpack');
                    echo $this->Form->control('stockminimo');
                    echo $this->Form->control('stock');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
