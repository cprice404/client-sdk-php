<?php

//require __DIR__ . '/vendor/autoload.php';

return function ($event) {
    return 'Hello ' . ($event['name'] ?? 'world');
};
