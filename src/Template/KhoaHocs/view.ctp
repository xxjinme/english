<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chi Tiet Hoa Dons'), ['controller' => 'ChiTietHoaDons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chi Tiet Hoa Don'), ['controller' => 'ChiTietHoaDons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course Name') ?></th>
            <td><?= h($course->course_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course Price') ?></th>
            <td><?= h($course->course_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course Description') ?></th>
            <td><?= h($course->course_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course Teacher') ?></th>
            <td><?= h($course->course_teacher) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course Image') ?></th>
            <td><?= h($course->course_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course Time') ?></th>
            <td><?= h($course->course_time) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Chi Tiet Hoa Dons') ?></h4>
        <?php if (!empty($course->chi_tiet_hoa_dons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cthd Id') ?></th>
                <th scope="col"><?= __('Hd Id') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Course Price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->chi_tiet_hoa_dons as $chiTietHoaDons): ?>
            <tr>
                <td><?= h($chiTietHoaDons->id) ?></td>
                <td><?= h($chiTietHoaDons->cthd_id) ?></td>
                <td><?= h($chiTietHoaDons->hd_id) ?></td>
                <td><?= h($chiTietHoaDons->course_id) ?></td>
                <td><?= h($chiTietHoaDons->course_price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ChiTietHoaDons', 'action' => 'view', $chiTietHoaDons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ChiTietHoaDons', 'action' => 'edit', $chiTietHoaDons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChiTietHoaDons', 'action' => 'delete', $chiTietHoaDons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chiTietHoaDons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
