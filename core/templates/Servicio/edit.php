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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $servicio->servicioId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->servicioId), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Servicio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servicio form content">
            <?= $this->Form->create($servicio) ?>
            <fieldset>
                <legend><?= __('Edit Servicio') ?></legend>
                <?php
                    echo $this->Form->control('service');
                    echo $this->Form->control('image');
                    echo $this->Form->control('costo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
