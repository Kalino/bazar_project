<?php //netteCache[01]000393a:2:{s:4:"time";s:21:"0.31908400 1386373931";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:71:"C:\wamp2\www\projekt\Nette\sandbox\app\templates\Homepage\default.latte";i:2;i:1386373928;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'qlqfpxuats')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbcee39229aa_content')) { function _lbcee39229aa_content($_l, $_args) { extract($_args)
?><div id="left_panel">

    <div class="center">
        <a href="<?php echo htmlSpecialChars($_control->link("classic")) ?>">
            <div id="show_normal">
                Klasický formulár
            </div>
        </a>
    </div>

<?php $iterations = 0; foreach ($pole as $item): ?>
        <a href="?id=<?php echo htmlSpecialChars($item->ID) ?>">
            <div class="small_block">
                <div>
                    <?php echo Nette\Templating\Helpers::escapeHtml($item->name, ENT_NOQUOTES) ?>

                </div>
                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/logos/<?php echo htmlSpecialChars($item->src) ?>
" alt="<?php echo htmlSpecialChars($item->name) ?>" />
            </div>
        </a>
<?php $iterations++; endforeach ?>
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>





