<?php //netteCache[01]000384a:2:{s:4:"time";s:21:"0.53348700 1386583496";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:62:"C:\wamp2\www\projekt\Nette\sandbox\app\templates\@layout.latte";i:2;i:1386583494;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'afwhpdp6zu')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb8e3bd6da32_title')) { function _lb8e3bd6da32_title($_l, $_args) { extract($_args)
?>Domovská stránka<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbbf423c7ab2_head')) { function _lbbf423c7ab2_head($_l, $_args) { extract($_args)
;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe0c3b3031f_content')) { function _lbe0c3b3031f_content($_l, $_args) { extract($_args)
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb01cd5a2865_scripts')) { function _lb01cd5a2865_scripts($_l, $_args) { extract($_args)
;
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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta name="viewport" content="initial-style:1" />

        <title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->upper($template->striptags(ob_get_clean()))  ?></title>

        <link rel="stylesheet" media="all" href="<?php echo htmlSpecialChars($basePath) ?>/css/styles.css" />
        <link rel="stylesheet" media="screen and (max-width: 1024px)" href="<?php echo htmlSpecialChars($basePath) ?>/css/small_styles.css" />
        <link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />
        <?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

    </head>

    <body>
        <div id="nav"></div>
        <div id="container">
            <nav>
                <a id="id_logo" href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>
"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/logo.png" /></a>
                <div id="id_ref" onclick="ShowLoginDiv();">Prihlásenie</div>
                <a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>
">Link</a>
                <a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>
">Link</a>
                <a  href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>
">Link</a>
                <div id="id_login">
                    
                    <div id="login_top">Prihlásenie</div>

<?php $_ctrl = $_control->getComponent("newLoginForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>

                </div>
            </nav>

            <section>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

            </section>

            <footer>
                <hr />
                Stránka je vytvorená za účelom projektu <br />
                Copyright 2013 &copy;
            </footer>

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>
        </div>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/nette.ajax.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/JavaScript.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/ajax.js"></script>
        
    </body>
</html>
