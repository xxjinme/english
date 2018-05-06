<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="regist">	
		<?php echo $this->Form->create();?>
		<?php echo "<fieldset>";?>
		<?php echo $this->Form->control('name',['required'=>'true', 'label' => 'Your Name: ']);?>
		<?php echo $this->Form->control('email',['type'=>'email','required'=>'true', 'label' => 'Your Email:  ']);?>
		<?php echo $this->Form->control('pass',['type'=>'password','required'=>'true', 'label' => 'Password:  ']);?>
		<?php echo $this->Form->control('status',['type' =>'hidden','value' => 'InActive']);?>
		<?php echo $this->Form->button(__('Sign Up'));?>				
		<?php echo "</fieldset>";?>
		<?php echo $this->Form->end();?>
</div>


