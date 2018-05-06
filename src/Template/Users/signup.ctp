<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
    <div class="users form large-9 medium-8 columns content">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Sign up') ?></legend>
            <?php
                echo $this->Form->control('email');
                echo $this->Form->control('user_password',array('type' => 'password'));
                echo $this->Form->control('user_role');
                echo $this->Form->control('user_name');
                echo $this->Form->control('user_gender');
                echo $this->Form->control('user_avatar', array('type' => 'file'));
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
