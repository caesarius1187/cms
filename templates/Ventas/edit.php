<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venta $venta
 * @var string[]|\Cake\Collection\CollectionInterface $clientes
 * @var string[]|\Cake\Collection\CollectionInterface $comprobantes
 * @var string[]|\Cake\Collection\CollectionInterface $puntodeventas
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $venta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ventas form content">
            <?= $this->Form->create($venta) ?>
            <fieldset>
                <legend><?= __('Edit Venta') ?></legend>
                <?php
                    echo $this->Form->control('presupuesto');
                    echo $this->Form->control('cliente_id', ['options' => $clientes, 'empty' => true]);
                    echo $this->Form->control('fnombre');
                    echo $this->Form->control('fcuit');
                    echo $this->Form->control('fdomicilio');
                    echo $this->Form->control('comprobante_id', ['options' => $comprobantes, 'empty' => true]);
                    echo $this->Form->control('puntodeventa_id', ['options' => $puntodeventas, 'empty' => true]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('numero');
                    echo $this->Form->control('fecha', ['empty' => true]);
                    echo $this->Form->control('neto');
                    echo $this->Form->control('porcentajedescuento');
                    echo $this->Form->control('importedescuento');
                    echo $this->Form->control('iva');
                    echo $this->Form->control('total');
                    echo $this->Form->control('comprobantedesde');
                    echo $this->Form->control('comprobantehasta');
                    echo $this->Form->control('concepto');
                    echo $this->Form->control('servdesde', ['empty' => true]);
                    echo $this->Form->control('servhasta', ['empty' => true]);
                    echo $this->Form->control('vtopago', ['empty' => true]);
                    echo $this->Form->control('condicioniva');
                    echo $this->Form->control('imptributos');
                    echo $this->Form->control('importeivaexento');
                    echo $this->Form->control('importenetogravado');
                    echo $this->Form->control('fneto');
                    echo $this->Form->control('fporcentajedescuento');
                    echo $this->Form->control('fimportedescuento');
                    echo $this->Form->control('fiva');
                    echo $this->Form->control('fimptributos');
                    echo $this->Form->control('fimportenetoivaexento');
                    echo $this->Form->control('fimportenetonogravado');
                    echo $this->Form->control('ftotal');
                    echo $this->Form->control('cobrado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
