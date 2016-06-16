<!DOCTYPE HTML>
<html>
    <head>
	    <title>Balefire - Fatal Error</title>
        <link rel='stylesheet' type='text/css' href='balefire/css/errors.css'>
    </head>
    <body>
    <header>
        <h1>BALEFIRE - FATAL ERROR</h1>
    </header>
    <div class='wrapper'>
        <?php 
        if ((include 'balefire/php/errors.php') == FALSE) { //Theoretically, this should never fail. If it does, something is _REALLY_ broken.
            echo '<div class=\'error\'>GENERIC FATAL: BaleFire was unable to run, and we were unable to determine why.<br>Please contact your System Administrator for assistance.<br><br><br>[FATAL: ERROR_NOFIND_ERROR_HANDLER]</div>';
        } else {
            echo '';
        }
        ?>
    </div>
    <footer>BaleFire Server Monitor - Version 0.00PRE - © 2016 Carter Ford</footer>
    </body>
</html>
