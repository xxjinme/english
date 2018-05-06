<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!--Chin style-->
    <?= $this->Html->css('newstyle.css') ?>
    <link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
    <title>ENGLISH BY YOURSELF</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?= $this->Html->script('theme')?>
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
</head>
<body>
    <!--Header-->
    <div class="header" >
        <div class="menu-logo">
            <div class="logo"><?= $this->Html->image('logo.png')?></div>
            <div class="menu" >
                <div class="menu-inner">
                    <ul>         

                        <li><a><?php echo $this->Html->link('Login', array('controller' => 'users','action' => 'login'));?></a></li>
                        <li><a><?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Your Course(<span class="badge" id="cart-counter">'.$count.'</span>)',
            array('controller'=>'carts','action'=>'view'),array('escape'=>false));?></a></li>
                        <li><a><?php echo $this->Html->link('Course', array('controller' => 'khoaHocs','action' => 'index'));?></a></li>
                        <li><a><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'home'))?></a></li>
                    </ul>
                </div>
            </div>
            <div class="menu_button"><span class="fa fa-bars"></span></div> 
        </div>  
    </div>

    <!-- End header-->
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
