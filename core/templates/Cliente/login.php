<?= $this->Form->create() ?>
<?= $this->Form->control('email'); ?>
<?= $this->Form->control('password'); ?>
<?= $this->Form->submit() ?>
<?= $this->Html->link(__('Registrarse '), ['action' => 'add'], ['class' => 'button float-right']) ?>
<?= $this->Form->end() ?>
