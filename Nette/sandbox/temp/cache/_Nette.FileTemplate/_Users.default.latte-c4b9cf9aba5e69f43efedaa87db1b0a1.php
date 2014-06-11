<?php //netteCache[01]000390a:2:{s:4:"time";s:21:"0.60809600 1402264963";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"C:\wamp2\www\projekt\Nette\sandbox\app\templates\Users\default.latte";i:2;i:1402264949;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\templates\Users\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6odzsvqzr0')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb71232d0ae1_title')) { function _lb71232d0ae1_title($_l, $_args) { extract($_args)
?> Užívatelia<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb1797435a80_content')) { function _lb1797435a80_content($_l, $_args) { extract($_args)
?><div id="left_panel">
    <div id="add_form">
        <div class="top">
            Užívatelia
        </div>
        <table id="users">
            <tr>
                <th>Nick</th>
                <th>Počet inzerátov</th>
            </tr>
<?php $iterations = 0; foreach ($users as $item): ?>
                <tr>
                    <td>
                        <a href="<?php echo htmlSpecialChars($basePath) ?>/cars/user/<?php echo htmlSpecialChars($item->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($item->name, ENT_NOQUOTES) ?></a>
                    </td>
                    <td>
                        <?php echo Nette\Templating\Helpers::escapeHtml($item->pocet, ENT_NOQUOTES) ?>

                    </td>
                </tr>
<?php $iterations++; endforeach ?>
        </table>
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
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?>
 
<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 