<?php //netteCache[01]000390a:2:{s:4:"time";s:21:"0.88962000 1397158046";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"C:\wamp2\www\projekt\Nette\sandbox\app\templates\About\default.latte";i:2;i:1397158044;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"695f643 released on 2013-11-05";}}}?><?php

// source file: C:\wamp2\www\projekt\Nette\sandbox\app\templates\About\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'kalh5octqy')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb2d3f036df2_title')) { function _lb2d3f036df2_title($_l, $_args) { extract($_args)
?>About
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lba23a1b291a_content')) { function _lba23a1b291a_content($_l, $_args) { extract($_args)
?><div id="left_panel" style='width: 600px;'>
    <h1>ABOUT</h1>
    <hr />
    <h2>3. fáza</h2>
    <p>
        V tretej fáze som pridal naslednovnú funkcionalitu: 
    </p>
    <ul>
        <li>Prihlasovanie používateľov: k tomu samozrejme vizuálne prvky, teda aby sa zmenilo menu pri všetkých zobrazeniach a podobne.
            Prihlásiť sa môžete s nickom a loginom "matus"</li>
        <li> Pridávanie inzerátov: Bol pridaný formulár na pridávanie inzerátov, ktorý je samozrejme plne funkčný vrátanie pridávaniu obrázkov a podobne. Pridávať môžu iba prihlásení používatelia</li>
        <li> Obrázky sa na disk ukladajú ako aj miniatúry ako aj v plnej veľkosti a potom sa následne zobrazuje ten potrebný. Cieľom sú samozrejme menšie prenosové dáta (staré inzeráty túto feature nemajú)</li>
        <li> Dynamický bočný panel: Panel troch áut je už dynamický, zobrazujú sa tri posledne pridané inzeráty.?</li>
        <li> Vylistovanie inzerátov, ktoré som pridal ja ako užívateľ. Samozrejme, táto možnosť sa nachádza až po prihlásení.</li>
    </ul>
    <p>
        V priebehu týždňa pridám ďalšie veci ktoré už budú súvisieť  so 4. fázou, každopádne sa tam bude nachádzať registrácia, viacero modelov áut priradeným k značkám (konkrétne cez 1000 modelov).
        Opakujem však, že to už patrí do 4. fázy :)
    </p> 
    <hr />
    <h2>2. fáza</h2>
    <p>V druhej fáze som pridal detail inzerátu, spravil som samotné vyhľadávanie inzerátov. </p>
    <p>Fungujú oba "formuláre". Jeden je určený skôr pre dotykové zariadenia, zatiaľ čo ten druhý pre PC.
        Vyhľadávanie by malo fungovať bez problémov, avšak zatiaľ je pridaný iba jeden inzerát a teda ešte musím ešte nejaký pridať. 
        Aj modely áut ktoré sa načítavajú po zakliknutí značky auta budem postupne pridávať.
    </p>
    <p>Ďalej som doladil chybičky v designe, ktoré sa vyskytovali pri zmenšení prehliadača, resp. na menších zariadeniach. Všetko by už malo fungovať tak ako by malo.
    </p>
    <hr />
    <h2> Účel stránky </h2>
    <p>Stránka slúži ako môj projekt na predmet 'Ročníkový projekt'. Študujem na univerzite Komenského v Bratislave, fakulta matematiky, fyziky a informatiky.</p>
    <h2> Cieľ projektu</h2>
    <p>Cieľom je vytvoriť plnohodnotný autobazár - teda predovšetkým výhľadávanie uložených inzerátov.</p>
    <h2> Funkcionalita </h2>
    <p>
        Základná funkcionalita je vyhľadávanie inzerátov. Keďže sa nato využívajú najmä formuláre tak na stránke budú hneď dva typy. <br />
        Jeden bude určený predovšetkým pre mobilné zariadenia. Bude tvorený viacerými blokmi na ktoré sa dá jednoducho kliknúť aj na dotykových zariadeniach.
        Samozrejme sa tu budú dať vybrať iba základné atribúty akými sú napríklad značka automobilu, model alebo cena. Pre náročnejších bude pripravený aj
        formulár s viacerými možnosťami, kde si budú môcť vybrať takmer všetky atribúty. Ak by niekomu bolo stále málo, tak bude k dispozícii ešte rozšírené 
        vyhľadávanie v 'klasickom' formuláre.</p>
    <p> Následne sa vypíše zoznam inzerátov, ktorý vyhovuje daným kritériam. Samozrejmosťou bude listovanie stránok. Po kliknutí na 
        inzerát sa zobrazí podrobné info o danom inzeráte a galéria obrázkov. <br />
        Pre registrovaných užívateľov bude možnosť pridávať inzeráty, teda si budú môcť svoje uverejniť a budú zaradené do vyhľadávania. <br />
        Admin bude mať veľmi jednoduché rozhranie na mazanie inzerátov, popr. užívateľov. <br />
        Stránka nebude určená na komerčné účely!
    </p>

    <h2>Na stiahnutie špecifikácie môžete použiť tento <a href="../specification.pdf">link</a></h2>


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