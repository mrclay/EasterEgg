<?php
/**
 * Send JS to show an easter egg on a web page
 */

function getDataUrl($file, $contentType) {
    $file = __DIR__ . '/' . $file;
    return "data:$contentType;base64," . base64_encode(file_get_contents($file));
}
function getCss() {
    return strtr(file_get_contents(__DIR__ . '/style.css'), "\r\n", "  ");
}

header('Content-Type: text/javascript;charset=utf-8');
header('Cache-Control: private,max-age=86400');

ob_start("ob_gzhandler");

if (0) { ?><script><?php } ?>

!function () {
    function loadScript(d,b){var a=document.createElement("script"),c="onreadystatechange"in a?"onreadystatechange":"onload";a[c]=function(){if(-1<"loaded,complete".indexOf(this.readyState||"loaded"))a[c]=null,b&&b(),a.parentNode.removeChild(a)};a.src=d;document.body.appendChild(a)}

    function start() {
        jQuery(function ($) {
            setTimeout(function () {
                $('head').append('<style><?= getCss(); ?></style>');
                $('body').append('<div id="gje"><img src="<?= getDataUrl('pizza.png', 'image/png') ?>"> Great Job, Everyone! <img src="<?= getDataUrl('brownie.png', 'image/png') ?>"></div>');
                $('#gje').animate({ top: '25px' });
            }, 1000);
        });
    }

    if (this.jQuery) {
        start();
    } else {
        loadScript("https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js", start);
    }
}();
