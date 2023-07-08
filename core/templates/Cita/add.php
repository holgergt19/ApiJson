<?php

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cita'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    


    <div class="column-responsive column-80">
        <div class="cita form content">
            <?= $this->Form->create($citum) ?>
            <fieldset>
                <legend><?= __('Add Citum') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('hora', ['type' => 'time']);
                    echo $this->Form->control('servicioId', ['options' => $nombresServicios]);
                    
                   

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
