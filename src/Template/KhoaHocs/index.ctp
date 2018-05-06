<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KhoaHoc[]|\Cake\Collection\CollectionInterface $khoaHocs
 */
?>

    <div class="khoahocs index large-9 medium-8 columns content">
        <div class="allbox">
            <?php foreach ($courses as $course): ?>
                <div class="box">
                    <ul>
                    <img src="/english/webroot/img/course_img/<?= $course->course_image ?>" alt="CakePHP" /></ul>
                    <ul class="course_name"><?= h($course->course_name) ?></ul>
                    <ul class="course_price">Price: <?= h($course->course_price) ?></ul>
                    <ul class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $course->id]) ?>
                </div>
                <!--Shopping Cart-->
                <div class="single-but item_add">
                    <?php echo $this->Form->create('Cart', ['id'=>'add-form', 'url' => ['controller'=>'carts', 'action' => 'add']]); ?>
                    <?php echo $this->Form->hidden('khoaHoc_id',array('value'=>$course->id))?>
                    <?= $this->Form->button(__('Add to cart')) ?>
                    <?= $this->Form->end() ?>  
                </div> 
                <!--End Shopping Cart-->
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
<script>
$(document).ready(function(){
    $('#add-form').submit(function(e){
        e.preventDefault();
        var tis = $(this);
        $.post(tis.attr('action'),tis.serialize(),function(data){
            $('#cart-counter').text(data);
        });
    });
});
</script>