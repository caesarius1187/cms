<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->username) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Api Token') ?></th>
                    <td><?= h($user->api_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Secret') ?></th>
                    <td><?= h($user->secret) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($user->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Puntodeventa') ?></th>
                    <td><?= $user->hasValue('puntodeventa') ? $this->Html->link($user->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $user->puntodeventa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Token Expires') ?></th>
                    <td><?= h($user->token_expires) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activation Date') ?></th>
                    <td><?= h($user->activation_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tos Date') ?></th>
                    <td><?= h($user->tos_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Secret Verified') ?></th>
                    <td><?= $user->secret_verified ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $user->active ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Superuser') ?></th>
                    <td><?= $user->is_superuser ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cajas') ?></h4>
                <?php if (!empty($user->cajas)) : ?>
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
                        <?php foreach ($user->cajas as $caja) : ?>
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
                <?php if (!empty($user->compras)) : ?>
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
                        <?php foreach ($user->compras as $compra) : ?>
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
                <h4><?= __('Related Extracciones') ?></h4>
                <?php if (!empty($user->extracciones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Saldo') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Puntodeventa Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->extracciones as $extraccione) : ?>
                        <tr>
                            <td><?= h($extraccione->id) ?></td>
                            <td><?= h($extraccione->descripcion) ?></td>
                            <td><?= h($extraccione->importe) ?></td>
                            <td><?= h($extraccione->saldo) ?></td>
                            <td><?= h($extraccione->fecha) ?></td>
                            <td><?= h($extraccione->puntodeventa_id) ?></td>
                            <td><?= h($extraccione->user_id) ?></td>
                            <td><?= h($extraccione->created) ?></td>
                            <td><?= h($extraccione->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Extracciones', 'action' => 'view', $extraccione->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Extracciones', 'action' => 'edit', $extraccione->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Extracciones', 'action' => 'delete', $extraccione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extraccione->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pagos') ?></h4>
                <?php if (!empty($user->pagos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Puntodeventa Id') ?></th>
                            <th><?= __('Compra Id') ?></th>
                            <th><?= __('Venta Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Tipo') ?></th>
                            <th><?= __('Metodo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->pagos as $pago) : ?>
                        <tr>
                            <td><?= h($pago->id) ?></td>
                            <td><?= h($pago->cliente_id) ?></td>
                            <td><?= h($pago->puntodeventa_id) ?></td>
                            <td><?= h($pago->compra_id) ?></td>
                            <td><?= h($pago->venta_id) ?></td>
                            <td><?= h($pago->numero) ?></td>
                            <td><?= h($pago->user_id) ?></td>
                            <td><?= h($pago->fecha) ?></td>
                            <td><?= h($pago->importe) ?></td>
                            <td><?= h($pago->descripcion) ?></td>
                            <td><?= h($pago->tipo) ?></td>
                            <td><?= h($pago->metodo) ?></td>
                            <td><?= h($pago->created) ?></td>
                            <td><?= h($pago->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pagos', 'action' => 'view', $pago->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pagos', 'action' => 'edit', $pago->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pagos', 'action' => 'delete', $pago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Social Accounts') ?></h4>
                <?php if (!empty($user->social_accounts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Provider') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Avatar') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Link') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Token Secret') ?></th>
                            <th><?= __('Token Expires') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Data') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->social_accounts as $socialAccount) : ?>
                        <tr>
                            <td><?= h($socialAccount->id) ?></td>
                            <td><?= h($socialAccount->user_id) ?></td>
                            <td><?= h($socialAccount->provider) ?></td>
                            <td><?= h($socialAccount->username) ?></td>
                            <td><?= h($socialAccount->reference) ?></td>
                            <td><?= h($socialAccount->avatar) ?></td>
                            <td><?= h($socialAccount->description) ?></td>
                            <td><?= h($socialAccount->link) ?></td>
                            <td><?= h($socialAccount->token) ?></td>
                            <td><?= h($socialAccount->token_secret) ?></td>
                            <td><?= h($socialAccount->token_expires) ?></td>
                            <td><?= h($socialAccount->active) ?></td>
                            <td><?= h($socialAccount->data) ?></td>
                            <td><?= h($socialAccount->created) ?></td>
                            <td><?= h($socialAccount->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SocialAccounts', 'action' => 'view', $socialAccount->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SocialAccounts', 'action' => 'edit', $socialAccount->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SocialAccounts', 'action' => 'delete', $socialAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialAccount->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ventas') ?></h4>
                <?php if (!empty($user->ventas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Presupuesto') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Fnombre') ?></th>
                            <th><?= __('Fcuit') ?></th>
                            <th><?= __('Fdomicilio') ?></th>
                            <th><?= __('Comprobante Id') ?></th>
                            <th><?= __('Puntodeventa Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Neto') ?></th>
                            <th><?= __('Porcentajedescuento') ?></th>
                            <th><?= __('Importedescuento') ?></th>
                            <th><?= __('Iva') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Comprobantedesde') ?></th>
                            <th><?= __('Comprobantehasta') ?></th>
                            <th><?= __('Concepto') ?></th>
                            <th><?= __('Servdesde') ?></th>
                            <th><?= __('Servhasta') ?></th>
                            <th><?= __('Vtopago') ?></th>
                            <th><?= __('Condicioniva') ?></th>
                            <th><?= __('Imptributos') ?></th>
                            <th><?= __('Importeivaexento') ?></th>
                            <th><?= __('Importenetogravado') ?></th>
                            <th><?= __('Fneto') ?></th>
                            <th><?= __('Fporcentajedescuento') ?></th>
                            <th><?= __('Fimportedescuento') ?></th>
                            <th><?= __('Fiva') ?></th>
                            <th><?= __('Fimptributos') ?></th>
                            <th><?= __('Fimportenetoivaexento') ?></th>
                            <th><?= __('Fimportenetonogravado') ?></th>
                            <th><?= __('Ftotal') ?></th>
                            <th><?= __('Cobrado') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->ventas as $venta) : ?>
                        <tr>
                            <td><?= h($venta->id) ?></td>
                            <td><?= h($venta->presupuesto) ?></td>
                            <td><?= h($venta->cliente_id) ?></td>
                            <td><?= h($venta->fnombre) ?></td>
                            <td><?= h($venta->fcuit) ?></td>
                            <td><?= h($venta->fdomicilio) ?></td>
                            <td><?= h($venta->comprobante_id) ?></td>
                            <td><?= h($venta->puntodeventa_id) ?></td>
                            <td><?= h($venta->user_id) ?></td>
                            <td><?= h($venta->numero) ?></td>
                            <td><?= h($venta->fecha) ?></td>
                            <td><?= h($venta->neto) ?></td>
                            <td><?= h($venta->porcentajedescuento) ?></td>
                            <td><?= h($venta->importedescuento) ?></td>
                            <td><?= h($venta->iva) ?></td>
                            <td><?= h($venta->total) ?></td>
                            <td><?= h($venta->comprobantedesde) ?></td>
                            <td><?= h($venta->comprobantehasta) ?></td>
                            <td><?= h($venta->concepto) ?></td>
                            <td><?= h($venta->servdesde) ?></td>
                            <td><?= h($venta->servhasta) ?></td>
                            <td><?= h($venta->vtopago) ?></td>
                            <td><?= h($venta->condicioniva) ?></td>
                            <td><?= h($venta->imptributos) ?></td>
                            <td><?= h($venta->importeivaexento) ?></td>
                            <td><?= h($venta->importenetogravado) ?></td>
                            <td><?= h($venta->fneto) ?></td>
                            <td><?= h($venta->fporcentajedescuento) ?></td>
                            <td><?= h($venta->fimportedescuento) ?></td>
                            <td><?= h($venta->fiva) ?></td>
                            <td><?= h($venta->fimptributos) ?></td>
                            <td><?= h($venta->fimportenetoivaexento) ?></td>
                            <td><?= h($venta->fimportenetonogravado) ?></td>
                            <td><?= h($venta->ftotal) ?></td>
                            <td><?= h($venta->cobrado) ?></td>
                            <td><?= h($venta->created) ?></td>
                            <td><?= h($venta->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ventas', 'action' => 'view', $venta->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ventas', 'action' => 'edit', $venta->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ventas', 'action' => 'delete', $venta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id)]) ?>
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
