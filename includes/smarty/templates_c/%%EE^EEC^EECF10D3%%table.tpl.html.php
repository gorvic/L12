<?php /* Smarty version 2.6.25-dev, created on 2015-10-08 20:29:40
         compiled from table.tpl.html */ ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>
            Список объявлений 
        </h4>
    </div>
    <div class="span3">
        <table class="table">
            <thead>
                <tr>
                    <th class="col-xs-4">Название</th>
                    <th class="col-xs-1"></th>
                    <th class="col-xs-3">Имя</th>
                    <th class="col-xs-3">Цена</th>
                    <th class="col-xs-1"></th>
                </tr>
            </thead>
            <tbody>
                <?php echo $this->_tpl_vars['ads_rows']; ?>

            </tbody>
        </table>
    </div>
</div>