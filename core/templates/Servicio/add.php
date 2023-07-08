<?php

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Servicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servicio form content">
            <?= $this->Form->create($servicio, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Add Servicio') ?></legend>
                <?php
                echo $this->Form->control('service');
                echo $this->Form->control('image_file', ['type' => 'file']);
                echo $this->Form->control('costo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
