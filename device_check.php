<?php

echo exec('wmic diskdrive get model,serialnumber |more >serial.txt');
//echo exec('wmic diskdrive get model,serialnumber | more >>serial.txt');

?>
