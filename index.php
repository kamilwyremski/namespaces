<?php

require_once(__DIR__.'/classes/MojaKlasa.php');

require_once(__DIR__.'/classes_outer/MojaKlasa.php');

echo outer\MYCONST;

echo('<br>');

echo outer\MojaKlasa::Test();