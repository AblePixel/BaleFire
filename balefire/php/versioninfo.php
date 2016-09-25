<?php
$VERSNUM_SHORT = "0.00PRE";
$VERSION = "BaleFire Server Monitor - Version " . $VERSNUM_SHORT;

function balevers_short() {
    global $VERSNUM_SHORT;
    echo $VERSNUM_SHORT;
}

function balevers() {
    global $VERSION;
    echo $VERSION;
}
?>
