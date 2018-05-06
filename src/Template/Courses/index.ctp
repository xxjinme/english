<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course[]|\Cake\Collection\CollectionInterface $courses
 */
?>

    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?></li>    
            <li><?= $this->Html->link(__('List Chi Tiet Hoa Dons'), ['controller' => 'ChiTietHoaDons', 'action' => 'index']) ?></li>
        </ul>
    </nav>

    <div class="courses index large-9 medium-8 columns content">
        <div class="allbox">
            <?php foreach ($courses as $course): ?>
                <div class="box">
                    <ul>
                    <img src="/english/webroot/img/course_img/<?= $course->course_image ?>" alt="CakePHP" /></ul>
                    <ul class="course_name"><?= h($course->course_name) ?></ul>
                    <ul class="course_price">Price: <?= h($course->course_price) ?></ul>
                    <ul class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $course->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $course->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
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
