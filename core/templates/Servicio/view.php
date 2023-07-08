<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio $servicio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Servicio'), ['action' => 'edit', $servicio->servicioId], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Servicio'), ['action' => 'delete', $servicio->servicioId], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->servicioId), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Servicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Servicio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servicio view content">
            <h3><?= h($servicio->servicioId) ?></h3>
            <table>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= h($servicio->service) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($servicio->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costo') ?></th>
                    <td><?= h($servicio->costo) ?></td>
                </tr>
                <tr>
                    <th><?= __('ServicioId') ?></th>
                    <td><?= $this->Number->format($servicio->servicioId) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cita') ?></h4>
                <?php if (!empty($servicio->cita)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('CitasId') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Hora') ?></th>
                            <th><?= __('ServicioId') ?></th>
                            <th><?= __('ClienteId') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($servicio->cita as $cita) : ?>
                        <tr>
                            <td><?= h($cita->citasId) ?></td>
                            <td><?= h($cita->fecha) ?></td>
                            <td><?= h($cita->hora) ?></td>
                            <td><?= h($cita->servicioId) ?></td>
                            <td><?= h($cita->clienteId) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cita', 'action' => 'view', $cita->citasId]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cita', 'action' => 'edit', $cita->citasId]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cita', 'action' => 'delete', $cita->citasId], ['confirm' => __('Are you sure you want to delete # {0}?', $cita->citasId)]) ?>
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
