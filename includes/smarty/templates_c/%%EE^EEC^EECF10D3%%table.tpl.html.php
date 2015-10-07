<?php /* Smarty version 2.6.25-dev, created on 2015-10-05 22:04:23
         compiled from table.tpl.html */ ?>
<!--<h2 class="sub-header">Все объявления</h2>-->
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Название</th>
                <th></th>
                <th>Имя</th>
                <th>Цена</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php echo $this->_tpl_vars['ads_rows']; ?>

        </tbody>
    </table>
</div>