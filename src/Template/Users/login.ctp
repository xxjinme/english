<fieldset>	
	<legend><?= __('LOGIN') ?></legend>
	<?= $this->Form->create() ?>
	<?= $this->Form->control('email') ?>
	<?= $this->Form->control('user_password') ?>
	<?= $this->Form->button('Login') ?>
	<?= $this->Html->link(__('Dont have an account? Sign up'), ['action' => 'signup']) ?>
	<?= $this->Form->end() ?>
</fieldset>
