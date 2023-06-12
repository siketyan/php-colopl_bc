--TEST--
Check for \Colopl\ColoplBc\Php70\date_create_immutable() function.
--EXTENSIONS--
colopl_bc
--FILE--
<?php

$dates = [];
for ($i = 0; $i < 1000; $i++) {
    $dates[] = \Colopl\ColoplBc\Php70\date_create_immutable();
    usleep(1);
}
foreach($dates as $date) {
    $formatted = $date->format('u');

    echo "{$formatted}\n";
    if (!$formatted === '000000') {
        die('Failure');
    }
}
die('Success.');

?>
--EXPECTREGEX--
.*Success\.$
