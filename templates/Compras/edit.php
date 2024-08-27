<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compra $compra
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $puntodeventas
 * @var string[]|\Cake\Collection\CollectionInterface $clientes
 * @var string[]|\Cake\Collection\CollectionInterface $comprobantes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compra->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Compras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="compras form content">
            <?= $this->Form->create($compra) ?>
            <fieldset>
                <legend><?= __('Edit Compra') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('puntodeventa_id', ['options' => $puntodeventas, 'empty' => true]);
                    echo $this->Form->control('cliente_id', ['options' => $clientes, 'empty' => true]);
                    echo $this->Form->control('comprobante_id', ['options' => $comprobantes, 'empty' => true]);
                    echo $this->Form->control('numero');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('neto');
                    echo $this->Form->control('iva');
                    echo $this->Form->control('total');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
