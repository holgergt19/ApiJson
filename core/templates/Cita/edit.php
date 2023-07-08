<?php

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $citum->citasId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $citum->citasId), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cita'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cita form content">
            <?= $this->Form->create($citum) ?>
            <fieldset>
                <legend><?= __('Edit Citum') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
