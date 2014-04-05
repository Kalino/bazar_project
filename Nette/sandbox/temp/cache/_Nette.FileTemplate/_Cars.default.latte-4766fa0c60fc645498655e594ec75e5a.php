<?php //netteCache[01]000389a:2:{s:4:"time";s:21:"0.23754700 1389997364";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:67:"C:\wamp2\www\projekt\Nette\sandbox\app\templates\Cars\default.latte";i:2;i:1389997362;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\templates\Cars\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'l9bex2dg8k')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb2113e93a29_title')) { function _lb2113e93a29_title($_l, $_args) { extract($_args)
?> Zoznam áut<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb0b5f3dc0f5_content')) { function _lb0b5f3dc0f5_content($_l, $_args) { extract($_args)
?><div id="left_panel">

<?php $iterations = 0; foreach ($cars as $item): ?>
        <a href="<?php echo htmlSpecialChars($basePath) ?>/detail/show/<?php echo htmlSpecialChars($item->id) ?>" target="_blank">
            <div class="car_info">
                <div class="car_info_title"><?php echo Nette\Templating\Helpers::escapeHtml($znacky[$item->brand], ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($modely[$item->model], ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($item->name, ENT_NOQUOTES) ?>

                    <div class="date"><?php echo Nette\Templating\Helpers::escapeHtml($template->date($item->create_date, '%d.%m.%Y'), ENT_NOQUOTES) ?></div>
                </div>
                <div class="car_info_image">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/cars/<?php echo htmlSpecialChars($item->main_image) ?>" alt="car_image" />
                </div>
                <div class="car_info_content">
                    
                    <?php echo Nette\Templating\Helpers::escapeHtml($stringy[$item->region], ENT_NOQUOTES) ?>
&nbsp;kraj, r.v.: <?php echo Nette\Templating\Helpers::escapeHtml($item->year, ENT_NOQUOTES) ?>
, Objem motora: <?php echo Nette\Templating\Helpers::escapeHtml($item->capacity, ENT_NOQUOTES) ?>
, <?php echo Nette\Templating\Helpers::escapeHtml($item->power, ENT_NOQUOTES) ?>
&nbsp;kW, <?php echo Nette\Templating\Helpers::escapeHtml($stringy[$item->gas], ENT_NOQUOTES) ?>, 
                    <?php echo Nette\Templating\Helpers::escapeHtml($item->kilometres, ENT_NOQUOTES) ?>
&nbsp;km, <?php echo Nette\Templating\Helpers::escapeHtml($stringy[$item->gear], ENT_NOQUOTES) ?>&nbsp;prevodovka
                </div>
                <span>Cena: <?php echo Nette\Templating\Helpers::escapeHtml($item->price, ENT_NOQUOTES) ?>&euro;</span>
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
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?>
 
<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 