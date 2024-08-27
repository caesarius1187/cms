<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Promotion $promotion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Promotion'), ['action' => 'edit', $promotion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Promotion'), ['action' => 'delete', $promotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Promotions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Promotion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="promotions view content">
            <h3><?= h($promotion->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $promotion->hasValue('producto') ? $this->Html->link($promotion->producto->id, ['controller' => 'Productos', 'action' => 'view', $promotion->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($promotion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Productopromocion Id') ?></th>
                    <td><?= $this->Number->format($promotion->productopromocion_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costo') ?></th>
                    <td><?= $promotion->costo === null ? '' : $this->Number->format($promotion->costo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganancia') ?></th>
                    <td><?= $promotion->ganancia === null ? '' : $this->Number->format($promotion->ganancia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $promotion->precio === null ? '' : $this->Number->format($promotion->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $promotion->cantidad === null ? '' : $this->Number->format($promotion->cantidad) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Detallepromotions') ?></h4>
                <?php if (!empty($promotion->detallepromotions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Promotion Id') ?></th>
                            <th><?= __('Producto Id') ?></th>
                            <th><?= __('Ganancia') ?></th>
                            <th><?= __('Precio') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($promotion->detallepromotions as $detallepromotion) : ?>
                        <tr>
                            <td><?= h($detallepromotion->id) ?></td>
                            <td><?= h($detallepromotion->promotion_id) ?></td>
                            <td><?= h($detallepromotion->producto_id) ?></td>
                            <td><?= h($detallepromotion->ganancia) ?></td>
                            <td><?= h($detallepromotion->precio) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Detallepromotions', 'action' => 'view', $detallepromotion->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Detallepromotions', 'action' => 'edit', $detallepromotion->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Detallepromotions', 'action' => 'delete', $detallepromotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallepromotion->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
