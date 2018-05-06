    <div>
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?php echo $this->Html->link('List Course', array('controller' => 'khoaHocs','action' => 'index'));?></li>
            <li class="text-right">                 
                <?php echo $this->Html->link('Check out', array('controller' => 'carts','action' => 'checkout',$ztotal,$Auth->user('id')));?>
            </li>
        </ul>
    </div>    
    <div class="row">

        <div class="col-lg-12">
            <?php echo  $this->Form->create('Cart',array('url'=>array('controller'=>'carts', 'action'=>'update')));?>
            <table class="table">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <?php $total=0;?>
            <?php foreach ($khoaHocs as $khoaHoc):?>
            <tr>
                <td><?php echo $khoaHoc['course_name'];?></td>
                <td><?php echo $khoaHoc['course_price'];?>
                </td>
                <td><div class="col-xs-3">
                    <?php echo $this->Form->hidden('khoaHoc_id.',array('value'=>$khoaHoc['id']));?>
                    <?php echo $this->Form->input('count.',array('type'=>'number', 'label'=>false,
                    'class'=>'form-control input-sm', 'value'=>$khoaHoc['count']));?>                
                </div></td>
                <td><?php echo $khoaHoc['count']*$khoaHoc['gia']; ?>
                </td>
            </tr>
                <?php $total = $total + ($khoaHoc['count']*$khoaHoc['gia']);?>
                
                <?php endforeach;?>

            <tr class="success">
                <td colspan=3></td>
                <td>Total: <?php echo $total;?>
                </td>
            </tr>
            </tbody>
        </table>
        
        <?= $this->Form->button(__('Update')) ?>
        <?= $this->Form->end() ?>  

        <!-- Form Delete Cart -->
        <?php echo  $this->Form->create('Cart',array('url'=>array('controller'=>'carts', 'action'=>'deleteAll')));?>
        <?= $this->Form->button(__('Delete cart')) ?>
        <?= $this->Form->end() ?> 
    </div>
</div>

