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
            <?= $this->Html->link(__('Edit Puntodeventa'), ['action' => 'edit', $puntodeventa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Puntodeventa'), ['action' => 'delete', $puntodeventa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $puntodeventa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Puntodeventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Puntodeventa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="puntodeventas view content">
            <h3><?= h($puntodeventa->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($puntodeventa->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($puntodeventa->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($puntodeventa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $this->Number->format($puntodeventa->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Facturacionhabilitada') ?></th>
                    <td><?= $puntodeventa->facturacionhabilitada ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cajas') ?></h4>
                <?php if (!empty($puntodeventa->cajas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Puntodeventa Id') ?></th>
                            <th><?= __('Apertura') ?></th>
                            <th><?= __('Importeapertura') ?></th>
                            <th><?= __('Cierre') ?></th>
                            <th><?= __('Importecierre') ?></th>
                            <th><?= __('Diferencia') ?></th>
                            <th><?= __('Descripcioncierre') ?></th>
                            <th><?= __('Descripcionapertura') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($puntodeventa->cajas as $caja) : ?>
                        <tr>
                            <td><?= h($caja->id) ?></td>
                            <td><?= h($caja->user_id) ?></td>
                            <td><?= h($caja->puntodeventa_id) ?></td>
                            <td><?= h($caja->apertura) ?></td>
                            <td><?= h($caja->importeapertura) ?></td>
                            <td><?= h($caja->cierre) ?></td>
                            <td><?= h($caja->importecierre) ?></td>
                            <td><?= h($caja->diferencia) ?></td>
                            <td><?= h($caja->descripcioncierre) ?></td>
                            <td><?= h($caja->descripcionapertura) ?></td>
                            <td><?= h($caja->created) ?></td>
                            <td><?= h($caja->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cajas', 'action' => 'view', $caja->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cajas', 'action' => 'edit', $caja->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cajas', 'action' => 'delete', $caja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caja->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Compras') ?></h4>
                <?php if (!empty($puntodeventa->compras)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Puntodeventa Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Comprobante Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Neto') ?></th>
                            <th><?= __('Iva') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($puntodeventa->compras as $compra) : ?>
                        <tr>
                            <td><?= h($compra->id) ?></td>
                            <td><?= h($compra->user_id) ?></td>
                            <td><?= h($compra->puntodeventa_id) ?></td>
                            <td><?= h($compra->cliente_id) ?></td>
                            <td><?= h($compra->comprobante_id) ?></td>
                            <td><?= h($compra->numero) ?></td>
                            <td><?= h($compra->fecha) ?></td>
                            <td><?= h($compra->neto) ?></td>
                            <td><?= h($compra->iva) ?></td>
                            <td><?= h($compra->total) ?></td>
                            <td><?= h($compra->created) ?></td>
                            <td><?= h($compra->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Compras', 'action' => 'view', $compra->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Compras', 'action' => 'edit', $compra->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Compras', 'action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($puntodeventa->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Token Expires') ?></th>
                            <th><?= __('Api Token') ?></th>
                            <th><?= __('Activation Date') ?></th>
                            <th><?= __('Secret') ?></th>
                            <th><?= __('Secret Verified') ?></th>
                            <th><?= __('Tos Date') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Is Superuser') ?></th>
                            <th><?= __('Role') ?></th>
                            <th><?= __('Puntodeventa Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($puntodeventa->users as $user) : ?>
                        <tr>
                            <td><?= h($user->id) ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->first_name) ?></td>
                            <td><?= h($user->last_name) ?></td>
                            <td><?= h($user->token) ?></td>
                            <td><?= h($user->token_expires) ?></td>
                            <td><?= h($user->api_token) ?></td>
                            <td><?= h($user->activation_date) ?></td>
                            <td><?= h($user->secret) ?></td>
                            <td><?= h($user->secret_verified) ?></td>
                            <td><?= h($user->tos_date) ?></td>
                            <td><?= h($user->active) ?></td>
                            <td><?= h($user->is_superuser) ?></td>
                            <td><?= h($user->role) ?></td>
                            <td><?= h($user->puntodeventa_id) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
