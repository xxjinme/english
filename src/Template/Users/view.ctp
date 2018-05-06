<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hoa Dons'), ['controller' => 'HoaDons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hoa Don'), ['controller' => 'HoaDons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($user->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Password') ?></th>
            <td><?= h($user->user_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Role') ?></th>
            <td><?= h($user->user_role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Avatar') ?></th>
            <td><?= h($user->user_avatar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Gender') ?></th>
            <td><?= h($user->user_gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hoa Dons') ?></h4>
        <?php if (!empty($user->hoa_dons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Hd Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Hd Tong') ?></th>
                <th scope="col"><?= __('Hd Ngaylap') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->hoa_dons as $hoaDons): ?>
            <tr>
                <td><?= h($hoaDons->id) ?></td>
                <td><?= h($hoaDons->hd_id) ?></td>
                <td><?= h($hoaDons->user_id) ?></td>
                <td><?= h($hoaDons->hd_tong) ?></td>
                <td><?= h($hoaDons->hd_ngaylap) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HoaDons', 'action' => 'view', $hoaDons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HoaDons', 'action' => 'edit', $hoaDons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HoaDons', 'action' => 'delete', $hoaDons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hoaDons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
