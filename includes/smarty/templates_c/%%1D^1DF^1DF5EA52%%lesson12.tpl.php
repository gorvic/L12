<?php /* Smarty version 2.6.25-dev, created on 2015-10-08 20:21:24
         compiled from lesson12.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'lesson12.tpl', 28, false),array('function', 'html_options', 'lesson12.tpl', 68, false),array('modifier', 'default', 'lesson12.tpl', 28, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lesson 12</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../css/stylesheet.css">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body style="width:1280px;padding: 5px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                Подача объявлений
                            </h4>
                        </div>
                        <form class="form-horizontal" method="POST" role="form">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <?php echo smarty_function_html_radios(array('name' => 'organization_form_id','options' => $this->_tpl_vars['organization_form'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['organization_form_id'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)),'separator' => "&nbsp;"), $this);?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="seller_name" class="col-sm-2 control-label"><?php echo $this->_tpl_vars['ad_person']; ?>
</label>
                                <div class="col-sm-10">
                                    <input type="text" name="seller_name" class="form-control" id="seller_name" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['seller_name'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" placeholder="Ваше имя">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Эл. почта</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['email'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" placeholder="Электронная почта">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="checkbox">
                                        <label for="allow_mails" class="col-sm-10 control-label">
                                            <input type="checkbox" value ="1" name="allow_mails" id="allow_mails" <?php echo $this->_tpl_vars['is_allow_mail']; ?>
> Я не хочу получать вопросы по объявлению по e-mail
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Телефон</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" id="phone" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" placeholder="Номер телефона">
                                </div>
                            </div>

                            <div class="form-group">
                                <div> <label for="location_id" class="col-sm-2 control-label">Город</label></div> 
                                <div class="col-sm-10">

                                    <select class="form-control" title="Выберите город" name="location_id" required  > 
                                        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['cities'],'selected' => $this->_tpl_vars['location_id']), $this);?>
 
                                    </select>   
                                </div>
                            </div>   


                            <div class="form-group">
                                <div> <label for="category_id" class="col-sm-2 control-label">Категория</label> 
                                    <div class="col-sm-10">

                                        <select class="form-control" title="Выберите категорию" name="category_id"  required>

                                            <?php $_from = $this->_tpl_vars['labels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['label']):
?>
                                                <optgroup label="<?php echo $this->_tpl_vars['label']; ?>
">
                                                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['subcategories'][$this->_tpl_vars['key']],'selected' => ((is_array($_tmp=@$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

                                                </optgroup>
                                            <?php endforeach; endif; unset($_from); ?> 
                                        </select> 
                                    </div>   
                                </div>   
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Название</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" placeholder="Название" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="desc" class="col-sm-2 control-label">Описание</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="description" class="form-control" rows="3" required><?php echo ((is_array($_tmp=@$this->_tpl_vars['description'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price" class="col-sm-2 control-label">Цена</label>
                                <div class="col-sm-10">
                                    <input type="text" name="price" class="form-control" id="price" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['price'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" placeholder="Цена" required>
                                </div>
                            </div>

                            <div class="row">  
                                <div class="col-md-7"> 
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-5">
                                            <button type="submit" name="<?php echo $this->_tpl_vars['button_name']; ?>
" value=<?php echo $this->_tpl_vars['button_value']; ?>
 class="btn btn-default"><?php echo $this->_tpl_vars['button_value']; ?>
</button>
                                            <?php if ($this->_tpl_vars['button_name'] == 'edit'): ?> 
                                                <input type="hidden" name="id" id="hiddenField" value="<?php echo $this->_tpl_vars['default_edit_id']; ?>
" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">   
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-5">
                                            <button type="submit"  class="btn btn-default" name="cancel">Отмена</button>
                                        </div>
                                    </div>   
                                </div>   
                            </div>  

                        </form>

                    </div>
                </div>

                <div class="col-md-5"> 
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'table.tpl.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </div>
    </body>
</html>