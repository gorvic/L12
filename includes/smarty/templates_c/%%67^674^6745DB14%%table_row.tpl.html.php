<?php /* Smarty version 2.6.25-dev, created on 2015-09-29 07:55:42
         compiled from table_row.tpl.html */ ?>
<tr>
    <td><a href="?id=<?php echo $this->_tpl_vars['ad_in_table']->getId(); ?>
&mode=show"><?php echo $this->_tpl_vars['ad_in_table']->getTitle(); ?>
</td>
    <td><?php echo $this->_tpl_vars['ad_in_table']->getSellerName(); ?>
</td>
    <td><?php echo $this->_tpl_vars['ad_in_table']->getPrice(); ?>
</td>
    <td><a href="?id=<?php echo $this->_tpl_vars['ad_in_table']->getId(); ?>
&mode=delete">[x]</a></td>
</tr>