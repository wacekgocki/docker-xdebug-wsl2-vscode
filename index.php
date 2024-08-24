<?php

$dt = new \DateTime();
$msg = "<h1>Hello Xdebug</h1><h3>Current time: " . $dt->format(DateTimeInterface::ATOM) . "</h3>";
echo $msg;
