<?php //netteCache[01]000388a:2:{s:4:"time";s:21:"0.47904400 1402267275";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:66:"C:\wamp2\www\projekt\Nette\sandbox\app\templates\Detail\none.latte";i:2;i:1388960233;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\templates\Detail\none.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'whzi41iga3')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb28059f3155_title')) { function _lb28059f3155_title($_l, $_args) { extract($_args)
?> Detail inzerátu<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc2e9b9d3e8_content')) { function _lbc2e9b9d3e8_content($_l, $_args) { extract($_args)
?><div id="car_data">
    <h2>Na tejto adrese nič nie je</h2>
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
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?>
 
<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 