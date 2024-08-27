<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pago $pago
 * @var string[]|\Cake\Collection\CollectionInterface $clientes
 * @var string[]|\Cake\Collection\CollectionInterface $puntodeventas
 * @var string[]|\Cake\Collection\CollectionInterface $compras
 * @var string[]|\Cake\Collection\CollectionInterface $ventas
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pago->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pago->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pagos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pagos form content">
            <?= $this->Form->create($pago) ?>
            <fieldset>
                <legend><?= __('Edit Pago') ?></legend>
                <?php
                    echo $this->Form->control('cliente_id', ['options' => $clientes, 'empty' => true]);
                    echo $this->Form->control('puntodeventa_id', ['options' => $puntodeventas, 'empty' => true]);
                    echo $this->Form->control('compra_id', ['options' => $compras]);
                    echo $this->Form->control('venta_id', ['options' => $ventas]);
                    echo $this->Form->control('numero');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('fecha', ['empty' => true]);
                    echo $this->Form->control('importe');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('metodo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
