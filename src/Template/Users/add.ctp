<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('> List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user,['enctype'=>'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('user_name',['label' => 'User Name: ']);
            echo $this->Form->control('user_password',['label' => 'Password: ']);
            echo $this->Form->control('email',['label' => 'Email: ']);
            echo $this->Form->control('user_gender',['label' => 'Gender: ']);
            echo $this->Form->control('user_role', ['label' => 'Role: ']);
            echo $this->Form->control('user_avatar', array('type' => 'file'), ['label' => 'Image: ']);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
