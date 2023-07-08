<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Servicio> $servicio
 */
?>
<div class="servicio index content">
    
    <a href="<?php echo $this->Url->build(['controller' => 'Cliente', 'action' => 'index']); ?>" class='button float'>regresar</a>
    <h3><?= __('Servicio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('servicioId') ?></th>
                    <th><?= $this->Paginator->sort('service') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('costo') ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicio as $servicio) : ?>
                    <tr>
                        <td><?= $this->Number->format($servicio->servicioId) ?></td>
                        <td><?= h($servicio->service) ?></td>
                        <td><?= @$this->Html->image($servicio->image, ['style' => 'max-width:70px;height:70px;']) ?></td>
                        <td><?= h($servicio->costo) ?></td>
                        
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