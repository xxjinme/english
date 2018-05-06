<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChiTietHoaDon[]|\Cake\Collection\CollectionInterface $chiTietHoaDons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Chi Tiet Hoa Don'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chiTietHoaDons index large-9 medium-8 columns content">
    <h3><?= __('Chi Tiet Hoa Dons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cthd_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hd_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chiTietHoaDons as $chiTietHoaDon): ?>
            <tr>
                <td><?= $this->Number->format($chiTietHoaDon->id) ?></td>
                <td><?= h($chiTietHoaDon->cthd_id) ?></td>
                <td><?= h($chiTietHoaDon->hd_id) ?></td>
                <td><?= $chiTietHoaDon->has('course') ? $this->Html->link($chiTietHoaDon->course->id, ['controller' => 'Courses', 'action' => 'view', $chiTietHoaDon->course->id]) : '' ?></td>
                <td><?= h($chiTietHoaDon->course_price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chiTietHoaDon->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chiTietHoaDon->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chiTietHoaDon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chiTietHoaDon->id)]) ?>
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
