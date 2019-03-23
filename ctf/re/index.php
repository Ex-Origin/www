<?php

$dir=__DIR__;
preg_match('/(?<=\/)[a-zA-Z_]+\z/u',$dir,$result);
$type=$result[0];

require_once '../content.php';
type_show($type);