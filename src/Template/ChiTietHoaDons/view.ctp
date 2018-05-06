<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChiTietHoaDon $chiTietHoaDon
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chi Tiet Hoa Don'), ['action' => 'edit', $chiTietHoaDon->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chi Tiet Hoa Don'), ['action' => 'delete', $chiTietHoaDon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chiTietHoaDon->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Chi Tiet Hoa Dons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chi Tiet Hoa Don'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chiTietHoaDons view large-9 medium-8 columns content">
    <h3><?= h($chiTietHoaDon->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cthd Id') ?></th>
            <td><?= h($chiTietHoaDon->cthd_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hd Id') ?></th>
            <td><?= h($chiTietHoaDon->hd_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $chiTietHoaDon->has('course') ? $this->Html->link($chiTietHoaDon->course->id, ['controller' => 'Courses', 'action' => 'view', $chiTietHoaDon->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course Price') ?></th>
            <td><?= h($chiTietHoaDon->course_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($chiTietHoaDon->id) ?></td>
        </tr>
    </table>
</div>
