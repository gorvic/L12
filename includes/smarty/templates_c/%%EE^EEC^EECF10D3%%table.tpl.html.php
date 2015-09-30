<?php /* Smarty version 2.6.25-dev, created on 2015-09-28 23:34:07
         compiled from table.tpl.html */ ?>
<!--<h2 class="sub-header">Все объявления</h2>-->
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Название</th>
                <th>Имя</th>
                <th>Цена</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $this->_tpl_vars['ads_rows']; ?>

        </tbody>
    </table>
</div>