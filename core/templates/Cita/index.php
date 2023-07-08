<?php


?>
<div class="cita index content">
    <?= $this->Html->link(__('Nueva Cita'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <a href="<?php echo $this->Url->build(['controller' => 'Cliente', 'action' => 'index']); ?>" class='button float'>Regresar</a>
    <h3><?= __('Cita') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('citasId') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('hora') ?></th>
                    <th><?= $this->Paginator->sort('Servicio') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cita as $citum) : ?>
                    <tr>
                        <td><?= $this->Number->format($citum->citasId) ?></td>
                        <td><?= h($citum->fecha) ?></td>
                        <td><?= h($citum->hora) ?></td>
                        <td><?= $citum->servicio->service ?></td>
                        



                        <td class="actions">
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $citum->citasId], ['confirm' => __('Are you sure you want to delete # {0}?', $citum->citasId)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>