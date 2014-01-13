<?php //netteCache[01]000391a:2:{s:4:"time";s:21:"0.48834500 1389294817";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"C:\wamp2\www\projekt\Nette\sandbox\app\templates\Detail\default.latte";i:2;i:1389294816;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\templates\Detail\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'on2g7bfcio')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb0fbb5e499e_title')) { function _lb0fbb5e499e_title($_l, $_args) { extract($_args)
?> Detail inzerátu<?php
}}

//
// block links
//
if (!function_exists($_l->blocks['links'][] = '_lb69c29cc496_links')) { function _lb69c29cc496_links($_l, $_args) { extract($_args)
?><link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/lightbox/css/lightbox.css" />
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb26bd472523_content')) { function _lb26bd472523_content($_l, $_args) { extract($_args)
?><div id="car_data">
    <h2>
        <?php echo Nette\Templating\Helpers::escapeHtml($pole['brand'], ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($pole['model'], ENT_NOQUOTES) ?>

        <?php echo Nette\Templating\Helpers::escapeHtml($pole['name'], ENT_NOQUOTES) ?>

    </h2>
    <div class="date"><?php echo Nette\Templating\Helpers::escapeHtml($template->date($pole['create'], '%d.%m.%Y'), ENT_NOQUOTES) ?></div>
    <hr />
    <h3>Základné údaje</h3>
    <?php echo Nette\Templating\Helpers::escapeHtml($pole['region'], ENT_NOQUOTES) ?>
 kraj, r.v.: <?php echo Nette\Templating\Helpers::escapeHtml($pole['year'], ENT_NOQUOTES) ?>,
    Objem motora: <?php echo Nette\Templating\Helpers::escapeHtml($pole['capacity'], ENT_NOQUOTES) ?>
, <?php echo Nette\Templating\Helpers::escapeHtml($pole['gas'], ENT_NOQUOTES) ?>,
    <?php echo Nette\Templating\Helpers::escapeHtml($pole['kilometres'], ENT_NOQUOTES) ?>
&nbsp;km, <?php echo Nette\Templating\Helpers::escapeHtml($pole['gear'], ENT_NOQUOTES) ?> prevodovka,
    <?php echo Nette\Templating\Helpers::escapeHtml($pole['power'], ENT_NOQUOTES) ?>&nbsp;kW
    <hr />
    <h3>Bezpečnostné prvky</h3>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($data) as $item): if ($item->category == 0): ?>
            <?php echo Nette\Templating\Helpers::escapeHtml($item->name, ENT_NOQUOTES) ;if (!$iterator->isLast()): ?>
,<?php endif ?>

<?php endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
    <hr />
    <h3>Výbava</h3>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($data2) as $item): if ($item->category == 1): ?>
            <?php echo Nette\Templating\Helpers::escapeHtml($item->name, ENT_NOQUOTES) ;if (!$iterator->isLast()): ?>
,<?php endif ?>

<?php endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
    <hr />
    <h3>Popis majiteľa</h3>
    <?php echo Nette\Templating\Helpers::escapeHtml($pole['about'], ENT_NOQUOTES) ?>

    <hr />
    <h3>Kontakt</h3>
    Telefónne číslo: <?php echo Nette\Templating\Helpers::escapeHtml($pole['phone'], ENT_NOQUOTES) ?>

    <hr />
    <p id="price">Cena: <?php echo Nette\Templating\Helpers::escapeHtml($pole['price'], ENT_NOQUOTES) ?>&euro;</p>
</div>
<div id="car_images">
    <a href="<?php echo htmlSpecialChars($basePath) ?>/images/cars/<?php echo htmlSpecialChars($pole['main_image']) ?>" data-lightbox="images">
        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/cars/<?php echo htmlSpecialChars($pole['main_image']) ?>" alt="car" id="main_image" /> 
    </a>
    <div id="other_images">
<?php $iterations = 0; foreach ($image as $item): ?>
            <a href="<?php echo htmlSpecialChars($basePath) ?>/images/cars/<?php echo htmlSpecialChars($item) ?>" data-lightbox="images">
                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/cars/<?php echo htmlSpecialChars($item) ?>" alt="car" class="other_images" /> 
            </a>
<?php $iterations++; endforeach ?>
    </div>
</div>
<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbfdfccc1d25_scripts')) { function _lbfdfccc1d25_scripts($_l, $_args) { extract($_args)
?>        <script src="<?php echo htmlSpecialChars($basePath) ?>/lightbox/js/lightbox-2.6.min.js"></script>
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
 
<?php call_user_func(reset($_l->blocks['links']), $_l, get_defined_vars()) ; call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars()) ; 