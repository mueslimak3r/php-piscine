#!/usr/bin/php
<?php
if ($argc < 2)
    exit();
$result = trim($argv[1]);
while ((strpos($result, "  ")) == TRUE)
    $result = str_replace("  ", " ", $result);
echo "$result";
?>