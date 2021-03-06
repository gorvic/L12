<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lesson 12</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body style="padding: 5px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-5">
                    <div id="panel1" class="panel panel-primary">
                        <div class="panel-heading pagination-centered">
                            <h4>
                                Подача объявлений
                            </h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" role="form">
                                <div class="form-group form-group-sm">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        {html_radios name="organization_form_id" options=$organization_form selected=$organization_form_id|default:0 separator="&nbsp;"}
                                    </div>
                                </div>

                                <div class="form-group form-group-sm">
                                    <label for="seller_name" class="col-sm-2 control-label">{$ad_person}</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="seller_name" class="form-control" id="seller_name" value="{$seller_name|default:''}" placeholder="Ваше имя">
                                    </div>
                                </div>

                                <div class="form-group form-group-sm">
                                    <label for="email" class="col-sm-2 control-label">Эл. почта</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="email" value="{$email|default:''}" placeholder="Электронная почта">
                                    </div>
                                </div>

                                <div class="form-group form-group-sm">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <label for="allow_mails" class="col-sm-12 control-label">
                                                <input type="checkbox" value ="1" name="allow_mails" id="allow_mails" {$is_allow_mail}> Я не хочу получать вопросы по объявлению по e-mail
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group form-group-sm">
                                    <label for="phone" class="col-sm-2 control-label">Телефон</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone" class="form-control" id="phone" value="{$phone|default:''}" placeholder="Номер телефона">
                                    </div>
                                </div>

                                <div class="form-group form-group-sm">
                                    <div> <label for="location_id" class="col-sm-2 control-label">Город</label></div> 
                                    <div class="col-sm-10">

                                        <select class="form-control" title="Выберите город" name="location_id" required  > 
                                            {html_options options=$cities selected=$location_id} 
                                        </select>   
                                    </div>
                                </div>   


                                <div class="form-group form-group-sm">
                                    <div> <label for="category_id" class="col-sm-2 control-label">Категория</label> 
                                        <div class="col-sm-10">

                                            <select class="form-control" title="Выберите категорию" name="category_id"  required>

                                                {foreach from=$labels item=label key=key}
                                                    <optgroup label="{$label}">
                                                        {html_options  options=$subcategories.$key selected=$category_id|default:''}
                                                    </optgroup>
                                                {/foreach} 
                                            </select> 
                                        </div>   
                                    </div>   
                                </div>

                                <div class="form-group form-group-sm">
                                    <label for="title" class="col-sm-2 control-label">Название</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="title" value="{$title|default:''}" placeholder="Название" required>
                                    </div>
                                </div>

                                <div class="form-group form-group-sm">
                                    <label for="desc" class="col-sm-2 control-label">Описание</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="description" class="form-control" rows="3" required>{$description|default:''}</textarea>
                                    </div>
                                </div>

                                <div class="form-group form-group-sm">
                                    <label for="price" class="col-sm-2 control-label">Цена</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="price" class="form-control" id="price" value="{$price|default:0}" placeholder="Цена" required>
                                    </div>
                                </div>

                                {* <div class="row">  
                                <div class="col-md-3"> 
                                <div class="form-group">
                                <div class="col-md-offset-4 col-sm-5">
                                <button type="submit" name="{$button_name}" value={$button_value} class="btn btn-default">{$button_value}</button>
                                {if $button_name eq 'edit'} 
                                <input type="hidden" name="id" id="hiddenField" value="{$default_edit_id}" />
                                {/if}
                                </div>
                                </div>
                                </div>
                                <div class="col-md-3">   
                                <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-5">
                                <button type="submit"  class="btn btn-default" name="cancel">Отмена</button>
                                </div>
                                </div>   
                                </div>   
                                </div>  *}

                                <div class="col-md-offset-2 col-md-12"> 
                                    <div class="btn-group btn-group-md">
                                        <button type="submit" name="{$button_name}" value="{$button_value}" class="btn btn-default">{$button_value}</button>     
                                        {if $button_name eq 'edit'} 
                                            <input type="hidden" name="id" id="hiddenField" value="{$default_edit_id}" />
                                        {/if}
                                        <button type="submit"  class="btn btn-default" name="cancel">Отмена</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-md-5"> 
                    {include file='table.tpl.html'}
                </div>
            </div>
        </div>
      <script>
           {literal}
               $(document).ready(
                       function() {
                        var h = $("#panel1").height(); 
                        $("#panel2").height(h);
                    }
                     );
            {/literal}                
        </script>
    </body>
</html>