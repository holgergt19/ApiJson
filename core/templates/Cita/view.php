<?php

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Citum'), ['action' => 'edit', $citum->citasId], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Citum'), ['action' => 'delete', $citum->citasId], ['confirm' => __('Are you sure you want to delete # {0}?', $citum->citasId), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cita'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Citum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cita view content">
            <h3><?= h($citum->citasId) ?></h3>
            <table>
                <tr>
                    <th><?= __('CitasId') ?></th>
                    <td><?= $this->Number->format($citum->citasId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($citum->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
