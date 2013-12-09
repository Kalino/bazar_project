<?php //netteCache[01]000403a:2:{s:4:"time";s:21:"0.95279900 1386193319";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:81:"C:\wamp2\www\rocnikovy_projekt\Nette\sandbox\app\templates\Homepage\default.latte";i:2;i:1386188945;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\rocnikovy_projekt\Nette\sandbox\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'zjsr30shri')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb70d5ae4e3d_content')) { function _lb70d5ae4e3d_content($_l, $_args) { extract($_args)
?><div id="left_panel">
    <div id="id_baseform">
        <div class="top">Moj dlsi nadpis</div>
<div id="<?php echo $_control->getSnippetId('form') ?>"><?php call_user_func(reset($_l->blocks['_form']), $_l, $template->getParameters()) ?>
</div>    </div>
</div>
    
<div id="right_panel">
    <div class="right_top">
        <div class="top"><a href="<?php echo htmlSpecialChars($_control->link("Cars:default")) ?>
">Link</a></div>
 
    </div>
    <div class="right_top">
        <div class="top">Moj dlsi nadpis</div>
        
    </div>
    <div class="right_top">
        <div class="top">Moj dlsi nadpis</div>
        
    </div>
</div>
<?php
}}

//
// block _form
//
if (!function_exists($_l->blocks['_form'][] = '_lb4255f3aae9__form')) { function _lb4255f3aae9__form($_l, $_args) { extract($_args); $_control->validateControl('form')
?>            <fieldset>
<?php $_ctrl = $_control->getComponent("newSearchForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
            </fieldset>
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>





