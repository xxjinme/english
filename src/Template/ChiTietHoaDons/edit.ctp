<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChiTietHoaDon $chiTietHoaDon
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chiTietHoaDon->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chiTietHoaDon->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Chi Tiet Hoa Dons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chiTietHoaDons form large-9 medium-8 columns content">
    <?= $this->Form->create($chiTietHoaDon) ?>
    <fieldset>
        <legend><?= __('Edit Chi Tiet Hoa Don') ?></legend>
        <?php
            echo $this->Form->control('cthd_id');
            echo $this->Form->control('hd_id');
            echo $this->Form->control('course_id', ['options' => $courses]);
            echo $this->Form->control('course_price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
