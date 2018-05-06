<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HoaDon $hoaDon
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hoa Don'), ['action' => 'edit', $hoaDon->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hoa Don'), ['action' => 'delete', $hoaDon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hoaDon->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hoa Dons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hoa Don'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hoaDons view large-9 medium-8 columns content">
    <h3><?= h($hoaDon->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hd Id') ?></th>
            <td><?= h($hoaDon->hd_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $hoaDon->has('user') ? $this->Html->link($hoaDon->user->id, ['controller' => 'Users', 'action' => 'view', $hoaDon->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hd Tong') ?></th>
            <td><?= h($hoaDon->hd_tong) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hoaDon->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hd Ngaylap') ?></th>
            <td><?= h($hoaDon->hd_ngaylap) ?></td>
        </tr>
    </table>
</div>
