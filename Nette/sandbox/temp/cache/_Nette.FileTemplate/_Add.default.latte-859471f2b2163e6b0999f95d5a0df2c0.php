<?php //netteCache[01]000388a:2:{s:4:"time";s:21:"0.22840500 1396795483";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:66:"C:\wamp2\www\projekt\Nette\sandbox\app\templates\Add\default.latte";i:2;i:1396738533;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\templates\Add\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '4opjrrbnus')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb9732257ebc_title')) { function _lb9732257ebc_title($_l, $_args) { extract($_args)
?>Pridanie inzerátu
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2731af3854_content')) { function _lb2731af3854_content($_l, $_args) { extract($_args)
?><div id="left_panel">
    <div id="add_form">
        <div class="top">
            Pridať inzerát
        </div>
<?php $_ctrl = $_control->getComponent("newAddForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
    </div>

</div>

<div id="right_panel">
<?php $_ctrl = $_control->getComponent("topCars"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 