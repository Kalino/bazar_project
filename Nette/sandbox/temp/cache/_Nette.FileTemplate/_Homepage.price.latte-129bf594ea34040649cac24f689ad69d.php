<?php //netteCache[01]000391a:2:{s:4:"time";s:21:"0.58209900 1389642426";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"C:\wamp2\www\projekt\Nette\sandbox\app\templates\Homepage\price.latte";i:2;i:1389642420;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\templates\Homepage\price.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '7yesyesr8b')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb246d05cc36_content')) { function _lb246d05cc36_content($_l, $_args) { extract($_args)
;call_user_func(reset($_l->blocks['links']), $_l, get_defined_vars())  ?>
<div id="left_panel">

    <div class="center">Zvoľte rok:</div>
     <div id="slideryear"></div><br />
    <div class="center">Zvoľte cenu:</div>
    <div id="sliderprice"></div>
<?php $_ctrl = $_control->getComponent("shortSearchForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</div>

<div id="right_panel">
<?php $_ctrl = $_control->getComponent("topCars"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</div>
<?php
}}

//
// block links
//
if (!function_exists($_l->blocks['links'][] = '_lb3b2637c84e_links')) { function _lb3b2637c84e_links($_l, $_args) { extract($_args)
?><link rel="stylesheet" media="all" href="<?php echo htmlSpecialChars($basePath) ?>/slider/css/ithing-min.css" />

<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbb16bfae366_scripts')) { function _lbb16bfae366_scripts($_l, $_args) { extract($_args)
?><script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery-ui.min.js"></script>
<script src="<?php echo htmlSpecialChars($basePath) ?>/slider/jqrangeslider-min.js"></script>
<script src="<?php echo htmlSpecialChars($basePath) ?>/js/slider.js"></script>
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>





