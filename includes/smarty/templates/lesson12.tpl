<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lesson 12</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body style="width:500px;padding: 30px;">

        <div class="page-header">
            <h1>Подача объявлений</h1>
        </div>

        {include file='table.tpl.html'}
 
        <form class="form-horizontal" method="POST" role="form">
{*            <input type="hidden" name="id" value={$ad->getId()|default:0 }>*}

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">

                    {html_radios name="organization_form_id" options=$organization_form selected=$organization_form_id|default:0 separator="&nbsp;"}
                </div>
            </div>

            <div class="form-group">
                <label for="seller_name" class="col-sm-2 control-label">{$ad_person}</label>
                <div class="col-sm-10">
                    <input type="text" name="seller_name" class="form-control" id="seller_name" value="{$seller_name|default:''}" placeholder="Ваше имя">
                </div>
            </div>
                
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Эл. почта</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" value="{$email|default:''}" placeholder="Электронная почта">
                </div>
            </div>
                
            <div class="checkbox">
                <label>
                    <input type="checkbox" value ="1" name="allow_mails" id="allow_mails" {$is_allow_mail}> Я не хочу получать вопросы по объявлению по e-mail
                </label>
            </div>
                
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" id="phone" value="{$phone|default:''}" placeholder="Номер телефона">
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label"></label>
                <div> <label for="region">Город</label> {html_options name=location_id options=$cities selected=$location_id} </div>

                <div> <label for="region">Категория</label> {*name=category_id *}
                    <select title="Выберите категорию" name="category_id"  required>


                        {foreach from=$labels item=label key=key}
                            <optgroup label="{$label}">
                                {html_options  options=$subcategories.$key selected=$category_id|default:''}
                            </optgroup>
                        {/foreach} 
                    </select> 
                </div>   
            </div>
                    
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Название</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title" value="{$title|default:''}" placeholder="Название" required>
                </div>
            </div>
                
            <div class="form-group">
                <label for="desc" class="col-sm-2 control-label">Описание</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" class="form-control" rows="3" required>{$description|default:''}</textarea>
                </div>
            </div>
                
            <div class="form-group">
                <label for="price" class="col-sm-2 control-label">Цена</label>
                <div class="col-sm-10">
                    <input type="text" name="price" class="form-control" id="price" value="{$price|default:0}" placeholder="Цена" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="{$button_name}" value={$button_value} class="btn btn-default">{$button_value}</button>
                    {if $button_name eq 'edit'} 
                        <input type="hidden" name="id" id="hiddenField" value="{$default_edit_id}" />
                    {/if}
                </div>
            </div>
        </form>

{*         {include file='table.tpl.html'}*}
    </body>
</html>