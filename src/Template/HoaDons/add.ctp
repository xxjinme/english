<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HoaDon $hoaDon
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hoa Dons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hoaDons form large-9 medium-8 columns content">
    <?= $this->Form->create($hoaDon) ?>
    <fieldset>
        <legend><?= __('Add Hoa Don') ?></legend>
        <?php
            echo $this->Form->control('hd_id');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('hd_tong');
            echo $this->Form->control('hd_ngaylap');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
