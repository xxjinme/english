<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HoaDon[]|\Cake\Collection\CollectionInterface $hoaDons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hoa Don'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hoaDons index large-9 medium-8 columns content">
    <h3><?= __('Hoa Dons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hd_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hd_tong') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hd_ngaylap') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hoaDons as $hoaDon): ?>
            <tr>
                <td><?= $this->Number->format($hoaDon->id) ?></td>
                <td><?= h($hoaDon->hd_id) ?></td>
                <td><?= $hoaDon->has('user') ? $this->Html->link($hoaDon->user->id, ['controller' => 'Users', 'action' => 'view', $hoaDon->user->id]) : '' ?></td>
                <td><?= h($hoaDon->hd_tong) ?></td>
                <td><?= h($hoaDon->hd_ngaylap) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hoaDon->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hoaDon->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hoaDon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hoaDon->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
