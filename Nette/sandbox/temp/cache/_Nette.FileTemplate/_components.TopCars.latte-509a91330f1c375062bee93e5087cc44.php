<?php //netteCache[01]000385a:2:{s:4:"time";s:21:"0.47210500 1396612739";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:63:"C:\wamp2\www\projekt\Nette\sandbox\app\components\TopCars.latte";i:2;i:1396612738;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\components\TopCars.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 't0ezjsu839')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$iterations = 0; foreach ($cars as $item): ?>
    <a href="<?php echo htmlSpecialChars($basePath) ?>/detail/show/<?php echo htmlSpecialChars($item->id) ?>" target="_blank">
        <div class="right_top">
            <div class="top">
                <?php echo Nette\Templating\Helpers::escapeHtml($znacky[$item->brand], ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($modely[$item->model], ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($item->name, ENT_NOQUOTES) ?>

            </div>
            <div>
                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/cars/<?php echo htmlSpecialChars($item->main_image) ?>" alt="car_image" />
                <p> r.v.: <?php echo Nette\Templating\Helpers::escapeHtml($item->year, ENT_NOQUOTES) ?>
, Objem motora: <?php echo Nette\Templating\Helpers::escapeHtml($item->capacity, ENT_NOQUOTES) ?>
, <?php echo Nette\Templating\Helpers::escapeHtml($item->power, ENT_NOQUOTES) ?>
&nbsp;kW, <?php echo Nette\Templating\Helpers::escapeHtml($stringy[$item->gas], ENT_NOQUOTES) ?>, 
                    <?php echo Nette\Templating\Helpers::escapeHtml($item->kilometres, ENT_NOQUOTES) ?>
&nbsp;km, <?php echo Nette\Templating\Helpers::escapeHtml($stringy[$item->gear], ENT_NOQUOTES) ?>&nbsp;prevodovka</p>
                <span>Cena: <?php echo Nette\Templating\Helpers::escapeHtml($item->price, ENT_NOQUOTES) ?>&euro;</span>
            </div>
        </div>
    </a>
<?php $iterations++; endforeach ;