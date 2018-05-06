<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $course->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Chi Tiet Hoa Dons'), ['controller' => 'ChiTietHoaDons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chi Tiet Hoa Don'), ['controller' => 'ChiTietHoaDons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses form large-9 medium-8 columns content">
    <?= $this->Form->create($course,['enctype'=>'multipart/form-data']) ?>
        <fieldset> 
            <legend><?= __('Edit Course') ?></legend>
            <?php
                echo $this->Form->control('course_name', ['label' => 'Course Name: ']);
                echo $this->Form->control('course_price', ['label' => 'Price: ']);
                echo $this->Form->control('courses_description', ['label' => 'Description: ']);
                echo $this->Form->control('course_time', ['label' => 'Time: ']);
                echo $this->Form->control('course_teacher', ['label' => 'Teacher: ']);
                echo $this->Form->control('course_image', array('type' => 'file', ));
            ?>
        </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
