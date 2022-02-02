<?php
ini_set('memory_limit', '-1');

if ($argc > 1) {
    $numItems = $argv[1];
}
else {
    $numItems = 5000000;
}

for ($i=0; $i<$numItems; $i++)
{
    $items[] = [
        "uuid" => md5(rand()),
        "isActive" => md5(rand()),
        "balance" => md5(rand()),
        "picture" => md5(rand()),
        "age" => md5(rand()),
        "eyeColor" => md5(rand()),
        "name" => md5(rand()),
        "gender" => md5(rand()),
        "company" => md5(rand()),
        "email" => md5(rand()),
        "phone" => md5(rand()),
        "address" => md5(rand()),
        "about" => md5(rand()),
        "registered" => md5(rand()),
        "latitude" => md5(rand()),
        "longitude" => md5(rand()),
    ];
}

file_put_contents(__DIR__ . '/data/test_with_' . $numItems . '_entries.json', json_encode($items, JSON_PRETTY_PRINT));
